<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Notes";

$id = $_GET['id'];

$currentUserId = 1;
$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();
 
authorization($note['user_id'] == $currentUserId);

// dd($notes);

require 'views/notes/show.view.php';
?>