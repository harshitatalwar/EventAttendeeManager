<?php
$title = "Index";
require_once "message/header.php";
require_once 'db/conn.php';
$results = $crud->getSpeciality();
?>
<h1 class="mt-2 mb-3" style="text-align: center;">Registration For Conference.</h1>
<form action="success.php" method="post">

    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstname">

    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastname">

    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" placeholder="YYYY/MM/DD" name="dob">

    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="contact" class="form-label">Contact Number</label>
        <input type="number" class="form-control" id="contact" name="contact">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    </div>
    <div class="mb-3">
        <label for="speciality" class="form-label">Speciality</label>
        <select class="form-select" aria-label="Default select example" name="speciality">

            <?php while ($row = $results->fetch(PDO::FETCH_ASSOC)) { ?>

                <option value="<?php echo $row['Speciality_ID']  ?>"><?php echo $row['Expertise'] ?></option>

            <?php } ?>
        </select>
    </div>
    <div class="d-grid ">
        <button type="submit" class="btn btn-primary  mb-5 btn-block" name="submit">Submit</button>

    </div>
</form>

<?php require_once "message/footer.php"; ?>