<?php
    include("database/koneksi.php");
    
    function createuser($nama, $email, $username, $password){

        $stt = false;
        $iduser = md5($username);
        $sql = "INSERT INTO tb_user(nama, email, username, passkey, iduser)
        VALUES(
            '$nama',
            '$email',
            '$username',
            '$password',
            '$iduser'
        )";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal");
        $stt = mysqli_query($cnn, $sql);
        return $stt;

    }
?>