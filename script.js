// 📁 script.js

// Dynamic Header Scroll Effect
const header = document.getElementById('mainHeader');
window.addEventListener('scroll', () => {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  // Add scrolled class when scrolling down
  if (scrollTop > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
  // Header'ı gizleyen veya aşağıya açan transform işlemleri kaldırıldı
});

// Mobile Menu Toggle
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const mainNav = document.querySelector('.main-nav');

mobileMenuToggle.addEventListener('click', () => {
  mobileMenuToggle.classList.toggle('active');
  mainNav.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', () => {
    mobileMenuToggle.classList.remove('active');
    mainNav.classList.remove('active');
  });
});

// Close mobile menu when clicking outside
document.addEventListener('click', (e) => {
  if (!header.contains(e.target)) {
    mobileMenuToggle.classList.remove('active');
    mainNav.classList.remove('active');
  }
});

// Swiper - Ana slider
const swiper = new Swiper(".mySwiper", {
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Kaydırmalı Yorumlar için Smooth Scroll
const yorumlarScroll = document.querySelector('.yorumlar-scroll');
if (yorumlarScroll) {
  // Mouse wheel ile yatay kaydırma
  yorumlarScroll.addEventListener('wheel', (e) => {
    e.preventDefault();
    yorumlarScroll.scrollLeft += e.deltaY;
  });
  
  // Touch events için
  let isDown = false;
  let startX;
  let scrollLeft;
  
  yorumlarScroll.addEventListener('mousedown', (e) => {
    isDown = true;
    yorumlarScroll.style.cursor = 'grabbing';
    startX = e.pageX - yorumlarScroll.offsetLeft;
    scrollLeft = yorumlarScroll.scrollLeft;
  });
  
  yorumlarScroll.addEventListener('mouseleave', () => {
    isDown = false;
    yorumlarScroll.style.cursor = 'grab';
  });
  
  yorumlarScroll.addEventListener('mouseup', () => {
    isDown = false;
    yorumlarScroll.style.cursor = 'grab';
  });
  
  yorumlarScroll.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - yorumlarScroll.offsetLeft;
    const walk = (x - startX) * 2;
    yorumlarScroll.scrollLeft = scrollLeft - walk;
  });
}

// Enhanced Scroll Animations
const animatedElements = document.querySelectorAll(".hizmet-karti, .swiper-slide, .slogan, .yorumlar, .buton-kutu, .contact-card-info, .faq-item, .map-placeholder");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate-in");
      entry.target.style.animationDelay = `${Math.random() * 0.5}s`;
    }
  });
}, { threshold: 0.2 });

animatedElements.forEach(el => observer.observe(el));

// FAQ Accordion Functionality
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
  const question = item.querySelector('.faq-question');
  question.addEventListener('click', () => {
    const isActive = item.classList.contains('active');
    
    // Close all other items
    faqItems.forEach(otherItem => {
      otherItem.classList.remove('active');
    });
    
    // Toggle current item
    if (!isActive) {
      item.classList.add('active');
    }
  });
});

// Contact Form Handling
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(contactForm);
    const name = formData.get('name') || '';
    const email = formData.get('email') || '';
    const phone = formData.get('phone') || '';
    const company = formData.get('company') || '';
    const subject = formData.get('subject') || '';
    const message = formData.get('message') || '';
    
    // Validate form data
    const errors = [];
    
    if (!validateName(name)) {
      errors.push('Ad Soyad en az 2 karakter olmalıdır.');
    }
    
    if (!validateEmail(email)) {
      errors.push('Geçerli bir e-posta adresi giriniz.');
    }
    
    if (phone && !validatePhone(phone)) {
      errors.push('Geçerli bir telefon numarası giriniz.');
    }
    
    if (!subject) {
      errors.push('Lütfen bir konu seçiniz.');
    }
    
    if (!validateMessage(message)) {
      errors.push('Mesaj en az 10 karakter olmalıdır.');
    }
    
    // Show errors if any
    if (errors.length > 0) {
      showNotification(errors.join(' '), 'error');
      return;
    }
    
    const submitBtn = contactForm.querySelector('.submit-btn');
    const originalText = submitBtn.querySelector('span').textContent;
    
    // Show loading state
    submitBtn.querySelector('span').textContent = 'Gönderiliyor...';
    submitBtn.disabled = true;
    
    // Simulate form submission with sanitized data
    setTimeout(() => {
      // Show success message
      showNotification('Mesajınız başarıyla gönderildi!', 'success');
      
      // Reset form
      contactForm.reset();
      
      // Reset button
      submitBtn.querySelector('span').textContent = originalText;
      submitBtn.disabled = false;
    }, 2000);
  });
}

