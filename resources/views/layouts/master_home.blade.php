<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#0d6efd">

  <title>Leading Software Development Company in Kenya | Smarter Tech, Brighter Tomorrow</title>
    <!-- Primary SEO Meta -->
    <meta name="title" content="JM Innovatech Solutions | Software Development in Kenya, Nyeri, Nairobi, Mombasa, Kisumu, Nakuru" />
    <meta name="description" content="JM Innovatech Solutions offers professional software development, web design, and IT solutions in Kenya. Serving Nyeri, Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Thika, Meru, and other counties." />
    <meta name="keywords" content="Software Development Kenya, Web Design Kenya, Mobile Apps Kenya, IT Solutions Kenya, Nyeri, Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Thika, Meru, Kiambu, Kenya" />
    <meta name="author" content="JM Innovatech Solutions" />
    
    <!-- Charset & Responsive -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Open Graph (For Facebook/LinkedIn/WhatsApp) -->
    <meta property="og:title" content="JM Innovatech Solutions | Software Development in Kenya" />
    <meta property="og:description" content="Trusted software and IT solutions company in Kenya. Serving Nyeri, Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Thika, Meru, and beyond." />
    <meta property="og:image" content="{{ asset('assets/img/logo2.png') }}" />
    <meta property="og:url" content="https://jminnovatechsolution.co.ke/" />
    <meta property="og:type" content="website" />
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="JM Innovatech Solutions | Software Development Kenya" />
    <meta name="twitter:description" content="Providing innovative software, IT solutions, and digital transformation across Kenya: Nyeri, Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Thika, Meru, Kiambu, and more." />
    <meta name="twitter:image" content="{{ asset('assets/img/logo2.png') }}" />

  <!-- Favicon -->
  <link rel="icon" href="https://jminnovatechsolution.co.ke/assets/img/iconbg-512.png?v=2" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  
  <!-- Intl-Tel-Input CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css"/>


  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />

  <!-- Preloader CSS -->
  <style>
    /* Preloader background */
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    /* Loader animation */
    .loader {
      border: 6px solid #f3f3f3;
      border-top: 6px solid #3498db;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    /* WhatsApp Floating Button */
    #whatsapp-float {
      position: fixed;
      bottom: 25px;
      left: 25px;
      background-color: #25d366;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      z-index: 99999;
      transition: background-color 0.3s ease;
    }

    #whatsapp-float:hover {
      background-color: #1ebe57;
    }

    #whatsapp-float i {
      color: white;
      font-size: 30px;
      line-height: 1;
      vertical-align: middle;
    }

    /* WhatsApp Popup */
    #whatsapp-popup {
      position: fixed;
      bottom: 95px;
      left: 25px;
      width: 280px;
      background: #fff;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      border-radius: 12px;
      font-family: 'Open Sans', sans-serif;
      display: none;
      flex-direction: column;
      z-index: 99999;
      animation: fadeInUp 0.5s ease forwards;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    #whatsapp-popup-header {
      background-color: #25d366;
      color: white;
      padding: 12px 15px;
      font-weight: 600;
      font-size: 16px;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    #whatsapp-popup-message {
      padding: 15px;
      font-size: 14px;
      color: #333;
      line-height: 1.4;
    }

    #close-popup {
      position: absolute;
      top: 6px;
      right: 10px;
      color: white;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      user-select: none;
      transition: color 0.3s ease;
    }

    #close-popup:hover {
      color: #ddd;
    }

    /* Responsive adjustment */
    @media (max-width: 480px) {
      #whatsapp-popup {
        width: 90%;
        right: 5%;
        bottom: 90px;
      }
    }

   /* Cookie Banner Styling */
  #cookie-consent {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #ffffff;
    border-top: 3px solid #0d6efd;
    padding: 20px 15px;
    z-index: 110000;
    box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.1);
    font-family: 'Open Sans', sans-serif;
    display: none;
  }
  #cookie-consent.show {
    display: block !important;
  }
  #cookie-consent p {
    color: #333;
    font-size: 15px;
    line-height: 1.6;
  }
  #cookie-consent a {
    color: #0d6efd;
    font-weight: 600;
    text-decoration: none;
  }
  #cookie-consent a:hover {
    text-decoration: underline;
  }
  </style>
