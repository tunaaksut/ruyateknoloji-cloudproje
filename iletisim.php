<?php
// iletisim.php - Modernize Edilmiş
include 'header.php';
?>
<section class="contact-hero">
  <div class="contact-hero-content">
    <h1>İletişim</h1>
    <p>Bayilik başvurusu ve tüm hizmetlerimiz için hemen bize ulaşın! Pos Mobil ile güvenli ve hızlı ödeme çözümleri sunuyoruz.</p>
  </div>
</section>

<section class="contact-main">
  <div class="contact-container">
    <!-- İletişim Bilgileri -->
    <div class="contact-info-section">
      <h2>İletişim Bilgileri</h2>
      <div class="contact-cards">
        <div class="contact-card-info">
          <div class="contact-icon">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
          </div>
          <h3>Adres</h3>
          <p>Vali Rahmi bey mahallesi 125. Sokak no 11 kat 2 daire 2 Buca İzmir</p>
        </div>
        
        <div class="contact-card-info">
          <div class="contact-icon">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
          </div>
          <h3>Telefon</h3>
          <p>+90 501 326 48 80</p>
        </div>
        
        <div class="contact-card-info">
          <div class="contact-icon">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
          </div>
          <h3>Çalışma Saatleri</h3>
          <p>Pazartesi - Cuma: 09:00 - 20:00<br>Cumartesi - Pazar: 09:00 - 19:00</p>
        </div>
      </div>
    </div>
    
    <!-- İletişim Formu -->
    <div class="contact-form-section">
      <h2>Bize Yazın</h2>
      <form class="contact-form" id="contactForm">
        <div class="form-group">
          <label for="name">Ad Soyad *</label>
          <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
          <label for="email">E-posta *</label>
          <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
          <label for="phone">Telefon</label>
          <input type="tel" id="phone" name="phone">
        </div>
        
        <div class="form-group">
          <label for="company">Şirket Adı</label>
          <input type="text" id="company" name="company">
        </div>
        
        <div class="form-group">
          <label for="subject">Konu *</label>
          <select id="subject" name="subject" required>
            <option value="">Seçiniz</option>
            <option value="pos-cihazi">POS Cihazı Talebi</option>
            <option value="mobil-odeme">Mobil Ödeme</option>
            <option value="online-odeme">Online Ödeme</option>
            <option value="teknik-destek">Teknik Destek</option>
            <option value="genel">Genel Bilgi</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="message">Mesajınız *</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="submit-btn">
          <span>WhatsApp'tan Gönder</span>
          <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
          </svg>
        </button>
      </form>
      <script>
      document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contactForm');
        if(form) {
          form.addEventListener('submit', function(e) {
            e.preventDefault();
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var company = document.getElementById('company').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;
            var text =
              'Ad Soyad: ' + name + '\n' +
              'E-posta: ' + email + '\n' +
              'Telefon: ' + phone + '\n' +
              'Şirket Adı: ' + company + '\n' +
              'Konu: ' + subject + '\n' +
              'Mesaj: ' + message;
            var url = 'https://wa.me/905013264880?text=' + encodeURIComponent(text);
            window.open(url, '_blank');
          });
        }
      });
      </script>
    </div>
    <!-- Sol Altta Hareketli Paynkolay Butonu -->
    <a href="https://paynkolay.com.tr/" class="paynkolay-btn" target="_blank" title="Pay N Kolay'a Git">
      <img src="fotolar/15866.png" alt="Payntr" style="width: 140px; height: 140px; object-fit: contain; display: block; margin: 0 auto;" />
    </a>
  </div>
</section>

<!-- Harita Bölümü -->
<section class="map-section">
  <h2>Konumumuz</h2>
  <div class="map-container">
    <div class="map-placeholder">
      <div class="map-content">
        <svg width="64" height="64" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
        </svg>
        <h3>Rüya Teknoloji Ofis</h3>
        <p>Vali Rahmi bey mahallesi 125. Sokak no 11 kat 2 daire 2 Buca İzmir</p>
        <a href="https://www.google.com/maps?q=Vali+Rahmi+bey+mahallesi+125.+Sokak+no+11+kat+2+daire+2+Buca+İzmir" target="_blank" rel="noopener noreferrer" class="map-link">Haritada Görüntüle</a>
      </div>
    </div>
  </div>
</section>

<!-- SSS Bölümü -->

<?php include 'footer.php'; ?>
</body>
</html>