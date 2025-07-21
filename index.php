<?php
require __DIR__ . '/vendor/autoload.php'; // Composer autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'header.php';

$slogan = "2011 yılından bu yana yüksek verimlilik, hızlı aktivasyon ve güvenilir hizmet ile dijital dünyada çözüm ortağınız!";

$hizmetler = [
    [
        "baslik" => "Kontör ve TL Yükleme",
        "aciklama" => "Rüya Kontör, Turkcell, Vodafone ve Avea için hızlı ve güvenli kontör yükleme hizmeti sunar. Hızlı aktivasyon ve anında geri dönüşlerle müşteri memnuniyetini en üst düzeye çıkarır.",
        "ikon" => "fas fa-mobile-alt",
        "resim" => "kontortl.webp"
    ],
    [
        "baslik" => "POS Mobil Çözümleri",
        "aciklama" => "Pos Mobil ile işletmenizin ödeme süreçlerini kolaylaştırın. Güvenli, hızlı ve kullanıcı dostu ödeme deneyimiyle müşteri memnuniyetini artırın.",
        "ikon" => "fas fa-credit-card",
        "resim" => "poscihazi.jpg"
    ],
    [
        "baslik" => "Oyun Pinleri ve Dijital Kodlar",
        "aciklama" => "Birçok oyun ve uygulama için orijinal pin ve kodları anında teslim ediyoruz. Gelişmiş güvenlik ve uygun fiyat avantajı ile!",
        "ikon" => "fas fa-gamepad",
        "resim" => "oyunpin.webp"
    ]
];

