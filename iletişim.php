<?php
// Hakkımızda sayfası için başlık ve içerik
$baslik = "382 SOK. NO:11 / A / ŞİRİNYER İZMİR / BUCA";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
</head>
<body>
<main style="flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <h1><?php echo $baslik; ?></h1>
</main>
    <title>Siteye Git</title>
    <style>
      /* hakkımızda kısmı */
        h1 {
            color: white;
            text-align: center;
            margin-top: 20px;
            animation: slideInFromLeft 1s ease forwards;
        }

        p {
            color: white;
            text-align: center;
            margin-top: 10px;
            animation: slideInFromLeft 1s ease forwards;
            
        }
        /* Üst Başlık (Header) */
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
            color:rgb(0, 255, 195); /* Kırmızı ton */
        }

        /* Ana içerik alanı, header yüksekliği kadar boşluk bırak */
        body {
            background: linear-gradient(to right, rgb(27, 0, 107),rgb(0, 0, 0));
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
            min-height: 100vh;
            margin: 0;
            padding-top: 70px; /* header yüksekliği kadar */
            box-sizing: border-box;
        }

        h2 {
            color: #333;
            margin-bottom: 40px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        

        @media (min-width: 600px) {
            form {
                flex-direction: row;
                gap: 20px;
            }
            nav a {
                margin-left: 40px;
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
    
<!-- header-->

<header>
    <div class="logo">Web Sitesi</div>
    <nav>
        <a href="index.php">Anasayfa</a>
        <a href="hakkımızda.php">Hakkımızda</a>
        <a href="iletişim.php">İletişim</a>
    </nav>
</header>

<div class="harita-kutu">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!4v1751974958955!6m8!1m7!1sb-zPQWzIy8mkuPwJcrHHOQ!2m2!1d38.38501788040196!2d27.16842082954431!3f123.27011!4f0!5f0.7820865974627469" 
    width="1400px" 
    height="500px" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Web Sitesi. Tüm hakları saklıdır.</p>
        <p><a href="mailto:tunaaksut44@gmail.com">tunaaksut44@gmail.com</a></p>
    </div>
</footer>

</body>
</html>