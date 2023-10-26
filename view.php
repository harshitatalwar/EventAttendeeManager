<?php
$title = "View Details";
require_once "message/header.php";
require_once 'db/conn.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);
?>

    <h1 class="display-2 text-center text-success">USER DETAILS</h1>
    <div class="card mt-4" style="width: 18rem; ">
        <div class="card-body">
            <p class="card-text"># : <?php echo $result['attendee_ID'];  ?></p>
            <p class="card-text">NAME : <?php echo $result['Firstname'] . " " . $result['Lastname']; ?></p>
            <p class="card-text">DATE OF BIRTH : <?php echo $result['DateOfBirth'];  ?></p>
            <p class="card-text">EMAIL : <?php echo $result['Email']; ?></p>
            <p class="card-text">CONTACT : <?php echo $result['Contact'];  ?></p>
            <p class="card-text">SPECIALTY : <?php echo $result['Expertise'];  ?></p>
            <a href="edit.php?id=<?php echo $result['attendee_ID'] ?>" class="btn btn-warning m-3 btn-block text-center">EDIT</a>

        </div>
    </div>
<?php } else {
    include 'message/errormessage.php';
} ?>
<?php require_once "message/footer.php"; ?>