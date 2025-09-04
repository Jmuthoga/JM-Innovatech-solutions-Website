@extends('layouts.master_home')

@include('layouts.body.slider')

@section('home_content')

<style>
  #testimonials {
    padding: 0 !important;
    margin: 0 !important;
    padding-bottom: 0 !important;
    margin-bottom: 0 !important;
  }

  #testimonials .container,
  #testimonials .swiper,
  #testimonials .swiper-wrapper,
  #testimonials .section-title {
    padding: 0 !important;
    margin: 0 !important;
    max-width: 100% !important;
  }

  /* Optional: reduce spacing inside testimonial items */
  .testimonial-item {
    margin: 0;
  }

  .testimonials .swiper,
  .testimonials .swiper-slide,
  .testimonials .testimonial-item {
    position: relative;
    z-index: 2;
  }

  .testimonial-item {
    background: rgba(0, 0, 0, 0.6);
    padding: 0;
    border-radius: 1rem;
    max-width: 700px;
    margin: auto;
  }

  .testimonial-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 1rem;
  }
  
  .portfolio-wrapper img {
  width: 100%;
  height: 330px; /* Equal size for all images */
  object-fit: cover;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.portfolio-wrapper img:hover {
  transform: scale(1.05);
}

.portfolio-info {
  margin-top: 15px;
}

.portfolio-info h4 {
  font-size: 1.2rem;
  color: #222;
}

.portfolio-info p {
  font-size: 0.95rem;
  color: #555;
}
</style>


<!-- Core Area Header -->
<div class="text-center my-5 position-relative" style="margin-bottom: 0;">
  <div style="
    display: inline-block;
    max-width: 100vw;
    padding: 20px 40px;
    border-top: 3px solid #007bff;
    border-bottom: 3px solid #007bff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
  ">

    <!-- Shadow Text -->
    <h1 style="
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 5rem;
      font-weight: 900;
      color: rgba(0, 0, 0, 0.05);
      z-index: 0;
      white-space: nowrap;
      pointer-events: none;
    ">
      CORE
    </h1>

    <!-- Foreground Text -->
    <p style="
      position: relative;
      font-size: 1.5rem;
      font-weight: 600;
      color: #333;
      z-index: 1;
      margin: 0;
      white-space: nowrap;
    ">
      OUR CORE AREA OF INTEREST
    </p>
  </div>
</div>



<!-- Featured Services Header -->
<div class="text-center" style="margin-top: 40px; margin-bottom: 30px;">
  <h2 style="
    font-size: 2.5rem;
    font-weight: 700;
    color: #007bff;
    margin-bottom: 10px;
  ">
    Building Tomorrow’s Technology Today
    <p style="
    font-size: 1.1rem;
    color: #555;
    max-width: 700px;
    margin: 0 auto;
  ">
    JM Innovatech Solutions is a leading Kenyan software development company based in Nairobi and Nyeri County. 
    We specialize in delivering tailored digital solutions that streamline business operations, enhance user experiences, and drive sustainable growth. 
    With a perfect blend of strategic insight and technical expertise, we help businesses in Kenya achieve successful digital transformation and stay competitive in today’s technology-driven market.
    </p>
</div>

<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section" style="margin-top: 0;">
  <div class="container">
    <div class="row gy-4">

      <!-- Web Development -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon text-primary text-center" style="font-size: 6rem;">
            <i class="bi bi-layers"></i>
          </div>
          <h4>
            <a href="{{route('webdevelopment')}}" class="stretched-link">
              Web Development in Kenya
            </a>
          </h4>
          <p>
            Professional web development services across Kenya, including Nairobi, Nyeri, Mombasa, Kisumu, and Eldoret. 
            We build responsive, SEO-optimized websites to grow your business online.
          </p>
        </div>
      </div>

      <!-- Mobile App Development -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon text-primary text-center" style="font-size: 6rem;">
            <i class="bi bi-phone-flip"></i>
          </div>
          <h4>
            <a href="{{route('mobiledevelopment')}}" class="stretched-link">
              Mobile App Development in Kenya
            </a>
          </h4>
          <p>
            Leading mobile app development in Kenya for Android & iOS platforms. 
            We design fast, secure, and user-friendly apps to help your business grow nationwide.
          </p>
        </div>
      </div>

      <!-- Custom Software Solutions -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon text-primary text-center" style="font-size: 6rem;">
            <i class="bi bi-terminal-dash"></i>
          </div>
          <h4>
            <a href="{{route('webdevelopment')}}" class="stretched-link">
              Custom Software Development in Kenya
            </a>
          </h4>
          <p>
            We create custom software solutions tailored to your business needs in Kenya, 
            enhancing efficiency and delivering powerful digital tools for success.
          </p>
        </div>
      </div>

      <!-- Cloud Services -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon text-primary text-center" style="font-size: 6rem;">
            <i class="bi bi-cloud-check"></i>
          </div>
          <h4>
            <a href="{{route('consult')}}" class="stretched-link">
              Cloud Services in Kenya
            </a>
          </h4>
          <p>
            Secure, scalable, and reliable cloud services across Kenya. 
            We help businesses migrate, manage, and optimize cloud solutions with the latest technologies.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /Featured Services Section -->




<!-- ======= Featured Company Section ======= -->
<section id="about" class="about section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Innovating Locally & Globally</h2>
    <p>
      <span>World-Class</span> <span class="description-title">Software Development & IT Solutions</span>
    </p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img
          src="{{ asset('assets/img/about1.avif') }}"
          alt="Global and Kenya Software Development Company"
          class="img-fluid" />
      </div>

      <div
        class="col-lg-6 d-flex flex-column justify-content-center"
        data-aos="fade-up"
        data-aos-delay="200">
        <div class="about-content ps-0 ps-lg-3">

          <div class="d-flex gap-3 mb-4">
            <i class="bi bi-diagram-3 text-primary me-5" style="font-size: 3rem;"></i>
            <div>
              <h4>
                From Kenya to the World
              </h4>
              <p>
                JM Innovatech Solutions delivers high-quality software development services not only across Nairobi, Nyeri, Mombasa, Kisumu, Nakuru, and all counties in Kenya, but also to clients in Africa, Europe, North America, Asia, and beyond. We bridge local expertise with global standards.
              </p>
            </div>
          </div>

          <div class="d-flex gap-3 mb-4">
            <i class="bi bi-fullscreen-exit text-primary" style="font-size: 3rem;"></i>
            <div>
              <h4>
                Comprehensive Digital Solutions
              </h4>
              <p>
                Our expertise spans responsive web development, Android & iOS mobile apps, enterprise software, e-commerce platforms, API integrations, and cloud-based systems. We leverage top technologies like Laravel, React, Flutter, Node.js, Python, and AWS to deliver scalable, secure, and high-performance solutions.
              </p>
            </div>
          </div>

          <div class="d-flex gap-3 mb-4">
            <i class="bi bi-lightbulb text-primary" style="font-size: 3rem;"></i>
            <div>
              <h4>
                Serving Diverse Industries Worldwide
              </h4>
              <p>
                From startups to global enterprises, we partner with businesses in finance, healthcare, education, logistics, e-commerce, manufacturing, and real estate. Our solutions are designed to help companies in any country achieve measurable growth and digital transformation.
              </p>
            </div>
          </div>

          <p>
            Whether you’re in Kenya, Africa, or anywhere around the world, JM Innovatech Solutions is your trusted partner for professional, innovative, and result-driven software development. Together, we can turn your vision into a digital success story.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Featured Company Section -->


<!-- Skills Section -->
<section id="skills" class="skills section mt-5">
  <div class="container section-title mb-5" data-aos="fade-up">
    <h2>Our Technical Expertise</h2>
    <p>
      <span>Mastering Modern Technologies</span>
      <span class="description-title">Delivering Innovative Software Solutions in Kenya & Worldwide</span>
    </p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row skills-content skills-animation">
      <div class="col-lg-6">
        <!-- Skill -->
        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>HTML5 & Semantic Web Development</span><span class="val" data-target="100">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>CSS3 / Responsive UI Design</span><span class="val" data-target="95">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>JavaScript / React.js / Vue.js</span><span class="val" data-target="85">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>M-Pesa API Integration (C2B, B2C, STK Push)</span><span class="val" data-target="90">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>Python / Django / Flask</span><span class="val" data-target="90">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>PHP / Laravel / RESTful API Development</span><span class="val" data-target="85">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>Cloud & Database Solutions (MySQL, AWS, Firebase)</span><span class="val" data-target="80">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex justify-content-between fw-bold">
            <span>Third-Party API Integration (Google Maps, PayPal, Stripe)</span><span class="val" data-target="88">0%</span>
          </div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar bg-primary" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JS to Animate Skill Bars -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const skillSection = document.querySelector("#skills");
    const counters = skillSection.querySelectorAll(".val");
    const bars = skillSection.querySelectorAll(".progress-bar");
    let started = false;

    const animateSkills = () => {
      if (started) return;
      started = true;

      counters.forEach((counter, i) => {
        const target = +counter.getAttribute("data-target");
        let count = 0;
        const speed = 20; // Lower = faster

        const updateCount = () => {
          if (count < target) {
            count++;
            counter.textContent = `${count}%`;
            bars[i].style.width = `${count}%`;
            setTimeout(updateCount, speed);
          } else {
            counter.textContent = `${target}%`;
            bars[i].style.width = `${target}%`;
          }
        };

        updateCount();
      });
    };

    // Trigger when in view (basic approach)
    window.addEventListener("scroll", () => {
      const sectionTop = skillSection.offsetTop - 200;
      if (window.scrollY >= sectionTop) {
        animateSkills();
      }
    });
  });
