<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4</title>
</head>
<body>
    <div>
        Rumus Luas Segitiga
    </div>
    <div>
        Alas Segitiga
        <input type="number" id="txALAS" name="txALAS">
    </div>
    <div>
        Tinggi Segitiga
        <input type="number" id="txTINGGI" name="txTINGGI">
    </div>
    <div>
        <button type="button" onclick="hitung()">Hitung</button>
    </div>

<script>
    function hitung(){
        let a = document.getElementById("txALAS").value;
        let t = document.getElementById("txTINGGI").value;

        let hasil = a * t / 2

        alert("Luas Segitiga adalah : "+hasil)
    }
</script>
</body>
</html>