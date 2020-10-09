<?php
define("Book", "book.dat");
require_once "model.php";

$book = loadBook(Book);

if (!empty($_REQUEST['doAdd'])){
    $book += [time() => $_REQUEST['new']];
    saveBook(Book, $book);
}

include "view.php";
