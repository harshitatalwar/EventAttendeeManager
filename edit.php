<?php
$title = "Edit Details";
require_once "message/header.php";
require_once 'db/conn.php';

if (!isset($_GET['id'])) {
    echo "<h1 class='display-3 text-center text-danger'>AN ERROR OCCURRED<h1>";
} else {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);
    $results = $crud->getSpeciality();

?>


    <h1 class="mt-2 mb-3" style="text-align: center;">EDIT DETAILS</h1>
    <form action="updateDetails.php" method="post">
        <input type="hidden" name="id" value=<?php echo $result['attendee_ID']; ?>>
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" value=<?php echo $result['Firstname'] ?> id="firstName" name="firstname">

        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" value=<?php echo $result['Lastname'] ?> id="lastName" name="lastname">

        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" value=<?php echo $result['DateOfBirth'] ?> id="dob" name="dob">

        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value=<?php echo $result['Email'] ?> id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" class="form-control" value=<?php echo $result['Contact'] ?> id="contact" name="contact">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Speciality</label>
            <select class="form-select" aria-label="Default select example" name="speciality">

                <?php while ($row = $results->fetch(PDO::FETCH_ASSOC)) { ?>

                    <option value="<?php echo $row['Speciality_ID']  ?>" <?php if ($row['Speciality_ID'] == $result['Speciality_ID']) {
                                                                                echo "selected";
                                                                            } ?>>
                        <?php echo $row['Expertise'] ?></option>

                <?php } ?>
            </select>
        </div>
        <div class="d-grid ">
            <button type="submit" class="btn btn-warning  mb-5 btn-block" name="update">UPDATE</button>

        </div>
    </form>
<?php } ?>

<?php require_once "message/footer.php"; ?>