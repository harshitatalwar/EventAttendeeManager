<?php
require_once 'db/conn.php';


if (!isset($_GET['id'])) {
    include 'message/errormessage.php';
} else {
    //get id values
    $id = $_GET['id'];
    //delete row
    $issuccess = $crud->deleteRecord($id);

    //Redirect to list 
    if ($issuccess) {
        header("Location: view_records.php");
        include 'message/successmessage.php';
    } else {
        include 'message/errormessage.php';
    }
}
