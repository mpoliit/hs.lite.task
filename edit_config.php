<?php
if(isset($_POST[save_date])){
    $array_field = [];
    $array_field['host'] = $_POST[host];
    $array_field['db_name'] = $_POST[db_name];
    $array_field['user'] = $_POST[user];
    $array_field['pass'] = $_POST[pass];

    $date = serialize($array_field);
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/config', $date);
    header('Location: /index.php');
}
require_once 'html/header.php';

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron my-4">
                <h1>Edit settings files</h1>
                <form role="form" id="myForm" method="post">
                    <div class="form-group">
                        <label for="host">Host</label>
                        <input type="text" class="form-control" id="host" name="host" required>
                    </div>
                    <div class="form-group">
                        <label for="db_name">Name database</label>
                        <input type="text" class="form-control" id="db_name" name="db_name" required>
                    </div>
                    <div class="form-group">
                        <label for="user">User</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <button type="submit" class="btn btn-secondary float-right" name="save_date">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    require_once 'html/header.php';
?>