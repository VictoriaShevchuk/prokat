<?php
include 'temp/db.php';
include 'temp/head.php';
include 'temp/navuser.php';
session_start();
$id_user = $_SESSION['id_user'];
if (!empty($_POST)) {
    $id_car = $_GET['id_car'];
    $telephone = $_POST['telephone'];
    $date = date('Y-m-d');
    $sql = "INSERT INTO arendacars (id_user, id_car, date, telephone) VALUE ($id_user, $id_car, '$date', '$telephone')";
    $result = $mysqli->query($sql);
    header('location: lichcab.php');
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h1 style="text-align: center">Аренда</h1>
           <form class="form-inline" action="" method="POST">
           <div class="mb-3">
                    <label for="telephone" class="form-label">Введите номер телефона</label>
                    <input type="text" class="form-control" name="telephone" id="telephone" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Арендовать</button>
                    <p><?php echo $message ?></p>
                </div>
           </form>
        </div>
    </div>
</div>
