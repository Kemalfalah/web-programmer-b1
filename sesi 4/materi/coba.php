<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        const pi = 3.14
        for (let r = 1; r <= 10; r++) {
            let luas = pi * r ** 2;
            let keliling = 2 * pi * r;

            console.log("Luas lingkaran dengan jari-jari " + r + " adalah "+ luas);
            console.log("Keliling lingkaran dengan jari-jari " + r + " adalah "+ keliling);
        }
    </script>

</body>

</html>