// Notification System
function showNotification(message, type = 'info') {
  // Sanitize message to prevent XSS
  const sanitizedMessage = sanitizeHTML(message);
  
  const notification = document.createElement('div');
  notification.className = `notification notification-${type}`;
  
  // Create elements safely instead of using innerHTML
  const content = document.createElement('div');
  content.className = 'notification-content';
  
  const messageSpan = document.createElement('span');
  messageSpan.textContent = sanitizedMessage;
  
  const closeBtn = document.createElement('button');
  closeBtn.className = 'notification-close';
  closeBtn.textContent = '×';
  
  content.appendChild(messageSpan);
  content.appendChild(closeBtn);
  notification.appendChild(content);
  
  document.body.appendChild(notification);
  
  // Animate in
  setTimeout(() => {
    notification.classList.add('show');
  }, 100);
  
  // Auto remove after 5 seconds
  setTimeout(() => {
    notification.classList.remove('show');
    setTimeout(() => {
      document.body.removeChild(notification);
    }, 300);
  }, 5000);
  
  // Close button
  notification.querySelector('.notification-close').addEventListener('click', () => {
    notification.classList.remove('show');
    setTimeout(() => {
      document.body.removeChild(notification);
    }, 300);
  });
}

// Parallax Effect for Hero Sections
window.addEventListener('scroll', () => {
  const scrolled = window.pageYOffset;
  const parallaxElements = document.querySelectorAll('.contact-hero, .hero');
  
  parallaxElements.forEach(element => {
    const speed = 0.5;
    element.style.transform = `translateY(${scrolled * speed}px)`;
  });
});

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Typing Animation for Hero Text
function typeWriter(element, text, speed = 100) {
  let i = 0;
  element.innerHTML = '';
  
  function type() {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
      setTimeout(type, speed);
    }
  }
  
  type();
}

// Initialize typing animation on page load
document.addEventListener('DOMContentLoaded', () => {
  const heroTitle = document.querySelector('.hero-content h1');
  if (heroTitle) {
    const originalText = heroTitle.textContent;
    typeWriter(heroTitle, originalText, 80);
  }
});

// Floating Animation for Cards
function addFloatingAnimation() {
  const cards = document.querySelectorAll('.hizmet-karti, .contact-card-info');
  cards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.1}s`;
    card.classList.add('floating');
  });
}

// Müşteri Yorumları için Swiper
const yorumlarSwiper = new Swiper('.yorumlar-swiper', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.yorumlar-swiper .swiper-pagination',
    clickable: true,
  },
});

// HTML Sanitization Function
function sanitizeHTML(str) {
  const template = document.createElement('template');
  template.innerHTML = str;
  const scripts = template.content.querySelectorAll('script, iframe, object, embed, link, style');
  scripts.forEach(el => el.remove()); // zararlı tag'leri kaldır
  return template.innerHTML.replace(/<[^>]+>/g, ''); // tüm HTML tag'leri sil
}

// Input Validation Functions
function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function validatePhone(phone) {
  const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
  return phoneRegex.test(phone);
}

function validateName(name) {
  return name.trim().length >= 2 && name.trim().length <= 50;
}

function validateMessage(message) {
  return message.trim().length >= 10 && message.trim().length <= 1000;
}
