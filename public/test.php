<?php

require '../vendor/rb.php';
$db = require '../config/db.php';

R::setup($db['dsn'], $db['user'], $db['password']);
R::freeze(true); // Don`t change table structure
R::fancyDebug(true); // Show query

// Create
//$cat = R::dispense('category');
//$cat->title = 'Category 3';
//$id = R::store($cat);
//die(var_dump($id));

// Read
//$cat = R::load('category', 2);
//echo "<pre>";
//die(var_dump($cat));

// Update
//$cat = R::load('category', 2);
//echo $cat->title . "<br />";
//$cat->title = 'New category 2';
//R::store($cat);
//echo $cat->title . "<br />";

// Delete
//$cat = R::load('category', 2);
//R::trash($cat); // delete row
//R::wipe('category'); // delete table

//$cats = R::findAll('category');
//$cats = R::findAll('category', 'id > ?', [2]);
//$cats = R::findOne('category', 'id = ?', [2]);
//echo "<pre>";
//die(var_dump($cats));
