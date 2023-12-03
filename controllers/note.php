<?php
$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$user_id = 1;

$note = $db->query("SELECT * FROM notes where id = $id")->fetch();

$heading = "Note";

if ( ! $note) {
    abort();
}

if ($note['user_id'] !== $user_id) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
