<?php
require_once 'function.php';
$pdo = pdo_qery('','check');

$result = pdo_qery($pdo, 'select_one', $_GET[id]);

switch ($_POST[type_submit]){
    case 'update':
        pdo_qery($pdo, 'update', $_POST);
        header('Location: /index.php');
        break;
    case 'return':
        header('Location: /index.php');
        break;

}

require_once 'html/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron my-4">
                    <h1>Edit clients (id=<? echo $_GET[id]; ?>)</h1>
                    <form role="form" id="myForm" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<? echo $_GET[id]; ?>">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<? echo $result[0][name]; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" class="form-control" id="surname" name="surname" value="<? echo $result[0][surname]; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" value="<? echo $result[0][age]; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<? echo $result[0][email]; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="<? echo $result[0][phone]; ?>">
                            </div>
                            <button type="submit" class="btn btn-success float-right" name="type_submit" value="update">Update user</button>
                            <button type="submit" class="btn btn-danger float-right" name="type_submit" value="return">Return</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php

require_once 'html/footer.php';