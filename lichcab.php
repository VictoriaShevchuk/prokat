<?php
include 'temp/db.php';
include 'temp/head.php';
include 'temp/navuser.php';
session_start();
$id_user = $_SESSION['id_user'];
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="text-align: center">Личный кабинет</h1>
            <table border="1" class="table">
                <tr class="table-prime">
                <th>Изображение</th>
                    <th>Название автомобиля</th>
                    <th>Дата заказа</th>
                    <th>Цена</th>
                </tr>
                <?php
                $sql = "SELECT * FROM arendacars, cars WHERE arendacars.id_car = cars.id_car AND id_user = '$id_user'"; 
                $result = $mysqli->query($sql);
                foreach ($result as $row) {
                    echo '<tr><td><img src="img/'.$row['photo'].'"style="width:150px"></td>
                    <td>'.$row['brand_car'].' '.$row['model_car'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['price'].'</td></tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