</script>
<!-- /Skills Section -->

<!-- Achievements Section -->
<section id="achievements" class="section my-5" aria-label="Software Development Achievements in Kenya and Worldwide">
  <div class="container">
    <div class="position-relative" style="border-radius: 0 0 30px 0; overflow: hidden;">

      <!-- Background Image -->
      <div style="background-image: url('assets/img/achievement.avif'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;" role="presentation"></div>

      <!-- Overlay & Content -->
      <div style="position: relative; z-index: 2; background: linear-gradient(to bottom, rgba(0, 31, 63, 0.88), rgba(0, 31, 63, 0.88)); color: white; padding: 40px; border-radius: 0 0 30px 0;">
        
        <!-- Title -->
        <header>
          <h2 style="background-color: #007bff; padding: 15px 25px; font-weight: bold; font-size: 1.6rem; color: white; border-radius: 5px 5px 0 0;">
            Software Development Achievements
          </h2>
        </header>

        <!-- White Margin Separator -->
        <div style="height: 10px; background-color: white; margin-bottom: 20px;"></div>

        <!-- Description -->
        <p style="font-size: 1.1rem; font-weight: 500; margin-bottom: 30px;">
          <strong>JM Innovatech Solutions</strong> is a leading <em>software development company in Kenya</em>, delivering <strong>custom software solutions</strong>, <strong>mobile app development</strong>, and <strong>web development</strong> services to clients in Nairobi, Mombasa, Kisumu, and across the globe. 
          With expertise in <strong>API integration</strong> including <strong>M-Pesa payment integration</strong>, we provide innovative, secure, and scalable technology solutions that drive business growth in Kenya and beyond.
        </p>

        <!-- Stats -->
        <div class="row gy-4 text-center">
          <div class="col-md-6 col-xl-3">
            <i class="bi bi-emoji-smile text-light mb-2" style="font-size: 3rem;" aria-hidden="true"></i>
            <div class="stats-item">
              <span class="counter fw-bold" data-target="50">0</span>
              <p>Happy Clients Worldwide</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <i class="bi bi-journal-richtext text-light mb-2" style="font-size: 3rem;" aria-hidden="true"></i>
            <div class="stats-item">
              <span class="counter fw-bold" data-target="35">0</span>
              <p>Custom Software Projects Delivered</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <i class="bi bi-headset text-light mb-2" style="font-size: 3rem;" aria-hidden="true"></i>
            <div class="stats-item">
              <span class="counter fw-bold" data-target="2000">0</span>
              <p>Hours of Technical Support</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <i class="bi bi-people text-light mb-2" style="font-size: 3rem;" aria-hidden="true"></i>
            <div class="stats-item">
              <span class="counter fw-bold" data-target="12">0</span>
              <p>Expert Software Engineers</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- JS to Animate Numbers -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    let triggered = false;

    function animateCounters() {
      if (triggered) return;
      triggered = true;

      counters.forEach(counter => {
        const target = +counter.getAttribute("data-target");
        let count = 0;
        const increment = Math.ceil(target / 100);

        const updateCounter = () => {
          if (count < target) {
            count += increment;
            counter.textContent = count > target ? target : count;
            requestAnimationFrame(updateCounter);
          } else {
            counter.textContent = target;
          }
        };

        updateCounter();
      });
    }

    window.addEventListener("scroll", () => {
      const statsSection = document.getElementById("achievements");
      const sectionTop = statsSection.offsetTop - 200;
      if (window.scrollY > sectionTop) {
        animateCounters();
      }
    });
  });
