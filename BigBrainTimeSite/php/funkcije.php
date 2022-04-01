<?php
include "./php/db/db.php";


function izvrsi_registraciju() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ime = escape($_POST["ime"]);
        $prezime = escape($_POST["prezime"]);
        $email = escape($_POST["email"]);
        $sifra = escape($_POST["sifra"]);

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
                $sql = "INSERT INTO primaoci(email, lozinka, ime, prezime, slika, dateReg) VALUES('$email', '$sifra', '$ime', '$prezime', '$imgContent', NOW())";

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
    
        echo $statusMsg; 
        echo $_SESSION["email"];
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
    $result = query("SELECT id, ime, prezime, stanje, email FROM primaoci");

    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}