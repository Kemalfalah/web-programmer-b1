<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>sesi 5</title>
    <!-- <script src="script.js"></script> -->
</head>

<body>
    <h1>Hello javascript</h1>

    <h1>Penggunaan variabel di JS</h1>
    
    <!-- penggunaan variabel js -->
    <div id="nama"></div>
    <div id="lokasi"></div>

    <!-- menggunakan tipe data number -->
    <div id="angka"></div>

    <!-- menggunakan tipe data array -->
    <div id="transport"></div>
    <div id="transport1"></div>

    <!-- menggunakan tipe data objek -->
    <div id="manusia"></div>
    <div id="manusia1"></div>

    <!-- operator aritmatika -->
    <div id="penjumlahan"></div>
    <div id="pengurangan"></div>
    <div id="perkalian"></div>
    <div id="pembagian"></div>
    <div id="modulus"></div>

    <!-- function -->
    <h1>Membuat function di Javascript</h1>
    <h2>www.hacktiv8.com</h2>

    <!-- id hasil -->
    <div id="hasil"></div>

    <!-- memberikan event pada element tombol -->
    <button onclick="cetak()">KLIK SAYA</button>

    <!-- hasil klik button -->
    <div id="hasil_klik"></div>

    <script>
        console.log("hello javascript");

        var nama = "<b>workshop 4 days</b>" ;
        var lokasi = "<i>Online</i>" ;
        var angka = 80
        var transport = ["mobil", "motor", "pesawat", "kapal"];
        var manusia = {
            nama : "wijaya",
            asal : "jakarta",
            usia : 26
        }

        var bilangan1 = 6;
        var bilangan2 = 2;

        var penjumlahan = bilangan1 + bilangan2;
        var pengurangan = bilangan1 - bilangan2;
        var perkalian = bilangan1 * bilangan2;
        var pembagian = bilangan1 / bilangan2;
        var modulus = bilangan1 % bilangan2;


        document.getElementById("nama").innerHTML = nama ;
        document.getElementById("lokasi").innerHTML = lokasi ;
        document.getElementById("angka").innerHTML = angka ;
        document.getElementById("transport").innerHTML = transport ;
        document.getElementById("transport1").innerHTML = transport[0] ;
        document.getElementById("manusia").innerHTML = " tidak terpanggil datanya : "+ manusia ;
        document.getElementById("manusia1").innerHTML = manusia.nama ;
        document.getElementById("penjumlahan").innerHTML = penjumlahan;
        document.getElementById("pengurangan").innerHTML = pengurangan;
        document.getElementById("perkalian").innerHTML = perkalian;
        document.getElementById("pembagian").innerHTML = pembagian;
        document.getElementById("modulus").innerHTML = modulus;

        function tampilkan_nama() {
            return "Hacktiv8 front end developer"
        }
        document.getElementById("hasil").innerHTML = tampilkan_nama();

        // function button
        function cetak() {
            document.getElementById("hasil_klik").innerHTML = "<h3> nama saya falaah </h3>"
        }

    </script>

</body>

</html>