$mesaj = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['telefon'])) {
    $telefon = htmlspecialchars($_POST['telefon']);
    $mesaj = "Teşekkürler! En kısa sürede sizi arayacağız.";

    // PHPMailer ile mail gönder
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tunaaksut44@gmail.com';  
        $mail->Password = 'ifws rill utox ancc';
        // Gmail uygulama şifresi
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('seningmail@gmail.com', 'Sen');
        $mail->addAddress('alicimail@site.com', 'Alıcı');

        $mail->isHTML(false);
        $mail->Subject = 'Yeni Telefon Numarası (Sizi Arayalım Formu)';
        $mail->Body    = "Yeni bir telefon numarası bırakıldı:\n\nNumara: " . $telefon;

        $mail->send();
        // $mesaj = 'Mail gönderildi!'; // İstersen kullanıcıya özel mesaj gösterebilirsin
    } catch (Exception $e) {
        $mesaj = "Mail gönderilemedi: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Dijital Çözümler Tek Adreste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Swiper CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Dijital Çözümler Tek Adreste</h1>
            <p>Kontör, POS ve Oyun Kodları ile 7/24 Hizmet</p>
            <button onclick="window.open('iletisim.php', '_blank')">Bize Ulaşın</button>
        </div>
    </section>

    <section class="arama-kutusu">
        <?php if ($mesaj): ?>
            <div class="form-mesaj"><?= $mesaj ?></div>
        <?php endif; ?>
        <form action="" method="post" autocomplete="off">
            <input type="tel" name="telefon" placeholder="Telefon numaranız" required pattern="[0-9]{10,15}">
            <button type="submit">Sizi Arayalım</button>
        </form>
    </section>

    <section class="slider-alani">
      <video src="fotolar/teknoloji.mp4" autoplay loop muted class="buyuk-video"></video>
    </section>

    <section class="hizmetler">
        <?php foreach ($hizmetler as $hizmet): ?>
            <div class="hizmet-karti">
                <img src="fotolar/<?= htmlspecialchars($hizmet['resim']) ?>" alt="<?= htmlspecialchars($hizmet['baslik']) ?>">
                <h3><i class="<?= htmlspecialchars($hizmet['ikon']) ?>"></i> <?= htmlspecialchars($hizmet['baslik']) ?></h3>
                <p><?= htmlspecialchars($hizmet['aciklama']) ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="slogan">
        <p><?= $slogan ?></p>
    </section>

    <section class="yorumlar">
        <h2>Müşteri Yorumları</h2>
        <div class="swiper yorumlar-swiper">
            <div class="swiper-wrapper">
                <!-- 1. slayt: ilk 3 yorum -->
                <div class="swiper-slide">
                    <div class="yorum-karti">
                        <div class="yorum-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <blockquote>
                            "Çok hızlı ve güvenilir hizmet. Kontör yükleme işlemi 30 saniyede tamamlandı. Kesinlikle tavsiye ederim!"
                        </blockquote>
                        <div class="yorum-bilgi">
                            <strong>Ayşe K.</strong>
                            <span class="yorum-tarih">2 gün önce</span>
                        </div>
                        <div class="yorum-yildizlar">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="yorum-karti">
                        <div class="yorum-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <blockquote>
                            "İş yerim için POS cihazı aldım. Kurulum çok hızlı oldu ve destek ekibi çok ilgili. Teşekkürler!"
                        </blockquote>
                        <div class="yorum-bilgi">
                            <strong>Mehmet S.</strong>
                            <span class="yorum-tarih">1 hafta önce</span>
                        </div>
                        <div class="yorum-yildizlar">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="yorum-karti">
                        <div class="yorum-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <blockquote>
                            "Oyun pinleri için en güvenilir site. Fiyatlar uygun ve anında teslimat. Çok memnunum!"
                        </blockquote>
                        <div class="yorum-bilgi">
                            <strong>Emre T.</strong>
                            <span class="yorum-tarih">3 gün önce</span>
                        </div>
                        <div class="yorum-yildizlar">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <!-- 2. slayt: sonraki 3 yorum -->
                <div class="swiper-slide">
                    <div class="yorum-karti">
                        <div class="yorum-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <blockquote>
                            "7/24 destek hizmeti gerçekten çalışıyor. Gece yarısı sorun yaşadım, hemen çözdüler. Harika!"
                        </blockquote>
                        <div class="yorum-bilgi">
                            <strong>Fatma A.</strong>
                            <span class="yorum-tarih">1 gün önce</span>
                        </div>
                        <div class="yorum-yildizlar">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="yorum-karti">
                        <div class="yorum-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <blockquote>
                            "Kurumsal müşteri olarak 2 yıldır hizmet alıyoruz. Hiç sorun yaşamadık. Profesyonel ekip!"
                        </blockquote>
                        <div class="yorum-bilgi">
                            <strong>Ahmet Y.</strong>
                            <span class="yorum-tarih">1 ay önce</span>
                        </div>
                        <div class="yorum-yildizlar">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="yorum-karti">
                        <div class="yorum-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <blockquote>
                            "Mobil ödeme çözümleri gerçekten pratik. Artık her yerde ödeme alabiliyorum. Çok teşekkürler!"
                        </blockquote>
                        <div class="yorum-bilgi">
                            <strong>Zeynep M.</strong>
                            <span class="yorum-tarih">5 gün önce</span>
                        </div>
                        <div class="yorum-yildizlar">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="buton-kutu">
        <a href="https://ruyakontor.com" target="_blank">
            <button><i class="fas fa-mobile-alt"></i> Rüya Kontör Sitesine Git</button>
        </a>
        <a href="https://posmobil.com" target="_blank">
            <button><i class="fas fa-credit-card"></i> Pos Mobil Sitesine Git</button>
        </a>
    </section>

    <!-- Hızlı İstatistikler -->
    <section class="istatistikler">
      <div class="istatistik-kutu">
        <div>
          <i class="fas fa-users"></i>
          <h3>10.000+</h3>
          <p>Mutlu Müşteri</p>
        </div>
        <div>
          <i class="fas fa-briefcase"></i>
          <h3>2011'den Beri</h3>
          <p>Sektör Tecrübesi</p>
        </div>
        <div>
          <i class="fas fa-check-circle"></i>
          <h3>Hızlı Aktivasyon</h3>
          <p>ve Güvenilir Hizmet</p>
        </div>
      </div>
    </section>

    <!-- Neden Bizi Seçmelisiniz -->
    <section class="neden-biz">
      <h2>Neden Bizi Seçmelisiniz?</h2>
      <div class="nedenler">
        <div>
          <i class="fas fa-shield-alt"></i>
          <h4>Güvenilirlik</h4>
          <p>Yüksek güvenlikli altyapı ve şeffaf hizmet anlayışı.</p>
        </div>
        <div>
          <i class="fas fa-headset"></i>
          <h4>Hızlı Destek</h4>
          <p>Hızlı geri dönüşler ve 7/24 müşteri desteği.</p>
        </div>
        <div>
          <i class="fas fa-bolt"></i>
          <h4>Yüksek Verimlilik</h4>
          <p>Hizmetlerimizde hız ve müşteri memnuniyeti önceliğimizdir.</p>
        </div>
      </div>
    </section>

    <!-- Sıkça Sorulan Sorular -->
    <section class="sss">
      <h2>Sıkça Sorulan Sorular</h2>
      <div class="sss-list">
        <div>
          <strong>Hizmetleriniz yasal mı?</strong>
          <p>Evet, tüm hizmetlerimiz yasal mevzuata uygun şekilde sunulmaktadır.</p>
        </div>
        <div>
          <strong>Ödeme seçenekleriniz neler?</strong>
          <p>Kredi kartı, havale/EFT ve çeşitli dijital cüzdanlar ile ödeme yapabilirsiniz.</p>
        </div>
        <div>
          <strong>Destek ekibinize nasıl ulaşabilirim?</strong>
          <p>İletişim sayfamızdan veya 7/24 WhatsApp hattımızdan bize ulaşabilirsiniz.</p>
        </div>
      </div>
    </section>

    
<?php include 'footer.php'; ?>

    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    var video = document.querySelector('.buyuk-video');
    if (video) {
      video.addEventListener('dblclick', function(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
      });
      video.addEventListener('mousedown', function(e) {
        if (e.detail > 1) {
          e.preventDefault();
          e.stopPropagation();
          return false;
        }
      });
      video.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        return false;
      });
    }
  });
</script>
    <!-- Sol Altta Hareketli Paynkolay Butonu -->
    <a href="https://posmobil.com/" class="paynkolay-btn" target="_blank" title="Pay N Kolay'a Git">
      <img src="fotolar/15866.png" alt="Payntr" style="width: 140px; height: 140px; object-fit: contain; display: block; margin: 0 auto;" />
    </a>
</body>
</html>
