<!-- HEADER -->
<?php
$title = 'index';
 require_once 'includes/header.php';
 ?>

     
        <h1 class = "text-center">Registration for IT Conference</h1>

        <form method="get" action="success.php">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Area of Expertise</label>
                <select class="form-control" id="specialty" name="specialty">
                    <option value="" selected hidden>Choose Option</option>
                    <option>Database Admin</option>
                    <option>Software Developer</option>
                    <option>Web Administrator</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
                <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary" type="submit" name="submit">Button</button>
            </div>
        </form>
    

<!-- FOOTER -->
<?php require_once 'includes/footer.php';?>

