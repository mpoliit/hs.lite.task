<?php
function pdo_qery($pdo, $type, $data = null){
    $config = unserialize(file_get_contents('config'));
    $dsn = "mysql:host=$config[host];dbname=$config[db_name]";
    $opt = [
        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC
    ];

    $error1 = '<div class="alert alert-danger" role="alert">';
    $error2 = '</div>';

    switch ($type){
        case 'create':{
            $query = '
                CREATE TABLE IF NOT EXISTS users(
                    `id` INT(2) PRIMARY KEY AUTO_INCREMENT,
                    `name` VARCHAR(55) NOT NULL,
                    `surname` VARCHAR(55) NOT NULL,
                    `age` INT(3) NOT NULL,
                    `email` VARCHAR(160) NOT NULL UNIQUE,
                    `phone` VARCHAR (55) DEFAULT NULL
                );
            ';
            $result = $pdo->prepare($query);
            if($result->execute()){ print_r($error1.'Table users successfully create'.$error2);};
            break;
        }
        case 'insert': {
            try {
                $query = '
                    INSERT INTO users (name, surname, age, email, phone)
                    VALUES (:name, :surname, :age, :email, :phone);
                 ';
                $result = $pdo->prepare($query);
                $result = $result->execute([
                    'name' => "$data[name]",
                    'surname' => "$data[surname]",
                    'age' => "$data[age]",
                    'email' => "$data[email]",
                    'phone' => "$data[phone]"
                ]);
            } catch (PDOException $e) {
                if ($e->getCode() == '23000'){
                    print_r($error1."This email <strong>`$data[email]`</strong> is already in use!".$error2);
                } elseif ($e->getCode() == '42S02') {
                    print_r($error1.'Table <strong>`Users`</strong> not create!<br>Please press button <strong>"Create table"</strong>'.$error2);
                } else {
                    print_r($error1.$e->getCode() . ' ' . $e->getMessage().$error2);
                }
            }
            break;
        }
        case 'select': {
            try {
                $query = '
                SELECT * FROM users;
            ';
                $query = $pdo->prepare($query);
                $query->execute();
                $result = $query->fetchAll();
                return $result;
            } catch (PDOException $e){

            }
            break;
        }
        case 'select_one': {
            try {
                $query = "
                SELECT * FROM users WHERE id=$data LIMIT 1;
            ";
                $query = $pdo->prepare($query);
                $query->execute();
                $result = $query->fetchAll();
                return $result;
            } catch (PDOException $e){

            }
            break;
        }
        case 'update': {
            $query = '
                UPDATE users SET
                    `name`      = :name,
                    `surname`   = :surname,
                    `age`       = :age,
                    `email`     = :email,
                    `phone`     = :phone
                WHERE
                    `id`        = :id
             ';
            $result = $pdo->prepare($query);
            $result = $result->execute([
                'name' => "$data[name]",
                'surname' => "$data[surname]",
                'age' => "$data[age]",
                'email' => "$data[email]",
                'phone' => "$data[phone]",
                'id' => "$data[id]"
            ]);
            break;
        }
        case 'delete': {
            try {
                $query = "
                DELETE FROM users WHERE id=$data;
            ";
                $query = $pdo->prepare($query);
                $query->execute();
                $result = $query->fetchAll();
                return $result;
            } catch (PDOException $e){

            }
            break;
        }
        case 'check': {
            try {
                $pdo = new PDO($dsn, $config["user"], $config["pass"], $opt);
                return $pdo;
            } catch (PDOException $e){
                header('Location: /edit_config.php');
            }
            break;
        }
    }






}