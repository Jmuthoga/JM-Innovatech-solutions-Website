@php
$social = DB::table('sociallinks')->first();

@endphp

<!-- Font Awesome (if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
  /* === Desktop Topbar Styling === */
  .topbar {
    background-color: #0d6efd;
    color: #fff;
    font-size: 14px;
    padding: 8px 0;
    width: 100%;
    z-index: 999;
    clip-path: polygon(5% 0%, 95% 0%, 100% 100%, 0% 100%);
  }

  /* Container inside topbar */
  .topbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  /* Contact info */
  .topbar .contact-info {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
  }

  .topbar .contact-info a,
  .topbar .contact-info span,
  .topbar .contact-info i {
    color: #ffffff;
    text-decoration: none;
    margin-right: 15px;
    font-weight: 500;
  }

  /* Social links */
  .topbar .social-links {
    display: flex;
    align-items: center;
  }

  .topbar .social-links a {
    color: #ffffff;
    margin-left: 15px;
    font-size: 16px;
    transition: color 0.3s ease;
  }

  .topbar .social-links a:hover {
    color: #d1e3ff;
    /* Lighter blue on hover */
  }

  /* === Mobile Topbar Styling === */
  .topbar-mobile {
    background-color: #0d6efd;
    color: #fff;
    font-size: 14px;
    padding: 10px 0;
    width: 100%;
    z-index: 999;
    display: none;
    /* Hidden by default, shown on small screens */
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
  }

  .topbar-mobile .mobile-link {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .topbar-mobile .mobile-link i {
    font-size: 16px;
  }

  /* === Responsive Behavior === */
  @media (max-width: 768px) {

    /* Hide desktop topbar */
    .topbar {
      display: none !important;
    }

    /* Show mobile topbar with flex row */
    .topbar-mobile {
      display: flex !important;
    }
  }

  @media (min-width: 992px) {
    .desktop-nav {
      border: 2px solid #ccc;
      /* Professional light gray border */
      border-radius: 8px;
      padding: 10px 20px;
      background-color: #fff;
      /* Optional: for contrast */
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      /* Soft shadow for depth */
    }

    .desktop-nav ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .desktop-nav ul li {
      display: inline-block;
      margin-right: 20px;
    }

    .desktop-nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    .desktop-nav ul li a:hover {
      color: #007bff;
    }
  }

  /* For large screens only (lg and up) */
  @media (min-width: 992px) {

    .mega-menu {
      position: relative;
    }

    .mega-menu .mega-dropdown {
      display: none;
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      width: 700px;
      background: #fff;
      padding: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      z-index: 999;
      border: 2px solid transparent;
      border-radius: 10px;
      animation: borderGlow 0.5s forwards;
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .mega-menu:hover .mega-dropdown {
      display: block;
      opacity: 1;
    }

    @keyframes borderGlow {
      0% {
        border-color: transparent;
      }

      100% {
        border-color: #007bff;
      }
    }

    .mega-dropdown .row {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }

    .mega-dropdown .col-item {
      flex: 1 1 calc(33.333% - 10px);
      border: 1px solid #e0e0e0;
      padding: 15px;
      text-align: center;
      border-radius: 8px;
      background-color: #fafafa;
      transition: all 0.3s ease;
    }

    /* Show icons on large screens */
    .mega-dropdown .col-item i {
      font-size: 24px;
      display: block;
      margin-bottom: 8px;
      color: #007bff;
    }

    .mega-dropdown .col-item a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    .mega-dropdown .col-item:hover {
      background-color: #f0f8ff;
      border-color: #007bff;
    }
  }

  /* For smaller screens, hide icons and display simple text links */
  @media (max-width: 991px) {

    .mega-dropdown .col-item i {
      display: none;
      /* Hide icons on smaller screens */
    }

    /* Display items in a block layout under "Service" */
    .mega-dropdown .col-item {
      flex: 1 1 100%;
      /* Each item takes full width */
      margin-bottom: 10px;
      /* Optional: space between items */
    }

    .mega-dropdown .col-item a {
      display: block;
      /* Make each link a block */
      padding: 10px 0;
      /* Optional: padding for better clickability */
      text-align: left;
      /* Align text to the left */
      font-weight: 500;
      width: 100%;
      /* Ensures the link takes up full width of the block */
    }

    /* Ensure that the mega dropdown stays under the "Service" menu */
    .mega-dropdown {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      /* Ensures padding does not affect width */
      display: block;
      /* Ensure the dropdown is displayed below "Service" */
    }

    /* Make the "Service" item itself a block element */
    .mega-menu .drop-down {
      display: block;
      /* Ensures the "Service" item itself is a block */
    }

    /* Optional: Remove margin for the "Service" dropdown on smaller screens */
    .mega-dropdown .row {
      display: block;
      /* Make the row stack vertically */
      width: 100%;
    }
  }
  
  
  .nav-item {
    position: relative;
    display: inline-block;
  }

  .new-badge {
    position: absolute;
    top: -18px;          /* position above Web Hosting */
    left: 50%;           /* align horizontally with text */
    transform: translateX(-50%);
    background: #28a745; /* green */
    color: #fff;
    font-size: 11px;
    font-weight: bold;
    padding: 2px 8px;
    border-radius: 12px;
    white-space: nowrap;
  }

  /* arrow pointing down to Web Hosting */
  .new-badge::after {
    content: "";
    position: absolute;
    top: 100%;  /* places arrow under badge */
    left: 50%;
    transform: translateX(-50%);
    border-width: 5px;
    border-style: solid;
    border-color: #28a745 transparent transparent transparent;
  }
</style>

<!-- === Mobile Topbar: Visible only on small screens === -->
<div class="topbar-mobile d-flex d-md-none align-items-center justify-content-center">
  <a href="{{route('train')}}" class="mobile-link"><i class="bi bi-mortarboard"></i> JM Academy</a>
  <a href="" class="mobile-link"><i class="bi bi-box-seam"></i> Products</a>
  <a href="https://pos.jminnovatechsolution.co.ke/login" class="mobile-link"><i class="bi bi-receipt"></i>POS</a>
</div>

<!-- === Main Header starts here === -->
<header id="header" class="fixed-top">
<!-- Desktop Topbar -->
<div class="topbar d-flex align-items-center" style="background-color: #0d6efd; color: white; padding: 10px 0;">
  <div class="d-flex align-items-center justify-content-center" style="margin: 10px auto 0 auto; max-width: 95%;">
    <!-- Contact Info -->
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"> 
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@jminnovatechsolution.co.ke" target="_blank" style="color: white; padding-left: 5px;">
            info@jminnovatechsolution.co.ke
        </a>
      </i>
      <i class="bi bi-phone d-flex align-items-center ms-4">
        <span>+254791446968</span>
      </i>
      <i class="bi bi-geo-alt d-flex align-items-center ms-4">
        <span>Nairobi, Kenya</span>
      </i>
    </div>

    <!-- Social Links and POS Button grouped together -->
    <div class="d-flex align-items-center" style="gap: 15px;">
      <div class="social-links d-flex align-items-center" style="gap: 15px;">
        <a href="https://x.com/JohnMuthoga19?t=r1ATpE88Vy2drDvS4IVJJw&s=09" class="twitter" target="_blank" style="color: white;">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100063289765677" class="facebook" target="_blank" style="color: white;">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.instagram.com/johnie_muthoga?igsh=YzljYTk1ODg3Zg==" class="instagram" target="_blank" style="color: white;">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@jminnovatech" class="linkedin" target="_blank" style="color: white;">
          <i class="bi bi-tiktok"></i>
        </a>
        <a href="" class="linkedin" target="_blank" style="color: white;">
          <i class="bi bi-linkedin"></i>
        </a>
      </div>

      <!-- POS System Button -->
      <a href="https://pos.jminnovatechsolution.co.ke/login" class="btn btn-primary" style="white-space: nowrap; padding: 6px 15px; font-weight: 600;">
          <i class="bi bi-receipt"></i>
               POS SYSTEM
      </a>
      <a href="{{route('train')}}" class="btn btn-primary" style="white-space: nowrap; padding: 6px 15px; font-weight: 600;">
          <i class="bi bi-mortarboard"></i>
               JM ACADEMY
      </a>
      <a href="" class="btn btn-primary" style="white-space: nowrap; padding: 6px 15px; font-weight: 600;">
          <i class="bi bi-box-seam"></i>
               OUR PRODUCTS
      </a>
    </div>
  </div>
</div>



<!-- Navigation and Logo -->
<div class="d-flex align-items-center justify-content-center" style="margin: 10px auto 0 auto; max-width: 95%;">
    <a href="" class="logo d-flex align-items-center" style="text-decoration: none;">
      <img src="{{ asset('assets/img/logo2.png') }}" 
           alt="logo" 
           class="img-fluid" 
           style="max-height: 75px; width: auto; margin-right: 4px;">
    
      <h1 class="logo mb-0" style="font-size: 22px; line-height: 1.2;">
        <a href="" style="text-decoration: none; color: inherit; margin-right: 15px;">
          <span>JM INNOVATECH</span> SOLUTIONS
        </a>
      </h1>
    </a>

  <nav class="nav-menu d-none d-lg-block desktop-nav">
    <ul>
      <li class="active"><a href="/">Home</a></li>
      <li class="drop-down"><a href="">Company</a>
        <ul>
          <li class="drop-down mega-menu"><a href="#">Our Service</a>
            <div class="mega-dropdown">
              <div class="row">
                <div class="col-item icon-item">
                  <i class="bi bi-globe"></i>
                  <a href="{{route('webdevelopment')}}">Web Development</a>
                </div>
                <div class="col-item icon-item">
                  <i class="bi bi-phone"></i>
                  <a href="{{route('mobiledevelopment')}}">Mobile App Development</a>
                </div>
                <div class="col-item icon-item">
                  <i class="bi bi-palette"></i>
                  <a href="{{route('design')}}">UI/UX Design</a>
                </div>
                <div class="col-item icon-item">
                  <i class="bi bi-chat-dots"></i>
                  <a href="{{route('bulksms')}}">Bulk SMS</a>
                </div>
                <div class="col-item icon-item">
                  <i class="bi bi-gear"></i>
                  <a href="{{route('consult')}}">IT Consulting</a>
                </div>
                <div class="col-item icon-item">
                  <i class="bi bi-cart"></i>
                  <a href="{{route('commerce')}}">E-commerce Solutions</a>
                </div>
                <div class="col-item icon-item">
                  <i class="bi bi-tools"></i>
                  <a href="{{route('maintenance')}}">Maintenance</a>
                </div>
                <div class="col-item icon-item">
                  <i class="bi bi-mortarboard"></i>
                  <a href="{{route('train')}}">Industrial Training</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ asset('frontend/assets/img/JM%20Innovatech%20Solutions%20Profile.pdf') }}" download>
              <i class="bi bi-download" style="margin-right: 5px;"></i>
              Download Company Profile
            </a>
          </li>
        </ul>
      </li>
      <li><a href="{{route('portfolio')}}">Our Portfolio</a></li>
      <li class="drop-down mega-menu"><a href="#">About Us</a>
        <div class="mega-dropdown">
          <div class="row">
            <div class="col-item icon-item">
              <i class="bi bi-person-lines-fill"></i> 
              <a href="{{ route('whoarewe') }}">Who We Are?</a>
            </div>
            <div class="col-item icon-item">
              <i class="bi bi-briefcase-fill"></i> 
              <a href="{{ route('careers.index') }}">Careers & Opportunities</a>
            </div>
            <div class="col-item icon-item">
              <i class="bi bi-question-circle-fill"></i>
              <a href="">FAQ</a>
            </div>
            <div class="col-item icon-item">
              <i class="bi bi-chat-quote-fill"></i>
              <a href="{{ route('faq') }}">Quotes</a>
            </div>
          </div>
        </div>
      </li>
      <li><a href="{{ route('blog.index') }}">Blog</a></li>
      <li><a href="{{route('contact')}}">Contact Us</a></li>
        <li class="nav-item position-relative">
          <a href="" class="nav-link">
            Web Hosting
          </a>
          <!-- New badge -->
          <span class="new-badge">New</span>
        </li>
      <li>
        <a href="{{ route('login') }}" 
           class="btn btn-primary" 
           style="padding: 6px 15px; border-radius: 4px; color: white; font-weight: 600; text-align: center;">
          Staff Login
        </a>
      </li>
    </ul>
  </nav>

  @if($social)
  <div class="header-social-links">
    <a href="{{ $social->tw }}" class="twitter"><i class="icofont-twitter"></i></a>
    <a href="{{ $social->fb }}" class="facebook"><i class="icofont-facebook"></i></a>
    <a href="{{ $social->ins }}" class="instagram"><i class="icofont-instagram"></i></a>
    <a href="{{ $social->ln }}" class="linkedin"><i class="icofont-linkedin"></i></a>
  </div>
  @endif
</div>


</header>