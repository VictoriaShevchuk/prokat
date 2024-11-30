<?php
include 'temp/db.php';
include 'temp/head.php';
session_start();
if (isset($_SESSION['id_user'])) {
    include 'temp/navuser.php';
}
else {
    include 'temp/nav.php';
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h1 style="text-align: center">Наши автомобили</h1>
            <?php
            $sql = "SELECT * FROM cars";
            $result = $mysqli->query($sql);
            echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
            foreach ($result as $row) {
                echo '<div class="card">
                <img src="img/'.$row['photo'].'" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$row['brand_car'].' '.$row['model_car'].'</h5>
                  <p class="card-text">Год производства: '.$row['year_release'].'</p>
                  <p class="card-text">Цвет: '.$row['color'].'</p>
                  <p class="card-text">Стоимость аренды: '.$row['price'].'</p>
                </div>
                <button type="button" class="btn btn-primary" >
                <a href="myorder.php?id_car='.$row['id_car'].'" style="color: black">Заказать</a>
                </button>
                </div>';
            }
            ?>
        </div>
    </div>
</div>
<?php
include 'temp/footer.php';
?>