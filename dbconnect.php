<?php

function dbconn() {
    static $db=null;
    if (!isset ($db)){
        $db = @new mysqli('localhost', 'root', '', 'keramika');
        if ($db->connection_errno) {
            echo "error: " . $db->connection_errno;
        }
    }
        return $db;
}