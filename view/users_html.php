<?php

    include_once 'header_html.php';

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>All users</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($users as $user) {
                                    ?>
                                <tr>
                                    <td><?=$user['id']?></td>
                                    <td><?=$user['name']?></td>
                                    <td><?=$user['email']?></td>
                                    <td><?=$user['photo']?></td>
                                    <td>
                                        <a href="user.php?id=<?=$user['id']?>" class="btn btn-sm btn-primary">View</a>
                                        <a href="updateuser.php?id=<?=$user['id']?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="delete.php?id=<?=$user['id']?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

    include_once 'footer_html.php';

?>