<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    
    <div>Perulangan For<p> for(nAwal;range;counter){<br>area perulangan<br>} </p></div>

    <script>
        for(let i=0; i<10; i++){
            document.write("<br>Perulangan ke - "+i);
        }
    </script>

    <div>
       <br> Perulangan While <p>while(logika){<br>area perulangan<br>}</p>
    </div>

    <script>
        let nAwal = 0;
        var nAkhir = 10;
        while(nAwal < nAkhir){
            document.write("<br>Perulangan ke-"+nAwal);
            nAwal ++;
        }
    </script>
</body>
</html>