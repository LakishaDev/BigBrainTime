<?php 
    include "./php/inc/header.php"; 
    izvrsi_registraciju();
    // proveri_prijavljivanje();
?>

<body id="registerContainer">
    <form method="POST" enctype="multipart/form-data">
        <h2>Ime</h2>
        <input type="text" name="ime" id="imeR" required>
        <br>
        <br>
        <br>
        <h2>Prezime</h2>

        <input type="text" name="prezime" id="prezimeR" required>
        <br>
        <br>
        <br>
        <h2>Email</h2>

        <input type="email" name="email" id="emailR" required>
        <br>
        <br>
        <br>
        <h2>Šifra</h2>

        <input type="password" name="sifra" id="sifraR" required>
        <br>
        <br>
        <br>
        <h2>Potvrdi šifru</h2>


        <input type="password" id="sifraRP" name="sifraP" required>
        <br>
        <br>
        <br>
        <h2>Unesite svoj broj računa</h2>

        <input type="text" name="brracuna" id="brRacuna" required>
        <br>
        <br>
        <br>
        <input type="file" name="image" required>

        <input type="submit" value="Registruj se">
        <br>
        <br>
    </form>
</body>

<?php include "./php/inc/footer.php"; ?>