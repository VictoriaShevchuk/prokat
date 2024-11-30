<?php
include 'temp/db.php';
include 'temp/head.php';
include 'temp/nav.php';
$message = '';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = $mysqli->query($sql);
    $user = mysqli_fetch_assoc($result);
    if (!empty($user)) {
        session_start();
        $_SESSION['id_user'] = $user['id_user'];
        header('location: lichcab.php');

    }
    else {
        $message = 'Логин или пароль введены неверно!';
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1 style="text-align: center">Авторизация</h1>
           <form class="form-inline" action="" method="POST">
           <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" name="login" id="login" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="password" id="password" required><br>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <p><?php echo $message ?></p>
                </div>
           </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>