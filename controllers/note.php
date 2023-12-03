<?php
$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes where id = $id")->fetch();

$heading = "Note";


require "views/note.view.php";
