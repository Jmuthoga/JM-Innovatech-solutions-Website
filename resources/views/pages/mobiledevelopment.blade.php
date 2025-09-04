@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<main role="main" class="mobile-app-development-section" style="max-width: 1300px; margin: 80px auto 60px; padding: 0 20px;">

  <!-- Mobile App Development Intro -->
  <section id="mobile-app" class="mb-5" aria-label="Mobile App Development Services" style="margin-top: 20px;">
    <header class="text-center mb-5" data-aos="fade-up" style="max-width: 720px; margin-left: auto; margin-right: auto;">
      <h1 class="fw-semibold mb-3" style="font-size: 2.5rem; letter-spacing: 0.03em; line-height: 1.2; color: #212529;">
        Professional Mobile App Development
      </h1>
      <hr class="mx-auto mb-4" style="width: 60px; border-top: 3px solid #0d6efd; opacity: 0.8;" />
      <p class="text-secondary fs-5" style="line-height: 1.6;" aria-label="Mobile App Development in Kenya">
        JM Innovatech Solutions specializes in creating innovative, secure, and high-performance mobile applications tailored to your business needs. Whether you need native iOS and Android apps or efficient cross-platform solutions, our expert developers ensure user-friendly experiences that accelerate your digital growth across Kenya and beyond.
      </p>
    </header>

    <article class="row align-items-center gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5 text-center">
        <img
          src="{{ asset('assets/img/mobile.avif') }}"
          alt="Mobile App Development at JM Innovatech Solutions"
          class="img-fluid rounded shadow-sm"
          loading="lazy"
          width="100%"
          height="auto"
        />
      </div>
      <div class="col-lg-7">
        <h2 class="h3 mb-3">Why Choose JM Innovatech Solutions for Mobile Apps?</h2>
        <p class="fst-italic">
          Our dedicated team combines creativity with cutting-edge technology to build scalable, secure, and optimized mobile apps. We prioritize user experience, performance, and seamless integration with your business systems.
        </p>

        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Intuitive UI/UX Design:</strong> Creating engaging and user-friendly interfaces.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Backend Development:</strong> Robust server logic and database integration.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Native iOS & Android Apps:</strong> Optimized performance for each platform.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Cross-Platform Solutions:</strong> Efficient apps that run seamlessly on multiple devices.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Security Integration:</strong> Safeguarding your users and data.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Quality Assurance:</strong> Rigorous testing for reliability.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Deployment & Maintenance:</strong> Smooth app store publishing and ongoing support.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Analytics & Optimization:</strong> Data-driven improvements for enhanced engagement.</li>
            </ul>
          </div>
        </div>

        <p class="mt-3">
          Partner with JM Innovatech Solutions to transform your mobile app ideas into powerful digital tools that propel your business forward.
        </p>
      </div>
    </article>
  </section>

  <!-- Pricing Plans -->
  <section id="pricing" class="bg-light py-5 rounded" aria-label="Mobile App Pricing Plans">
    <header class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold">Mobile App Pricing Plans</h2>
      <p class="lead mx-auto" style="max-width: 700px;">
        Select a mobile app development package designed to fit your business goals. Each plan guarantees professional development, performance optimization, and ongoing support.
      </p>

      <div class="mt-4">
        <a href="{{ route('contact') }}" class="btn btn-outline-primary me-3">Learn More</a>
        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
      </div>
    </header>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" data-aos="fade-up" data-aos-delay="100">
      @php
        $plans = [
          [
            'title' => 'Basic App',
            'subtitle' => 'Ideal for Startups',
            'price' => 'KES 30,000',
            'features' => [
              'Up to 5 Screens',
              'Basic UI/UX Design',
              'Native iOS or Android',
              'Backend Integration',
              '1 Month Support',
              'App Store Deployment',
            ],
            'btn_class' => 'btn-primary',
          ],
          [
            'title' => 'Standard App',
            'subtitle' => 'Small to Medium Business',
            'price' => 'KES 55,000',
            'features' => [
              'Up to 10 Screens',
              'Advanced UI/UX Design',
              'Cross-Platform Support',
              'API Integration',
              '3 Months Support',
              'App Store Deployment',
            ],
            'btn_class' => 'btn-success',
          ],
          [
            'title' => 'Premium App',
            'subtitle' => 'Feature-rich Applications',
            'price' => 'KES 80,000',
            'features' => [
              'Unlimited Screens',
              'Custom UI/UX Design',
              'Native iOS & Android',
              'Advanced Backend',
              '6 Months Support & Maintenance',
              'App Store Deployment',
            ],
            'btn_class' => 'btn-warning text-dark',
          ],
          [
            'title' => 'Enterprise App',
            'subtitle' => 'For Large Corporates',
            'price' => 'KES 150,000',
            'features' => [
              'Unlimited Screens & Features',
              'Custom Integrations',
              'Dedicated Support',
              'Advanced Security',
              'Scalable Architecture',
              'Ongoing Maintenance',
            ],
            'btn_class' => 'btn-dark',
          ],
        ];
      @endphp

      @foreach ($plans as $plan)
        <article class="col">
          <div class="card h-100 shadow-sm border-0 rounded-3">
            <header class="card-header text-center bg-primary bg-gradient text-white py-3 rounded-top">
              <h3 class="h5 mb-1">{{ $plan['title'] }}</h3>
              <small>{{ $plan['subtitle'] }}</small>
            </header>
            <div class="card-body d-flex flex-column">
              <h4 class="text-center text-primary mb-3">{{ $plan['price'] }}</h4>
              <ul class="list-unstyled flex-grow-1 ps-3 mb-4">
                @foreach ($plan['features'] as $feature)
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>{{ $feature }}</li>
                @endforeach
              </ul>
              <a href="{{ route('contact') }}" class="btn {{ $plan['btn_class'] }} mt-auto">Order Now</a>
            </div>
          </div>
        </article>
      @endforeach
    </div>

  </section>

  <section
    class="text-center text-muted mt-5 position-relative"
    style="
      max-width: 850px;
      margin: auto;
      background-image: url('{{ asset('assets/img/slide6.avif') }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border-radius: 0.5rem;
      padding: 3rem 2rem;
      color: #f8f9fa;
      box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.7);
    "
  >
    <p class="mb-4 fw-semibold fs-5 text-light">
      <strong>All Plans Include:</strong>
    </p>

    <div class="row row-cols-1 row-cols-md-3 g-3 mb-4 text-start">
      @php
        $features = [
          'UI/UX Design',
          'Backend Development',
          'Native & Cross-Platform Apps',
          'Security Integration',
          'Testing & Quality Assurance',
          'Deployment & Maintenance',
          'Analytics & Optimization',
        ];
      @endphp

      @foreach ($features as $feature)
      <div class="col">
        <div class="d-flex align-items-center p-3 mb-3 rounded feature-item" tabindex="0" role="button" style="background: rgba(0,0,0,0.6); cursor: pointer;">
          <i class="bi bi-check2-circle text-primary fs-4 me-3 icon-blue"></i>
          <span class="fs-6 text-light">{{ $feature }}</span>
        </div>
      </div>
      @endforeach
    </div>

    <p class="fw-semibold fs-5 mt-4 text-light">
      <strong>Money-Back Guarantee:</strong> 30-day unconditional money-back guarantee for your peace of mind.
    </p>
  </section>

