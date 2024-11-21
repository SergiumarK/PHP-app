<?php 

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Notes';

$notes = $db->query('select * from notes where user_id = 17')->get();

view('notes/index.view.php', [
    'notes' => $notes,
    'heading' => 'My Notes'
]);
