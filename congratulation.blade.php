<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat, Yudha!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            position: relative;
            overflow: hidden;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .gift {
            width: 200px;
            height: 200px;
            margin: 20px 0;
        }
        .balloon {
            position: absolute;
            bottom: -100px;
            background-color: #ffcc00;
            border-radius: 50%;
            width: 50px;
            height: 70px;
            opacity: 0.7;
            animation: float 6s infinite;
        }
        @keyframes float {
            0% {
                transform: translateX(0);
                bottom: -100px;
                opacity: 0.7;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateX(100px);
                bottom: 110%;
                opacity: 0.7;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat kepada Yudha Tirta</h1>
        <h1>Lulus dari SMP dan berhasil masuk di SMA</h1>
        <h1> Kami mengucapkan selamat kepada Yudha!</h1>
        <img src="/assets/img/yudha.gif" class="gift">
    <script>
        function createBalloon() {
            const balloon = document.createElement('div');
            balloon.className = 'balloon';
            const color = ['#ffcc00', '#ff6666', '#66ccff', '#99ff66'];
            balloon.style.backgroundColor = color[Math.floor(Math.random() * color.length)];
            balloon.style.left = Math.random() * 100 + 'vw';
            balloon.style.animationDuration = Math.random() * 3 + 3 + 's';
            document.body.appendChild(balloon);

            balloon.addEventListener('animationend', () => {
                balloon.remove();
            });
        }

        setInterval(createBalloon, 500);
    </script>
</body>
</html>
