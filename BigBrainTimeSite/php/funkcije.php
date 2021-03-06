<?php
include "./php/db/db.php";

function redirect($lok)
{
    header("location: {$lok}");
    exit();
}

function email_postoji($email)
{
    $query = "SELECT * FROM primaoci WHERE email = '$email'";

    $result = query($query);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}


function izvrsi_registraciju() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ime = escape($_POST["ime"]);
        $prezime = escape($_POST["prezime"]);
        $email = escape($_POST["email"]);
        $sifra = escape($_POST["sifra"]);
        $sifraP = escape($_POST["sifraP"]);
        $brRac = escape($_POST["brracuna"]);

        if (!email_postoji($email)) {
            if ($sifra == $sifraP) {
                $status = $statusMsg = ''; 
    
                $status = 'error'; 
    
                if(!empty($_FILES["image"]["name"])) { 
                    // Get file info 
                    $fileName = basename($_FILES["image"]["name"]); 
                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    
                    // Allow certain file formats 
                    $allowTypes = array('jpg','png','jpeg','gif'); 
                    if(in_array($fileType, $allowTypes)){ 
                        $image = $_FILES['image']['tmp_name']; 
                        $imgContent = addslashes(file_get_contents($image)); 
                    
                        // Insert image content into database 
                        $sql = "INSERT INTO primaoci(email, lozinka, ime, prezime, slika, dateReg, brojRacuna) VALUES('$email', '$sifra', '$ime', '$prezime', '$imgContent', NOW(), '$brRac')";
    
                        if(confirm(query($sql))){ 
                            $status = 'success'; 
                            $statusMsg = "File uploaded successfully."; 
                            $_SESSION["email"] = $email;
                        }else{ 
                            $statusMsg = "File upload failed, please try again."; 
                        }  
                    }else{ 
                        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
                    } 
                }else{ 
                    $statusMsg = 'Please select an image file to upload.'; 
                } 
            }else {
                $statusMsg = 'Your passwords do not match.'; 
            }
        }else {
            $statusMsg = 'Email already exist in database.'; 
        }
        
        
    
        echo "<p class='info'>".$statusMsg."</p>"; 
    }
}

function vratiSliku() {
    $mailNeki = $_SESSION["email"];

    $result = query("SELECT slika FROM primaoci WHERE email = '$mailNeki'");

    if($result->num_rows > 0) {  
        $row = $result->fetch_assoc();
        return $row['slika'];
    }
    else
    { 
        echo "Greska u pronalazenju slike";
        return false;
    }
}

function proveri_prijavljivanje() {
    if (isset($_SESSION['email'])) {
        redirect('index.php');
    }
}

function prikazi_primaoce() {
    $result = query("SELECT id, ime, prezime, stanje, email, brojRacuna FROM primaoci ORDER BY stanje ASC");

    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function doniraj() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ime = escape($_POST["ime"]);
        $prezime = escape($_POST["prezime"]);
        $email = escape($_POST["email"]);
        $prilog = escape($_POST["prilog"]);
        $brRacP = escape($_POST["brracunaPrim"]);
        $userName = escape($_POST["username"]);

        $sql = "INSERT INTO donatori(email, ime, prezime, korisnickoIme) VALUES('$email', '$ime', '$prezime', '$userName')";
    
        if(confirm(query($sql))){ 
            echo "<p class='info'>Uspesno ste se upisali u bazu podataka</p>";
        }else{
            echo "<p class='info'>Nije moguce upisati vase podatke u bazu</p>"; 
        }  

        $sql2 = query("SELECT * FROM primaoci WHERE brojRacuna=$brRacP");

        if($sql2->num_rows > 0){ 
            $sql3 = "UPDATE primaoci SET stanje=stanje+$prilog WHERE brojRacuna=$brRacP";
            if(confirm(query($sql3))){ 
                echo "<p class='info'>Uspesno ste posali novac</p>"; 
            }
            else {
                echo "<p class='info'>Nije moguce poslati novac !</p>"; 
            }
        }else{
            echo "<p class='info'>U databazi ne postoji korisnik sa datim brojem racuna</p>"; 
        } 
    }
}