</head>

<body>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader"></div>
  </div>

  <!-- ======= Header ======= -->
  @include('layouts.body.header')
  <!-- End Header -->

  <main id="main">
    @yield('home_content')
  </main>

  <!-- ======= Footer ======= -->
  @include('layouts.body.footer')
  <!-- End Footer -->

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/254791446968" target="_blank" rel="noopener" id="whatsapp-float" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- WhatsApp Greeting Popup -->
  <div id="whatsapp-popup" role="dialog" aria-live="polite" aria-label="WhatsApp chat greeting">
    <div id="whatsapp-popup-header">
      <i class="fab fa-whatsapp" aria-hidden="true"></i>
      <span>We’re online!</span>
      <span id="close-popup" aria-label="Close popup" role="button" tabindex="0">&times;</span>
    </div>
    <div id="whatsapp-popup-message">
      Hello! 👋<br />
      Welcome to JM Innovatech Solutions. We are here to help you. Chat with us anytime on WhatsApp!
    </div>
  </div>

    <!-- Cookie Consent Banner -->
    <div id="cookie-consent" role="dialog" aria-live="polite" aria-label="Cookie Consent">
      <div class="cookie-content text-center">
        <p class="mb-3">
          <strong>What are cookies?</strong><br>
          Cookies are small text files stored on your device by websites you visit.  
          They help us remember your preferences, improve how our site works, analyze traffic, 
          and deliver a better, more personalized experience.  
          Some cookies are essential for the site to function properly, while others help us improve our services.  
          Learn more in our <a href="{{route('termsofservice')}}" rel="noopener">Privacy Policy</a>.
        </p>
        <div class="d-flex justify-content-center gap-3">
          <button id="accept-cookies" class="btn btn-primary px-4">Accept</button>
          <button id="reject-cookies" class="btn btn-outline-primary px-4">Decline</button>
        </div>
      </div>
    </div>


  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- Intl-Tel-Input JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <!-- Preloader Script -->
  <script>
    window.addEventListener('load', function () {
      let preloader = document.getElementById('preloader');
      preloader.style.opacity = '0';
      setTimeout(function () {
        preloader.style.display = 'none';
      }, 500);
    });
  </script>

<!-- Tawk.to Live Chat -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68ad747111c787192dc3c27e/1j3ioto23';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // WhatsApp popup logic
      const popup = document.getElementById("whatsapp-popup");
      const closeBtn = document.getElementById("close-popup");

      if (window.location.pathname === "/" || window.location.pathname === "/home") {
        popup.style.display = "flex";
      }

      closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
      });

      closeBtn.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          popup.style.display = "none";
        }
      });

      // Cookie Consent Logic
      const cookieBanner = document.getElementById('cookie-consent');
      const acceptBtn = document.getElementById('accept-cookies');
      const rejectBtn = document.getElementById('reject-cookies');

      function setCookieConsent(value) {
        localStorage.setItem('cookieConsent', value);
        cookieBanner.classList.remove('show'); // Hide banner immediately
      }

      function checkCookieConsent() {
        return localStorage.getItem('cookieConsent');
      }

      if (!checkCookieConsent()) {
        cookieBanner.classList.add('show'); // Show banner if no consent
      }

      acceptBtn.addEventListener('click', function () {
        setCookieConsent('accepted');
      });

      rejectBtn.addEventListener('click', function () {
        setCookieConsent('rejected');
        window.location.href = "https://www.google.com"; // Redirect if rejected
      });
    }); // <-- closes DOMContentLoaded
  </script>

  
  <script>
  // Disable right-click
  document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
    alert("Right-click is disabled on this website by our developer.");
  });

  // Disable F12, Ctrl+Shift+I, Ctrl+Shift+C, Ctrl+Shift+J, Ctrl+U
  document.addEventListener('keydown', function(e) {
    if (
      e.key === 'F12' ||
      (e.ctrlKey && e.shiftKey && ['I','C','J'].includes(e.key.toUpperCase())) ||
      (e.ctrlKey && e.key.toUpperCase() === 'U')
    ) {
      e.preventDefault();
      alert("Shortcut disabled on this website by our developer.");
    }
  });
