<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <div id="pesan">Pesan Singkat</div>

    <script src="javascript01.js"></script>
    <script>
        document.write("Menulis dengan javascript");
        document.getElementById("pesan").innerHTML = "Mengganti Tulisan Pesan Singkat";
        document.getElementById("pesan").style.color = "#00FFFF";
    </script>
</body>
</html>