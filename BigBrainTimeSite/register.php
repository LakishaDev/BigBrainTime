<?php include "./php/inc/header.php"; ?>
    
    <form method="POST">
        Ime
        <input type="text" name="ime" id="imeR">
        <br>
        Prezime
        <input type="text" name="prezime" id="prezimeR">
        <br>
        Email
        <input type="email" name="email" id="emailR">
        <br>
        Sifra
        <input type="password" name="sifra" id="sifraR">
        <br>
        Potvrdi sifru
        <input type="password" id="sifraRP">
        <br>
        <input type="submit" value="Registruj se">
    </form>

<?php include "./php/inc/footer.php"; ?>