</script>
<!-- /Achievements Section -->


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section" aria-label="Google Reviews">
    
  <!-- Elfsight Widget for johnmuthogakanyingi@gmail.com -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">
<!--    <script src="https://elfsightcdn.com/platform.js" async></script>-->
<!--    <div class="elfsight-app-b2c1b872-0896-4b02-af6c-a42db516115d" data-elfsight-app-lazy></div>-->
        <!-- Elfsight Google Reviews | Untitled Google Reviews -->
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <div class="elfsight-app-bf1323d4-6c52-466b-b4b6-e341db3c22fb" data-elfsight-app-lazy></div>
  </div>
</section>

<!-- Testimonials Section — Continuous CSS Scroll -->
<!--<section id="testimonials" class="testimonials section" aria-label="Google Reviews">-->
<!--  <div class="container section-title" data-aos="fade-up">-->
<!--    <h2>Google Reviews</h2>-->
<!--    <p><span>What Clients Are Saying</span> <span class="description-title">From Kenya & Worldwide</span></p>-->
<!--  </div>-->

  <!-- Google Review Summary -->
<!--  <div class="google-review-summary" data-aos="fade-up">-->
<!--    <img src="{{ asset('assets/img/google.png') }}" alt="Google" class="google-summary-icon" style="width: 150px; height: 150px;">-->
<!--    <div>-->
<!--      <strong>EXCELLENT</strong>-->
<!--      <div class="stars-summary">★★★★★</div>-->
<!--      <span>Based on reviews</span>-->
<!--    </div>-->
<!--  </div>-->

