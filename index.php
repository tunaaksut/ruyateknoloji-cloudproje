<?php
$hizmetler = [
    [
        "baslik" => "Kontör ve TL Yükleme",
        "aciklama" => "Turkcell, Vodafone ve Türk Telekom için anında ve güvenli kontör yükleme hizmeti sunuyoruz. Bireysel ve kurumsal çözümlerle 7/24 hizmetinizdeyiz."
    ],
    [
        "baslik" => "POS Cihazı ve Sanal POS",
        "aciklama" => "İş yerinize özel fiziksel POS cihazı veya sanal POS çözümleri sunuyoruz. Güvenli altyapı, düşük komisyon oranları ve hızlı kurulum avantajı."
    ],
    [
        "baslik" => "Oyun Pinleri ve Dijital Kodlar",
        "aciklama" => "Valorant, PUBG, League of Legends, Steam, Epic Games ve daha fazlası için orijinal pin ve kodları anında teslim ediyoruz. En uygun fiyatlarla!"
    ]
];

$slogan = "Dijital ihtiyaçlarınız için güvenilir çözüm ortağınız!";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Siteye Git</title>
    <style>
        /* Arka plan video */
        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover;
        }

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
            color:rgb(0, 255, 195); /* mavi */
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding-top: 90px;
            color: white;
            overflow-x: hidden;
        }
		button {
    		background-color: #00ffc3;
    		color: black;
    		border: none;
    		padding: 12px 24px;
    	border-radius: 8px;
    	cursor: pointer;
    	font-size: 16px;
    	transition: background-color 0.3s ease;
		}

		button:hover {
    	background-color: #00cfa4;
		}

        .container {
            max-width: 900px;
            margin: auto;
            padding: 30px 70px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 12px;
        }

        h2 {
            margin-bottom: 30px;
            font-size: 28px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 50px;
        }

        .hizmet {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .hizmet h3 {
            margin-bottom: 10px;
            font-size: 22px;
            color: #fff;
        }

        .hizmet p {
            font-size: 16px;
            color: #ddd;
        }

        .slogan {
            margin-top: 30px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        hr {
           border: none;
            height: 3px;
            background-color: rgb(0, 255, 195);
            width: 100%;
            margin: 40px auto;
        }

		hr.hr1 {
			border: none;
            height: 5px;
            background-color: rgb(0, 255, 195);
            width: 60%;
            margin: 40px auto;
	    }

        @media (min-width: 600px) {
            form {
                flex-direction: row;
                gap: 20px;
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

		.slogan {
			max-width: 500px;
            margin: auto;
            padding: 20px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(1, 119, 143, 0.93);
            border-radius: 12px;
		}
		.bosluk {
			height: 50px;
		}

    </style>
</head>
<body>

<!-- 🎥 Video Arka Plan -->
<video autoplay muted loop id="bg-video">
    <source src="videoplayback.mp4" type="video/mp4">
    Tarayıcınız video etiketini desteklemiyor.
</video>

<header>
    <div class="logo">Web Sitesi</div>
    <nav>
        <a href="index.php">Anasayfa</a>
        <a href="hakkımızda.php">Hakkımızda</a>
        <a href="iletişim.php">İletişim</a>
    </nav>
</header>

	<hr>

    <?php foreach ($hizmetler as $hizmet): ?>
        <div class="hizmet">
            <h3><?php echo $hizmet["baslik"]; ?></h3>
            <p><?php echo $hizmet["aciklama"]; ?></p>
        </div>
    <?php endforeach; ?>

	<hr>

    <div class="slogan"><?php echo $slogan; ?></div>

	<div class="bosluk">
	</div>

<div class="container">
    <h2>Gitmek istediğiniz siteyi seçiniz</h2>
    <div style="display: flex; gap: 20px;">
        <button onclick="window.open('https://ruyakontor.com/', '_blank')">Rüya Kontör</button>
        <button onclick="window.open('https://posmobil.com/#hizmetlerimiz', '_blank')">Pos Mobil</button>
    </div>
</div>

<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Web Sitesi. Tüm hakları saklıdır.</p>
        <p><a href="mailto:tunaaksut44@gmail.com">tunaaksut44@gmail.com</a></p>
    </div>
</footer>

</body>
</html>
