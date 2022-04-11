<?php 
    include "./php/inc/header.php"; 
    prikazi_primaoce();
    doniraj();
?>

<body id="donacije">
<h3>
        Doniraj osobama kojima je potrebna pomoc
    </h3>
<form method="POST">
<span class="text">Email</span>
        <input type="email" class="textbox" name="email" id="emailD">
        <br>

        <span class="text">Ime</span>
        <input type="text" class="textbox" name="ime" id="imeD">
        <br>

        <span class="text">Korisnicko ime</span>
        <input type="text" class="textbox" name="username" id="imeD">
        <br>

        <span class="text">Prezime</span>
        <input type="text" class="textbox" name="prezime" id="prezimeD">
        <br>

        <span class="text">Prilog</span>
        <input type="number" class="textbox" name="prilog" id="numberD">
        <br>

        <span class="text">Br.Racuna</span>
        <input type="number" class="textbox" name="brracunaPrim" id="brracunaPrim">
        <br>

        <br>
        <br>
        <br>
        <table class="center content-table">
            <tr>
                <th>R.Br</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Stanje</th>
                <th>Broj racuna</th>
            </tr>
            <?php
                $rez = prikazi_primaoce();
                while($row = $rez->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td> <td>" . $row["ime"]. "</td> <td>" . $row["prezime"]. "</td> <td>". $row["stanje"]."</td> <td>".$row["brojRacuna"]."</td> </tr>";
                }
            ?>
        </table>
        <br>
        <br>
        <input type="submit"  value="Uplati odabranim osobama" id="potvrdiDugme">
        <br>
        <br>
        <br>
    </form>
</body>

<?php include "./php/inc/footer.php"; ?>