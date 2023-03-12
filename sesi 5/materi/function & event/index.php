<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- function grade -->
    <label for="nilai">masukan nilai</label>
    <input type="text" id="nilai">
    <button onclick="hitungGrade()"> Kirim</button>

    <h1 id="hasil"></h1>

    <!-- Event -->
    <button onclick="ubahtext()" id="tombol">Klik disini</button><br><br>

    <!-- tugas event dan function -->
    <h1>Hitung maju mundur</h1>
    <button onclick="mundur()">mundur</button>
    <button onclick="maju()">maju</button>
    <div id="majuMundur"></div>

    <script>
        // hitung grade
        function hitungGrade() {
            var nilai = document.getElementById("nilai").value
            let grade = ""
            if (nilai >= 90) {
                grade = "A"
            } else if (nilai >= 80) {
                grade = "B"
            } else if (nilai >= 70) {
                grade = "C"
            } else if (nilai >= 60) {
                grade = "D"
            } else {
                grade = "E"
            }

            document.getElementById("hasil").innerHTML = "grade anda " + grade;
            return grade;

        }

        // ubat text
        function ubahtext() {
            document.getElementById("tombol").innerHTML = "Sudah di klik"
        }

        // maju mundur
        var angka = 0
        function mundur() {
            angka -= 1

            document.getElementById("majuMundur").innerHTML = angka;
        }

        function maju() {
            angka += 1

            document.getElementById("majuMundur").innerHTML = angka;
        }
    </script>

</body>

</html>