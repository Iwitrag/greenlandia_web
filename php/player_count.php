<?php

class PlayerCount {

    private $ip;
    private $port;
    private $amount_of_players;
    private $errors;

    public function __construct($ip, $port) {
        $this->ip = $ip;
        $this->port = $port;
        $this->errors = array();

        $this->amount_of_players = $this->try_minecraft_ping();
        if ($this->amount_of_players == -1)
            $this->amount_of_players = $this->try_minecraft_query();
        if ($this->amount_of_players == -1)
            $this->amount_of_players = $this->try_fakaheda_query();
    }

    public function get_amount_of_players() {
        return (int)$this->amount_of_players;
    }

    public function get_errors() {
        return $this->errors;
    }

    // Minecraft ping (https://github.com/xPaw/PHP-Minecraft-Query)
    private function try_minecraft_ping() {
        require_once('mc_ping.php');
        $obj = null;
        $status = null;
        try {
            $obj = new MinecraftPing($this->ip, $this->port, 3);
            $status = $obj->Query();
        }
        catch (MinecraftPingException $e) {
            array_push($this->errors, 'Minecraft ping - ' . $e->getMessage());
        }
        finally {
            if ($obj != null)
                $obj->Close();
        }
        if (isset($status['players']) && isset($status['players']['online']))
            return $status['players']['online'];
        else
            array_push($this->errors, 'Minecraft ping - returned data were missing');

        return -1;
    }

    // Minecraft query (https://github.com/thedudeguy/PHP-Minecraft-Query)
    private function try_minecraft_query() {
        require_once('mc_query.php');
        $server = new Query($this->ip, $this->port, 3);
        if ($server->connect()) {
            $status = $server->get_info();
            if ($status !== false) {
                if (isset($status['numplayers']))
                    return $status['numplayers'];
                else
                    array_push($this->errors, 'Minecraft query - returned data were missing');
            } else
                array_push($this->errors, 'Minecraft query - failed to get_info()');

        } else
            array_push($this->errors, 'Minecraft query - connection failed');

        return -1;
    }

    // Fakaheda JSON query
    private function try_fakaheda_query() {
        ini_set('default_socket_timeout', 3);
        $content = @file_get_contents('http://query.fakaheda.eu/' . $this->ip . ':' . $this->port . '.feed');
        if ($content !== false) {
            $status = json_decode($content, true);
            if ($status != null) {
                if (isset($status['players']))
                    return $status['players'];
                else
                    array_push($this->errors, 'Minecraft FH query - returned data were missing');
            } else
                array_push($this->errors, 'Minecraft FH query - JSON decoding failed');
        } else
            array_push($this->errors, 'Minecraft FH query - failed to get file content');

        return -1;
    }

}
