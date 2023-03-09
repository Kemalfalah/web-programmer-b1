<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=sc, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Belajar javascript Algoritma
    </h1>
    <script>
        // Membuat algoritma nilai mahasiswa
        var nilai = 60
        if ('nilai >= 60') console.log("mahasiswa lulus")
        else if ('nilai <= 60') console.log("mahasiswa tidak lulus")
        else console.log('tidak sesuai')

        // membuat algoritma luas persegi
        var sisi = 3
        console.log("membuat algoritma persegi hasilnya adalah " + sisi * sisi)

        // membuat algoritma jika kita lapar
        var lapar = "tidak"
        if (lapar == "ya") console.log("saya mau makan")
        else console.log("saya tidak mau makan")


        // menerapkan looping
        // menggunakan nilai 0 s.d 10
        // 1. while
        var i = 0
        while (i < 10) {
            i++
            console.log(i)
        }
        // 2. do while
        var i = 0
        do {
            i++
            console.log(i)
        } while (i < 10)
        // 3. for
        var awal = 1
        var akhir = 11
        for (var i = awal; i < akhir; i++) {
            console.log("looping " + i)
            console.log("nama saya Falaah")
        }
    </script>

</body>

</html>