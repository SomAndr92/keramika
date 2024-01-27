<?php

function dbconn() {
    $db = @new mysqli('localhost', 'root', '', 'keramika');
    if ($db->connection_errno) {
        echo "error: " . $db->connection_errno;
    } else {
        return $db;
}
}