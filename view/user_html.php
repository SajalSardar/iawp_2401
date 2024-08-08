<?php

    include_once 'header_html.php';

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>User Info</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td width="10%">Id</td>
                                <td width="3%">:</td>
                                <td><?=$user['name']?></td>
                            </tr>
                            <tr>
                                <td width="10%">Name</td>
                                <td width="3%">:</td>
                                <td><?=$user['name']?></td>
                            </tr>
                            <tr>
                                <td width="10%">Email</td>
                                <td width="3%">:</td>
                                <td><?=$user['email']?></td>
                            </tr>
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