<!--  <div class="container" data-aos="fade-up" data-aos-delay="100">-->
    <!-- Continuous scroll wrapper -->
<!--    <div class="scroll-wrapper">-->
<!--      <div class="scroll-track">-->
        <!-- Review cards -->
<!--        <div class="review-card">-->
<!--          <div class="review-header">-->
<!--            <img src="{{ asset('assets/img/john.jpg') }}" class="testimonial-img" alt="John Muthoga">-->
<!--            <div class="review-meta">-->
<!--              <h3>John Kanyingi</h3>-->
<!--              <span class="review-date">Posted on Google · Jan 2025</span>-->
<!--            </div>-->
<!--            <img src="{{ asset('assets/img/google-icon.png') }}" alt="Google Icon" class="google-icon">-->
<!--          </div>-->
<!--          <div class="stars">★★★★★</div>-->
<!--          <p class="review-text">Professional, responsive, and detail-oriented. JM Innovatech Solutions built a site that exceeded my expectations.</p>-->
<!--          <span class="verified-badge">✔ Verified Google Review</span>-->
<!--        </div>-->

<!--        <div class="review-card">-->
<!--          <div class="review-header">-->
<!--            <img src="{{ asset('assets/img/omodi.jpg') }}" class="testimonial-img" alt="Joseph Omondi">-->
<!--            <div class="review-meta">-->
<!--              <h3>JOSEPH OMONDI</h3>-->
<!--              <span class="review-date">Posted on Google · Dec 2024</span>-->
<!--            </div>-->
<!--            <img src="{{ asset('assets/img/google-icon.png') }}" alt="Google Icon" class="google-icon">-->
<!--          </div>-->
<!--          <div class="stars">★★★★★</div>-->
<!--          <p class="review-text">Their sophisticated approach to integrating data-driven solutions has significantly enhanced our decision-making processes.</p>-->
<!--          <span class="verified-badge">✔ Verified Google Review</span>-->
<!--        </div>-->

<!--        <div class="review-card">-->
<!--          <div class="review-header">-->
<!--            <img src="{{ asset('assets/img/waiya.jpg') }}" class="testimonial-img" alt="Daniel Waiya">-->
<!--            <div class="review-meta">-->
<!--              <h3>Daniel Waiya</h3>-->
<!--              <span class="review-date">Posted on Google · Dec 2024</span>-->
<!--            </div>-->
<!--            <img src="{{ asset('assets/img/google-icon.png') }}" alt="Google Icon" class="google-icon">-->
<!--          </div>-->
<!--          <div class="stars">★★★★★</div>-->
<!--          <p class="review-text">They built our e-commerce platform with seamless M-Pesa and PayPal integration.</p>-->
<!--          <span class="verified-badge">✔ Verified Google Review</span>-->
<!--        </div>-->

