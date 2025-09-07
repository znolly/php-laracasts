<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Notes";

$notes = $db->query('select * from notes where user_id = 1')->findAll();

// dd($notes);

require 'views/notes/index.view.php';
?>