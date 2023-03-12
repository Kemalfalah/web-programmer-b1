<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Mandiri 6</title>
</head>

<body>

    <p id="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quo quaerat recusandae qui ullam eaque cumque ea fugit,
        debitis commodi ipsum illo dolorum consequatur sed laudantium suscipit quis magni,
        maiores in?</p>


    <script>
        const text = document.getElementById('paragraf');
        let colors = ['red', 'green', 'blue'];
        let index = 0;

        function animateText() {
            text.style.color = colors[index];
            index = (index + 1) % colors.length;
        }

        setInterval(animateText, 200); // mengulang fungsi animateText setiap 200ms

        setTimeout(() => {
            clearInterval(animateText); // menghentikan interval setelah 5000ms (5 detik)
        }, 5000);

    </script>

</body>

</html>