<!--        <div class="review-card">-->
<!--          <div class="review-header">-->
<!--            <img src="{{ asset('assets/img/eliza.jpg') }}" class="testimonial-img" alt="Elizabeth Mwangi">-->
<!--            <div class="review-meta">-->
<!--              <h3>Elizabeth Mwangi</h3>-->
<!--              <span class="review-date">Posted on Google · Nov 2024</span>-->
<!--            </div>-->
<!--            <img src="{{ asset('assets/img/google-icon.png') }}" alt="Google Icon" class="google-icon">-->
<!--          </div>-->
<!--          <div class="stars">★★★★★</div>-->
<!--          <p class="review-text">From initial concept to final launch, the website development process was smooth and efficient. The team delivered a visually stunning and highly functional site that truly represents our brand online.</p>-->
<!--          <span class="verified-badge">✔ Verified Google Review</span>-->
<!--        </div>-->
        
<!--        <div class="review-card">-->
<!--          <div class="review-header">-->
<!--            <img src="{{ asset('assets/img/matau.jpg') }}" class="testimonial-img" alt="Elizabeth Mwangi">-->
<!--            <div class="review-meta">-->
<!--              <h3>DANIEL MATAU</h3>-->
<!--              <span class="review-date">Posted on Google · Nov 2024</span>-->
<!--            </div>-->
<!--            <img src="{{ asset('assets/img/google-icon.png') }}" alt="Google Icon" class="google-icon">-->
<!--          </div>-->
<!--          <div class="stars">★★★★★</div>-->
<!--          <p class="review-text">From setup to daily operations, the POS system was seamless and reliable. It streamlined our sales process and improved customer experience dramatically.</p>-->
<!--          <span class="verified-badge">✔ Verified Google Review</span>-->
<!--        </div>-->
        
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!--<style>-->
<!--:root {-->
<!--  --slide-width: 320px;-->
<!--  --gap: 20px;-->
<!--  --scroll-speed: 30s;-->
<!--}-->

