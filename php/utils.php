<?php
function is_valid_minecraft_username($username) {
    return !(preg_match('/[^a-zA-Z0-9_]/', $_GET['nick'])
        || strlen($_GET['nick']) < 3
        || strlen($_GET['nick']) > 16);
}