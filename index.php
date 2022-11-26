<?php
    // Add the header
    require './inc/header.php';
?>
    <main>
        <section class="vh-100" style="background-color: #2779e2;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">
                        <h1 class="text-white mb-4">Create Profile</h1>
                        <form action="profile.php" method="POST">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body">
                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Full name</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="text" name="name" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <hr class="mx-n3">
                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Email address</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="text" name="email" class="form-control form-control-lg" placeholder="example@example.com" />
                                        </div>
                                    </div>
                                    <hr class="mx-n3">
                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0"> BIO</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="text" class="form-control" name="bio" placeholder="Edit your BIO"  />
                                        </div>
                                    </div>
                                    <hr class="mx-n3">
                                    <div class="px-5 py-4">
                                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="submit" onclick="location.replace('profile.php')">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
    // add our footer template
    require './inc/footer.php';
?>