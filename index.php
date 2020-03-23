<?php
require_once 'function.php';
$pdo = pdo_qery('','check');

switch ($_POST["type_submit"]){
    case 'create': {
        pdo_qery($pdo, 'create');
        break;
    }
    case 'insert': {
        pdo_qery($pdo, 'insert', $_POST);
        break;
    }
    case 'delete': {
        foreach ($_POST['id-list'] AS $value){
            pdo_qery($pdo, 'delete', $value);
        }
        break;
    }

}

$users_list = pdo_qery($pdo,'select');

require_once 'html/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron my-4">
                <h1>Create table Users</h1>
                <form role="form" id="myForm" method="post">
                    <button type="submit" class="btn btn-primary float-right" name="type_submit" value="create">Create table</button>
                </form>
            </div>
            <div class="jumbotron my-4">
                <h1>Clients list</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">surname</th>
                        <th scope="col">email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!is_null($users_list)){
                        foreach ($users_list as $user){
                            ?>
                            <tr>
                            <th scope="row"><a href="edit_clients.php?id=<?php print_r($user["id"]); ?>"><?php print_r($user["id"]); ?></a></th>
                            <td><?php print_r($user["name"]); ?></td>
                            <td><?php print_r($user["surname"]); ?></td>
                            <td><?php print_r($user["email"]); ?></td>
                        </tr>
                        <?
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron my-4">
                <h1>Create new client</h1>
                <form role="form" id="myForm" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <button type="submit" class="btn btn-success float-right" name="type_submit" value="insert">Create user</button>
                    </div>
                </form>
            </div>

            <div class="jumbotron my-4">
                <h1>Delete user</h1>
                <form role="form" id="myForm" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2" name="id-list[]">
                            <?php
                            if(!is_null($users_list)){
                                foreach ($users_list as $user){
                                    ?>
                                    <option value="<?php print_r($user["id"]); ?>"><?php print_r($user["id"]); ?></option>
                                    <?
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger float-right" name="type_submit" value="delete">Delete user(s)</button>
                </form>
            </div>
        </div>
    </div>
</div>
