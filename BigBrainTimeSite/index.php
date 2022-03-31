<?php include "./php/inc/header.php"; ?>
    <h1>Dobrodosli na sajt</h1>
    <?php 
        if (isset($_SESSION['email'])) {?>
            <img src="data:image/jpg;charset=utf8;base64,<?php $slika = vratiSliku(); echo base64_encode($slika); ?>" /> 
        <?php }
    ?>
<?php include "./php/inc/footer.php"; ?>