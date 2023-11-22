<?php
$username= "admin";
$password= "1221";
$isAdmin = true;

if($username == "admin" && $password == "1221"){
    if($isAdmin){
        echo"Selamat Datang Administrator";
    } else {
        echo"Selamat Datang User";
    }
} else {
    echo"Maaf username dan Password salah";
}
?>
