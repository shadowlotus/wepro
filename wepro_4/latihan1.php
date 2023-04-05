<?php
    $usr = "";
    $ps = "";
    if(isset($_GET["txUSER"])){
    $usr = $_GET["txUSER"];
    $ps = $_GET["txPASKY"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method GET</title>
</head>
<body>

<form method="POST" action="latihan1.php">

    <div>
        user name
        <input type="text" name="txUSER" required>
    </div>

    <div>
        password
        <input type="text" name="txPASKY">

    </div>

    <div>
        <button>LOGIN</button>
    </div>

</form>

<div>
    Isi dari form:<br>
        1. User Name: <?=$usr?><br>
        2. Password: <?=$ps?>
</div>
    
</body>
</html>