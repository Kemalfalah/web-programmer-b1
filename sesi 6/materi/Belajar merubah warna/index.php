<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>

<body>
    <h1>Aplikasi merubah warna</h1>
    <label> warna latar</label>
    <input type="color" id="bg-color">
    <br>
    <label> warna teks </label>
    <input type="color" id="text-color">

    <script>
        var bgColor = document.getElementById('bg-color')
        var textColor = document.getElementById('text-color')

        bgColor.addEventListener("change", (event) => {
            document.body.style.backgroundColor = bgColor.value;
        });
        textColor.addEventListener("change", (event) => {
            document.body.style.color = textColor.value;
        });
    </script>

</body>

</html>