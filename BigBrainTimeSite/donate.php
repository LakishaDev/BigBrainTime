<?php 
    include "./php/inc/header.php"; 
    prikazi_primaoce();
    doniraj();
?>

    <form method="POST">
        <span class="text">Email</span>
        <input type="email" name="email" id="emailD">
        <br>

        <span class="text">Ime</span>
        <input type="text" name="ime" id="imeD">
        <br>

        <span class="text">Prezime</span>
        <input type="text" name="prezime" id="prezimeD">
        <br>

        <span class="text">Prilog</span>
        <input type="number" name="prilog" id="numberD">

        <!-- <select name="valute" id="valuteD">
            <option value="eur">EUR</option>
            <option value="dolar">DOLLAR</option>
            <option value="rsd">RSD</option>
        </select> -->

        <br>
        <span class="text">Unesite svoj broj računa</span>
        <input type="text" name="brracunaDon" id="brRacuna" required>
        <br>
        <span class="text">Unesite broj racuna primaocev</span>

        <input type="text" name="brracunaPrim" id="brRacuna" required>
        <br>

        <br>
        <table>
            <tr>
                <th>R.Br</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Stanje</th>
                <th>Broj racuna</th>
                <th>Izabrani</th>
            </tr>
            <?php
                $rez = prikazi_primaoce();
                while($row = $rez->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td> <td>" . $row["ime"]. "</td> <td>" . $row["prezime"]. "</td> <td>". $row["stanje"]."</td> <td>".$row["brojRacuna"]."</td> <td><input type='checkbox' name='cekirano' id='chechkBoxD' value=" . $row["email"] . "></td></tr>";
                }
            ?>
        </table>

        <br>
        <input type="submit" value="Uplati odabranim osobama" id="potvrdiDugme">
    </form>

<?php include "./php/inc/footer.php"; ?>