</main>

<style>
  .feature-item {
    transition: box-shadow 0.3s ease, color 0.3s ease;
  }
  .feature-item:hover,
  .feature-item:focus {
    box-shadow: 0 0 10px 3px rgba(13, 110, 253, 0.7);
    outline: none;
  }
  .feature-item:hover .icon-blue,
  .feature-item:focus .icon-blue {
    color: #0d6efd !important; /* Bootstrap primary blue */
    text-shadow: 0 0 8px rgba(13, 110, 253, 0.8);
  }
</style>

<style>
  @media (min-width: 992px) {
    #mobile-app {
      margin-top: 150px !important;
    }
  }
</style>

{{-- Structured Data for SEO --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "JM Innovatech Solutions Mobile App Development Plans",
  "description": "Professional, SEO optimized mobile app development plans tailored for startups, businesses, and corporates.",
  "offers": [
    {
      "@type": "Offer",
      "name": "Basic App",
      "price": "30000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Standard App",
      "price": "55000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Premium App",
      "price": "80000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Enterprise App",
      "price": "150000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    }
  ]
}
</script>

<!-- Background Canvas CSS -->
<style>
  #page-bg {
      position: fixed;
      inset: 0;
      width: 100vw;
      height: 100vh;
      z-index: -1; /* behind everything */
      background: #fff;
      pointer-events: none;
  }
</style>

<!-- Background Canvas JS -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById('page-bg');
    const ctx = canvas.getContext('2d');
    let particlesArray;

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        init();
    });

    class Particle {
        constructor(x, y, directionX, directionY, size, color) {
            this.x = x; this.y = y;
            this.directionX = directionX; this.directionY = directionY;
            this.size = size; this.color = color;
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
            ctx.fillStyle = this.color;
            ctx.fill();
        }
        update() {
            if (this.x + this.size > canvas.width || this.x - this.size < 0) this.directionX = -this.directionX;
            if (this.y + this.size > canvas.height || this.y - this.size < 0) this.directionY = -this.directionY;
            this.x += this.directionX;
            this.y += this.directionY;
            this.draw();
        }
    }

    function connect() {
        for (let a = 0; a < particlesArray.length; a++) {
            for (let b = a; b < particlesArray.length; b++) {
                let dx = particlesArray[a].x - particlesArray[b].x;
                let dy = particlesArray[a].y - particlesArray[b].y;
                let distance = dx * dx + dy * dy;
                if (distance < (canvas.width/7) * (canvas.height/7)) {
                    ctx.beginPath();
                    ctx.strokeStyle = 'rgba(13, 110, 253, 0.2)';
                    ctx.lineWidth = 1;
                    ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                    ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                    ctx.stroke();
                }
            }
        }
    }

    function init() {
        particlesArray = [];
        let numberOfParticles = (canvas.width * canvas.height) / 15000;
        for (let i = 0; i < numberOfParticles; i++) {
            let size = (Math.random() * 3) + 2;
            let x = Math.random() * (canvas.width - size * 2) + size;
            let y = Math.random() * (canvas.height - size * 2) + size;
            let directionX = (Math.random() * 1) - 0.5;
            let directionY = (Math.random() * 1) - 0.5;
            let colors = ['#0d6efd', '#6610f2', '#198754', '#dc3545'];
            let color = colors[Math.floor(Math.random()*colors.length)];
            particlesArray.push(new Particle(x, y, directionX, directionY, size, color));
        }
    }

    function animate() {
        requestAnimationFrame(animate);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (let i = 0; i < particlesArray.length; i++) {
            particlesArray[i].update();
        }
        connect();
    }

    init();
    animate();
  });
</script>


@endsection
