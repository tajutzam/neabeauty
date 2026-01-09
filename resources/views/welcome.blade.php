<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tissue Nea Beauty</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        
        /* GLOBAL */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #fff0f5;
        }

        a {
            text-decoration: none;
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(135deg, rgba(255, 227, 239,0.8) 0%, rgba(255, 192, 224,0.8) 100%), 
                        url('https://tse1.mm.bing.net/th/id/OIP.cUom_9K4sLgrb6OdfswcJwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3') center/cover no-repeat;
            padding: 120px 20px 80px;
            text-align: center;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 30px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
        }

        .hero .autumn { color: #fff0f5; }
        .hero .collection { color: #ffb6cf; }

        .btn-shop-now {
            background-color: #cc2f6f;
            color: white;
            font-weight: 700;
            padding: 14px 40px;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-shop-now:hover {
            background-color: #a32a5b;
            transform: translateY(-2px);
        }

        /* INFO BOX */
        .box {
            background-color: #fff5fb;
            padding: 60px 30px;
            text-align: center;
            margin: 40px auto;
            max-width: 800px;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .box h2 {
            font-size: 28px;
            font-weight: 600;
            color: #cc2f6f;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .box h2 span {
            display: block;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 36px; }
            .box h2 { font-size: 22px; }
        }
    </style>
</head>
<body>

    <!-- HERO SECTION -->
    <section class="hero">
        <h1>
            <span class="autumn">Selamat Datang</span> <br>
            <span class="collection">di Nea Beauty</span>
        </h1>
    </section>

    <!-- INFO BOX -->
    <section class="box">
        <h2>
            Pertama di Indonesia
            <span>TISSUE BISA DICUCI 7 KALI</span>
            <span>Neabeauty Premium Lap Serbaguna</span>
        </h2>
        <a class="btn-shop-now" href="{{ route('shop') }}">Jadi Agen Sekarang </a>
    </section>

</body>
</html>
