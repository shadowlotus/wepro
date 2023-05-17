<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            Nama
            <input type="text" name="txNAMA" id="NAMA">
        </div>
        <div>
            NIM
            <input type="text" name="txNIM" id="NIM">
        </div>
        <div>
            Jenis Kelamin<br>
            <input type="radio" name="txJKEL" id="JKEL" value="L">Laki - Laki
            <input type="radio" name="txJKEL" id="JKEL" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" id="JURUSAN">
                <option value="Tatat Boga">Tata Boga</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="TKJ">TKJ</option>
                <option value="MM">MM</option>
                <option value="TKR">TKR</option>
            </select>
        </div>
        <div>
            HOBI<br>
            <input type="checkbox" name="txHOBI_NGODING" value="NGODING">Ngoding
            <input type="checkbox" name="txHOBI_BACA" value="BACA">Baca
            <input type="checkbox" name="txHOBI_GYM" value="GYM">Gym
            <input type="checkbox" name="txHOBI_GAME" value="GAME">Game
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            function show(item,message){
            let value2 = F.namedItem(item).value;
            // let jnskel = F.namedItem('txJKEL').value;
            // let n = F.namedItem('txNAMA').value;
            // let jr = F.namedItem('txJURUSAN').value;
            // let jr [
            //     f.namedItem().checked,
            //     f.namedItem().checked,
            //     f.namedItem().checked,
            //     f.namedItem().checked,
            //     f.namedItem().checked,
            // ]
            console.log(message+value2)
            // console.log("Nama: "+n)
            // console.log("Jenis Kelamin: "+jnskel)
            // console.log("Jurusan: "+jr)
        }
        function hobi(atr,message){
            let hb = F.namedItem(atr).checked;
            let msg = " ";
            if (hb==true){
                msg = "DIPILIH"
            }else{
                msg = "TIDAK DIPILIH"
            }

            console.log(message+msg)
        }

        show('txNAMA', 'NAMA: ')
        show('txNIM', 'NIM: ')
        show('txJKEL', 'JENIS KELAMIN: ')
        show('txJURUSAN', 'JURUSAN: ')
        hobi('txHOBI_NGODING', 'HOBI NGODING: ')
        hobi('txHOBI_BACA', 'HOBI BACA: ')
        hobi('txHOBI_GYM', 'HOBI GYM: ')
        hobi('txHOBI_GAME', 'HOBI GAME: ')
        // show('txHOBI_BACA', 'HOBI BACA: ')
        // show('txHOBI_GYM', 'HOBI GYM: ')
        // show('txHOBI_GAME', 'HOBI GAME: ')

            return false;
        }
    </script>
</body>
</html>