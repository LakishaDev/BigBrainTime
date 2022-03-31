<?php
include "./php/db/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = escape($_POST["ime"]);
    $prezime = escape($_POST["prezime"]);
    $email = escape($_POST["email"]);
    $sifra = escape($_POST["sifra"]);

    $sql = "INSERT INTO primaoci(email, lozinka, ime, prezime)";
    $sql .= "VALUES('$email', '$sifra', '$ime', '$prezime')";

    confirm(query($sql));
}