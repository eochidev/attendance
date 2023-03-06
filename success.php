<!-- HEADER -->
<?php
$title = 'Success';
 require_once 'includes/header.php';
 ?>

<h1 class="text-center text-success">You Have Been Registered!</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_GET['firstname']. ' ' . $_GET['lastname'];?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_GET['specialty'];?>
        </h6>
        <p class="card-text">
            <?php echo 'Email: ' . $_GET['email'];?>
        </p>
        <p class="card-text">
            <?php echo 'phone: ' . $_GET['phone'];?>
        </p>
        <p class="card-text">
            <?php echo 'Date of Birth: ' . $_GET['dob'];?>
        </p>
    </div>
</div>

<?php

    echo $_GET['firstname'];
    echo $_GET['lastname'];
    echo $_GET['dob'];
    echo $_GET['specialty'];
    echo $_GET['email'];
    echo $_GET['phone'];

?>


<!-- FOOTER -->
<?php require_once 'includes/footer.php';?>