<?php 
    include "./php/inc/header.php"; 
    izvrsi_registraciju();
    // proveri_prijavljivanje();
?>

<body id="registerContainer">
    <h1>Registracija osoba kojima je potrebna pomoc</h1>
    <form method="POST" enctype="multipart/form-data">
            <h2>Ime</h2>    
            <input type="text" name="ime" id="imeR" required class="textbox">
            <br>
           
            
            <h2>Prezime</h2>
            
            <input type="text" name="prezime" id="prezimeR" required class="textbox">
            <br>
            
            
            <h2>Email</h2>
            
            <input type="email" name="email" id="emailR" required class="textbox">
            <br>
            
            
            <h2>Šifra</h2>

            <input type="password" name="sifra" id="sifraR" required class="textbox">
            <br>
        
            
            <h2>Potvrdi šifru</h2>
            
        
        <input type="password" name="sifraP" id="sifraP" required class="textbox">
        <br>
        
        
        <h2>Unesite svoj broj računa</h2>
        
        <input type="text" id="brRacuna" name="brracuna" required class="textbox">
        <br>
        <br>
        
        <input type="file" name="image" required>
        
        
        <input type="submit" value="Registruj se" id="registracija">
        
        
    </form>
</body>

<?php include "./php/inc/footer.php"; ?>