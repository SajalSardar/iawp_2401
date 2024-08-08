<?php

    include_once 'header_html.php';

?>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                <?php
                    if (isset($success)) {
                    ?>
                <div class="alert alert-success" role="alert">
                    <?=$success?>
                </div>
                <?php
                    }
                ?>

                    <div class="card">
                        <div class="card-header">
                            <h2>Sign Up</h2>
                        </div>
                        <div class="card-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input type="text" class="form-control" name="name">
                                    <?php
                                        echo isset($errors['nameErr']) ? '<p class="text-danger">' . $errors['nameErr'] . '</p>' : '';
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">User Email</label>
                                    <input type="text" class="form-control" name="email">
                                    <?php
                                        echo isset($errors['mailErr']) ? '<p class="text-danger">' . $errors['mailErr'] . '</p>' : '';
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <?php
                                        echo isset($errors['passErr']) ? '<p class="text-danger">' . $errors['passErr'] . '</p>' : '';
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
include_once 'footer_html.php'
?>