</script>

<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/service-worker.js')
        .then(registration => {
          console.log('Service Worker registered with scope:', registration.scope);
        })
        .catch(error => {
          console.log('Service Worker registration failed:', error);
        });
    });
  }
</script>

<script>
let deferredPrompt;
const PWA_BANNER_KEY = 'pwaBannerDismissed';

// Listen for beforeinstallprompt
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
});

// Show install prompt after 10 seconds
window.addEventListener('load', () => {
    setTimeout(() => {
        if (!localStorage.getItem(PWA_BANNER_KEY) && deferredPrompt) {
            showInstallBanner();
        }
    }, 10000);
});

function showInstallBanner() {
    const banner = document.createElement('div');
    banner.id = 'pwa-install-banner';
    banner.style = `
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%) translateY(-50px);
      background: #0d6efd;
      color: #fff;
      padding: 14px 20px;
      border-radius: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      z-index: 99999;
      max-width: 450px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
      font-family: 'Open Sans', sans-serif;
      opacity: 0;
      animation: slideDown 0.6s forwards;
    `;

    banner.innerHTML = `
      <div style="display:flex; align-items:center; gap:10px;">
        <img src="/assets/img/iconbg-192.png" style="width:36px; height:36px; border-radius:6px;" alt="App Icon"/>
        <span style="font-weight:600;">Install JM Innovatech Solution App for a smoother experience!</span>
      </div>
      <div style="display:flex; gap:8px;">
        <button id="install-btn" style="
          background: #fff;
          color: #0d6efd;
          border: none;
          padding: 6px 14px;
          border-radius: 5px;
          font-weight: bold;
          cursor: pointer;
          transition: transform 0.2s;
        ">Install</button>
        <span id="close-banner" style="cursor:pointer; font-size:20px; font-weight:bold;">&times;</span>
      </div>
    `;
    document.body.appendChild(banner);

    // Button hover effect
    const installBtn = document.getElementById('install-btn');
    installBtn.addEventListener('mouseenter', () => installBtn.style.transform = 'scale(1.05)');
    installBtn.addEventListener('mouseleave', () => installBtn.style.transform = 'scale(1)');

    // Install button click
    installBtn.addEventListener('click', async () => {
        if (deferredPrompt) {
            deferredPrompt.prompt();
            const { outcome } = await deferredPrompt.userChoice;
            deferredPrompt = null;
            banner.remove();
            if(outcome === 'accepted') localStorage.setItem(PWA_BANNER_KEY, 'installed');
        }
    });

    // Close banner
    document.getElementById('close-banner').addEventListener('click', () => {
        banner.remove();
        localStorage.setItem(PWA_BANNER_KEY, 'dismissed');
    });

    // Animation keyframes
    const style = document.createElement('style');
    style.innerHTML = `
      @keyframes slideDown {
        0% { transform: translateX(-50%) translateY(-50px); opacity: 0; }
        100% { transform: translateX(-50%) translateY(0); opacity: 1; }
      }
    `;
    document.head.appendChild(style);
}

// Remove banner if app installed
window.addEventListener('appinstalled', () => {
    localStorage.setItem(PWA_BANNER_KEY, 'installed');
    const banner = document.getElementById('pwa-install-banner');
    if (banner) banner.remove();
});
</script>

</body>

</html>
