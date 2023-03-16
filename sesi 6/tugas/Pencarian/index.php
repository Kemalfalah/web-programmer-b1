<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Belajar Javasscript</h1>

    <script>
        const kalimat = "belajar javaSCript";
        // mencari huruf besar (SC)
        var besar = kalimat.match(/[A-Z]/g);
        // mencari data/karakter awal (b)
        var kataAwal = kalimat.match(/^./);
        // mencari data/karakter terakhir (t)
        var kataAkhir = kalimat.match(/.$/);
        
        console.log(besar); // Output: ["S", "C"]
        console.log(kataAwal) // Output: b
        console.log(kataAkhir); // Output: t

    </script>
</body>

</html>