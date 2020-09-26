<?php
include_once('player_count.php');
$obj_player_count = new PlayerCount('82.208.17.43', 27300);
$amount_of_players = $obj_player_count->get_amount_of_players();
if ($amount_of_players == 0)
    echo 'Na serveru teď nikdo není.';
else if ($amount_of_players == 1)
    echo 'Na serveru hraje <b>1</b> hráč.';
else if ($amount_of_players >= 2 && $amount_of_players <= 4)
    echo 'Na serveru hrají <b>' . $amount_of_players . '</b> hráči.';
else if ($amount_of_players >= 5)
    echo 'Na serveru hraje <b>' . $amount_of_players . '</b> hráčů.';
else
    echo 'Nelze zjistit počet hráčů. <small class="text-warning">(' .
        implode(', ', $obj_player_count->get_errors()) . ')</small>';
