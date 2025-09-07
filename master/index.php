<?php
require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';





/*
$id = $_GET['id'];
// $query = "select * from posts where id = {$id}"; never inline sql query
$query = "select * from posts where id = :id"; // use placeholder or wildcard ?

$posts = $db->query($query, [':id'=>$id])->fetch();


dd($posts);
*/
