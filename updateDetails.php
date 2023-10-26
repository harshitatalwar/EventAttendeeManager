<?php
/* $title = "UPDATE";
require_once "message/header.php"; */
require_once 'db/conn.php';
?>
<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $speciality = $_POST['speciality'];

    $issuccess = $crud->updateDetails($id, $firstname, $lastname,  $dob, $email, $contact, $speciality);

    if ($issuccess) {

        header("Location: view_records.php");
    } else {
        include 'message/errormessage.php';
    }
}
?>