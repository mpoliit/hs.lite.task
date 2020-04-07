<?php
require_once 'html/header.php';
$alert = [];

if (isset($_GET['ckeck_str'])){
    if (!empty($_GET['str_int'])){
        $reg = '/^\d{1,5}$/';
        if(preg_match($reg, $_GET['str_int'])){
            array_push($alert, 'success', 'Строка является числом до 5 символов');
        } else {
            array_push($alert, 'danger', 'Строка не является числом до 5 символов!');
        };
    } else {
        array_push($alert, 'danger', 'Необходимо заполнить поле ввода!');
    }
}

if (isset($_GET['ckeck_space'])){
    if (!empty($_GET['str_space'])) {
        $reg = '/\s+/';
        if (preg_match($reg, $_GET['str_space'])) {
            array_push($alert, 'success', 'Были удалены все повторяющиеся пробелы, новая строка: <strong>' . preg_replace($reg, ' ', $_GET['str_space']) . '</strong>!');
        } else {
            array_push($alert, 'danger', 'Строка не имеет повторяющихся пробелов!');
        };
    } else {
        array_push($alert, 'danger', 'Необходимо заполнить поле ввода!');
    }
}

if (isset($_GET['ckeck_title'])){
    if (!empty($_GET['str_title'])) {
        $html = @file_get_contents($_GET['str_title']);
        $reg = '/<title>(.*)<\/title>/';

        preg_match($reg, $html, $matches);

        if (sizeof($matches)){
            array_push($alert, 'success', 'Title: <strong>' . $matches[1] . '</strong>!');
        } else {
            array_push($alert, 'danger', 'Не удалось получить title данной страницы');
        }
    } else {
        array_push($alert, 'danger', 'Необходимо заполнить поле ввода!');
    }
}

if (isset($_GET['ckeck_auth'])){
    if (!empty($_GET['str_login']) AND !empty($_GET['str_pass']) AND !empty($_GET['str_mail']) AND !empty($_GET['str_about'])) {
        $reg_login = '/^.{1,15}$/';
        $reg_pass ='/^([a-z]|[а-я]|[А-Я]|\d|-|_){8,}$/i';
        if (!preg_match($reg_login, $_GET['str_login'])){
            array_push($alert, 'danger', 'Логин не валидный, требования: максимум 15 символов');
        }
        if (!preg_match($reg_pass, $_GET['str_pass'])){
            array_push($alert, 'danger', 'Пароль не валидный, требования: минимум 8 символов, русские и английские буквы, цифры, - и _');
        }
        array_push($alert, 'success', 'Форма валидна');
    } else {
        array_push($alert, 'danger', 'Необходимо заполнить все поля ввода!');
    }
}

if (sizeof($alert)){
    print_r("<div class=\"alert alert-$alert[0]\" role=\"alert\">$alert[1]</div>");
}
?>
    <div class="container">
        <div class="row bg-light">
            <h4 class="col-md-12">Проверка являеся ли значение строка числом до 5 цифр</h4>
            <form method="get" >
                <div class="form-group">
                    <div class="col-auto">
                        <label for="str_int">Поле</label>
                        <input type="text" class="form-control mb-2" id="str_int" name="str_int" value="<?php print_r($_GET['str_int']); ?>">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2" name="ckeck_str">Проверить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row bg-white">
            <h4 class="col-md-12">Замена всех пробелов на один</h4>
            <form method="get" >
                <div class="form-group">
                    <div class="col-auto">
                        <label for="str_space">Поле</label>
                        <input type="text" class="form-control mb-2" id="str_space" name="str_space" value="<?php print_r($_GET['str_space']); ?>">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2" name="ckeck_space">Проверить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row bg-light">
            <h4 class="col-md-12">Вывод title по ссылке</h4>
            <form method="get" >
                <div class="form-group">
                    <div class="col-auto">
                        <label for="str_title">Ссылка</label>
                        <input type="text" class="form-control mb-2" id="str_title" name="str_title" value="<?php print_r($_GET['str_title']); ?>">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2" name="ckeck_title">Проверить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row bg-white">
            <h4 class="col-md-12">Форма регистрации пользователя</h4>
            <form method="get" >
                <div class="form-group">
                    <div class="col-auto">
                        <label for="str_login">Логин*</label>
                        <input type="text" class="form-control mb-2" id="str_login"  name="str_login" value="<?php print_r($_GET['str_login']); ?>">
                    </div>
                    <div class="col-auto">
                        <label for="str_pass">Пароль*</label>
                        <input type="text" class="form-control mb-2" id="str_pass"  name="str_pass" value="<?php print_r($_GET['str_pass']); ?>">
                    </div>
                    <div class="col-auto">
                        <label for="str_mail">Email*</label>
                        <input type="text" class="form-control mb-2" id="str_mail"  name="str_mail" value="<?php print_r($_GET['str_mail']); ?>">
                    </div>
                    <div class="col-auto">
                        <label for="str_about">О себе*</label>
                        <input type="text" class="form-control mb-2" id="str_about"  name="str_about" value="<?php print_r($_GET['str_about']); ?>">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2" name="ckeck_auth">Проверить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php


require_once 'html/footer.php';