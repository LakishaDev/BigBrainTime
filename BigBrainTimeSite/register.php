<?php 
    include "./php/inc/header.php"; 
    izvrsi_registraciju();
    proveri_prijavljivanje();
?>

    <form method="POST" enctype="multipart/form-data">
        Ime
        <input type="text" name="ime" id="imeR" required>
        <br>
        Prezime
        <input type="text" name="prezime" id="prezimeR" required>
        <br>
        Email
        <input type="email" name="email" id="emailR" required>
        <br>
        Sifra
        <input type="password" name="sifra" id="sifraR" required>
        <br>
        Potvrdi sifru
        <input type="password" id="sifraRP" required>
        <br>
        <input type="file" name="image" required>
        <br>
        <input type="submit" value="Registruj se">
    </form>

<?php include "./php/inc/footer.php"; ?>