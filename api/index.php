<?php
// Tarayıcıya UTF-8 Türkçe karakter desteği veriyoruz
header('Content-Type: text/html; charset=utf-8');

echo "<!DOCTYPE html>
<html lang='tr'>
<head>
    <meta charset='UTF-8'>
    <title>WORM XO | Vercel Sunucusu</title>
    <style>
        body {
            background-color: #0b0f19;
            color: #00ffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }
        .container {
            text-align: center;
            border: 2px solid #00ffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
            background: rgba(11, 15, 25, 0.8);
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }
        p {
            color: #ffffff;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>WORM XO</h1>
        <p>PHP Web Siteniz Vercel Üzerinde 7/24 Aktif!</p>
    </div>
</body>
</html>";
?>