<!--/* Google Review Summary */-->
<!--.google-review-summary {-->
<!--  display:flex;-->
<!--  align-items:center;-->
<!--  gap:10px;-->
<!--  justify-content:center;-->
<!--  background:#fff;-->
<!--  padding:12px 18px;-->
<!--  border-radius:10px;-->
<!--  box-shadow:0 6px 18px rgba(0,0,0,0.06);-->
<!--  max-width:460px;-->
<!--  margin:0 auto 28px;-->
<!--}-->
<!--.google-summary-icon { width:40px; height:40px; }-->
<!--.stars-summary { color:#fbbc05; font-size:1.1rem; }-->

<!--/* Scroll Wrapper */-->
<!--.scroll-wrapper {-->
<!--  overflow:hidden;-->
<!--  width:100%;-->
<!--}-->
<!--.scroll-track {-->
<!--  display:flex;-->
<!--  gap:var(--gap);-->
<!--  animation: scroll-left var(--scroll-speed) linear infinite;-->
<!--}-->
<!--.scroll-track:hover {-->
<!--  animation-play-state: paused;-->
<!--}-->

<!--/* Review Card */-->
<!--.review-card {-->
<!--  flex: 0 0 var(--slide-width);-->
<!--  background:#fff;-->
<!--  border-radius:10px;-->
<!--  padding:18px;-->
<!--  box-shadow:0 6px 18px rgba(0,0,0,0.06);-->
<!--}-->
<!--.review-header {-->
<!--  display:flex;-->
<!--  align-items:center;-->
<!--  gap:12px;-->
<!--}-->
<!--.testimonial-img {-->
<!--  width:64px;-->
<!--  height:64px;-->
<!--  object-fit:cover;-->
<!--  border-radius:50%;-->
<!--}-->
<!--.review-meta h3 {-->
<!--  margin:0;-->
<!--  font-size:1rem;-->
<!--  font-weight:600;-->
<!--}-->
<!--.review-date { font-size:0.82rem; color:#777; }-->
<!--.google-icon { margin-left:auto; width:24px; height:24px; }-->
<!--.stars { color:#fbbc05; margin:6px 0; font-size:1rem; }-->
<!--.review-text { color:#333; font-size:0.94rem; line-height:1.45; }-->
<!--.verified-badge { color:#34a853; font-weight:700; font-size:0.82rem; }-->

<!--/* Animation */-->
<!--@keyframes scroll-left {-->
<!--  0% { transform: translateX(0); }-->
  <!--100% { transform: translateX(calc(-1 * (var(--slide-width) + var(--gap)) * 4)); } /* total width of all cards */-->
<!--}-->

<!--/* Responsive */-->
<!--@media (max-width:900px) {-->
<!--  :root { --slide-width: 260px; --scroll-speed: 24s; }-->
<!--}-->
<!--@media (max-width:600px) {-->
<!--  :root { --slide-width: 200px; --scroll-speed: 20s; }-->
<!--}-->
<!--</style>-->



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">
    <header class="section-title" data-aos="fade-up">
      <h2>Our Completed Projects</h2>
      <p>
        <span class="description-title">Some of Our Proudly Delivered Work</span>
      </p>
      <p class="portfolio-intro" style="max-width:600px; margin: 0 auto; color:#555; font-size:1rem;">
        These are some of our successfully completed projects, reflecting our expertise in delivering professional, high-quality solutions that create real impact for our clients.  
        All completed projects can be found here: 
        <a href="{{ route('portfolio') }}" style="color:#007bff; text-decoration:none;">Our Portfolio</a>.
      </p>
    </header>

    <div class="row mb-4" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <!-- Optional filter buttons or categories can go here -->
      </div>
    </div>


<div class="row portfolio-container" data-aos="fade-up">
    @if($images && $images->count())
        @foreach ($images->take(6) as $img)  {{-- ✅ Only take first 6 items --}}
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrapper">
                    <!-- Portfolio Image -->
                    <img src="{{ asset($img->image) }}" alt="Portfolio" class="img-fluid">

                    <!-- Portfolio Info Below Image -->
                    <div class="portfolio-info text-center mt-3">
                        <h4 class="fw-bold">{{ $img->title ?? 'Portfolio Item' }}</h4>

                        @if(!empty($img->description))
                            <p class="text-muted">
                                {{
                                    collect(explode(' ', $img->description))
                                        ->take(30)
                                        ->join(' ')
                                }}
                            </p>
                        @endif

                        @if(!empty($img->link))
                            @php
                                // Ensure the link is absolute
                                $link = $img->link;
                                if (!Str::startsWith($link, ['http://', 'https://'])) {
                                    $link = '//' . ltrim($link, '/');
                                }
                            @endphp
                            <a href="{{ $link }}" target="_blank" class="btn btn-primary mt-2">
                                Explore More
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No portfolio items to display.</p>
    @endif
</div>



  </div>
</section><!-- End Portfolio Section -->

<!-- Brand Section -->
<section id="clients" class="clients" style="padding: 40px 0; background: #f8f9fa;" aria-label="Trusted Brand Partnerships in Kenya and Worldwide">
  <div class="container" data-aos="fade-up">
    <header class="section-title" style="text-align: center; margin-bottom: 30px;">
      <h2 style="font-size: 28px; font-weight: 700; color: #222; margin-bottom: 8px;">Trusted Brands in Kenya & Beyond</h2>
      <p style="font-size: 18px; color: #555; max-width: 600px; margin: 0 auto;">
        We proudly collaborate with leading Kenyan and international brands to deliver top-quality solutions across East Africa and worldwide.
      </p>
    </header>

    @if($brands && $brands->count())
    <div style="overflow: hidden; position: relative; width: 100%;">
      <div style="display: flex; width: fit-content; animation: slide-left 30s linear infinite; align-items: center;">
        @foreach ($brands as $brand)
        <figure style="flex: 0 0 auto; padding: 15px 20px; margin: 0;">
          <img src="{{ $brand->brand_image }}" alt="Logo of {{ $brand->brand_name }}" 
               style="height: 80px; width: auto; object-fit: contain;" loading="lazy" />
          <figcaption class="sr-only">{{ $brand->brand_name }} - Trusted Kenyan Brand Partner</figcaption>
        </figure>
        @endforeach
      </div>
    </div>
    @else
    <p style="text-align: center; font-size: 16px; color: #777;">No brands to display at the moment.</p>
    @endif
  </div>

  <style>
    @keyframes slide-left {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(-100%);
      }
    }
    /* Screen reader only */
    .sr-only {
      position: absolute !important;
      width: 1px !important;
      height: 1px !important;
      padding: 0 !important;
      margin: -1px !important;
      overflow: hidden !important;
      clip: rect(0, 0, 0, 0) !important;
      white-space: nowrap !important;
      border: 0 !important;
    }
  </style>
</section>



@endsection