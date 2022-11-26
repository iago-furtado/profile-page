<?php

// Include database file
include './inc/database.php';

$profile = new database();

// Insert Record in customer table
if(isset($_POST['submit'])) {
  $profile->insertData($_POST);
}

?>
<?php
    // Add header
    require './inc/header.php';
?>
    <main class="main">
    <?php
    // Messages
        if (isset($_GET['msg1']) == "insert") {
        echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Investment added successfully
              </div>";
        }
        if (isset($_GET['msg2']) == "update") { 
          echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Investment updated successfully
              </div>";
        }
        if (isset($_GET['msg3']) == "delete") {
          echo "<div class='alert alert-success alert-dismissible'>
                <button type='button', class='close' data-dismiss='alert'>×</button>
                Investment deleted successfully
              </div>";
        }
    ?>
        <section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded" style="
        background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/background2.webp);
        ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body m-3">
                            <div class="row">
                                <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp"
                                    class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
                                </div>
                                <!-- Button to edit the profile -->
                                <button type="button" class="btn btn-primary" onclick="location.replace('edit.php')">Edit Profile</button>
                                <button type="button" class="btn btn-danger" onclick="location.replace('index.php')">Delete</button>
                                <?php
                                $userProfile = $profile->displayData();
                                foreach ($userProfile as $userProfile) {
                                ?>
                                 <div class="col-lg-8">
                                    <p class="text-muted fw-light mb-4">
                                    <?php echo $userProfile['bio']; ?>
                                    </p>
                                    <p class="fw-bold lead mb-2"><strong><?php echo $userProfile['name']; ?></strong></p>
                                    <p class="fw-bold text-muted mb-0"><?php echo $userProfile['email']; ?></p>
                                </div>
                                <?php 
                                    } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
    // Add footer 
    require './inc/footer.php';
?>