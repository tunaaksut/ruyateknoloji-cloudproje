<?php
$hakkımızda = [
    [
        "baslik" => "Hakkımızda",
        "aciklama" => "Türkiye'nin dijital dünyadaki ihtiyaçlarına hızlı, güvenilir ve yenilikçi çözümler sunmak amacıyla yola çıktık. Turkcell, Vodafone ve Türk Telekom için anında ve güvenli kontör yükleme hizmeti sunuyoruz. Bireysel ve kurumsal müşterilerimize 7/24 hizmet verirken, en uygun fiyatları ve güvenli altyapıyı garanti ediyoruz.

Müşteri memnuniyetini her zaman ön planda tutuyor, teknolojiyi yakından takip ederek altyapımızı sürekli geliştiriyoruz. Güvenli ödeme sistemleri, anında teslimat ve kullanıcı dostu hizmet anlayışımızla sektörde fark yaratmaya devam ediyoruz."
    ]
];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hakkımızda</title>
    <style>
        header {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            font-family: 'Segoe UI', sans-serif;
            box-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: rgb(0, 255, 195);
        }

        body {
            min-height: 100vh;
            background: linear-gradient(to right, rgb(27, 0, 107), rgb(0, 0, 0));
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding-top: 90px;
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            color: white;
        }

        .hakkimizda-kapsayici {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 80%;
            gap: 30px;
        }

        .hakkımızda {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 12px;
            flex: 1;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .hakkımızda h3 {
            margin-bottom: 10px;
            font-size: 22px;
            color: #fff;
        }

        .hakkımızda p {
            font-size: 16px;
            color: #ddd;
            white-space: pre-line;
        }

        .gorsel {
            flex: 1;
            text-align: center;
            border-style: solid;
            border-width: 10px;
            border-color:rgba(1, 11, 196, 0.61) ;
        }

        .gorsel img {
            max-width: 100%;
            height: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        @media (min-width: 768px) {
            .hakkimizda-kapsayici {
                flex-direction: row;
            }
        }
        footer {
            width: 100%;
              background-color: rgba(0, 0, 0, 0.7);
              color: #ccc;
              text-align: center;
              padding: 20px 10px;
              font-size: 14px;
              position: relative; /* istersen fixed yapabilirsin */
              bottom: 0;
              margin-top: 50px;
              box-shadow: 0 -2px 5px rgba(0,0,0,0.5);
        }

        footer a {
              color: rgb(0, 255, 195);
              text-decoration: none;
        }

        footer a:hover {
              text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Web Sitesi</div>
    <nav>
        <a href="index.php">Anasayfa</a>
        <a href="hakkımızda.php">Hakkımızda</a>
        <a href="iletişim.php">İletişim</a>
    </nav>
</header>

<main style="flex: 1; display: flex; align-items: center; justify-content: center;">
    <div class="hakkimizda-kapsayici">
        <?php foreach ($hakkımızda as $hakkımızda): ?>
            <div class="hakkımızda">
                <h3><?php echo $hakkımızda["baslik"]; ?></h3>
                <p><?php echo $hakkımızda["aciklama"]; ?></p>
            </div>
        <?php endforeach; ?>

        <div class="gorsel">
            <img src="aboutus.jpg" alt="Hakkımızda Görseli">
        </div>
    </div>
</main>

<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Web Sitesi. Tüm hakları saklıdır.</p>
        <p><a href="mailto:tunaaksut44@gmail.com">tunaaksut44@gmail.com</a></p>
    </div>
</footer>

</body>
</html>
