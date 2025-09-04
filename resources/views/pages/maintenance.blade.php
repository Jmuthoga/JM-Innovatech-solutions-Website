@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<main role="main" class="maintenance-section" style="max-width: 1300px; margin: 80px auto 60px; padding: 0 20px;">

  <!-- Maintenance Intro -->
  <section id="web" class="mb-5" aria-label="Maintenance and Support Services" style="margin-top: 20px;">
    <header class="text-center mb-5" data-aos="fade-up" style="max-width: 720px; margin-left: auto; margin-right: auto;">
      <h1 class="fw-semibold mb-3" style="font-size: 2.5rem; letter-spacing: 0.03em; line-height: 1.2; color: #212529;">
        Maintenance and Support Services
      </h1>
      <hr class="mx-auto mb-4" style="width: 60px; border-top: 3px solid #0d6efd; opacity: 0.8;" />
      <p class="text-secondary fs-5" style="line-height: 1.6;" aria-label="Maintenance and Support Services in Kenya">
        JM Innovatech Solutions offers comprehensive maintenance and support to ensure your systems perform optimally, stay secure, and run smoothly. Our dedicated team provides proactive monitoring, timely updates, bug fixes, and round-the-clock technical assistance tailored to your business needs.
      </p>
    </header>

    <article class="row align-items-center gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5 text-center">
        <img
          src="{{ asset('assets/img/main.avif') }}"
          alt="Maintenance and Support at JM Innovatech Solutions"
          class="img-fluid rounded shadow-sm"
          loading="lazy"
          width="100%"
          height="auto"
        />
      </div>
      <div class="col-lg-7">
        <h2 class="h3 mb-3">Our Maintenance & Support Offerings</h2>
        <p class="fst-italic">
          We focus on keeping your technology infrastructure secure, efficient, and up-to-date with proactive management and responsive support.
        </p>

        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Regular System Monitoring:</strong> Detect and fix issues before they impact your business.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Performance Optimization:</strong> Ensure your systems run smoothly and efficiently.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Security Enhancements:</strong> Implement the latest protections against cyber threats.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Bug Fixing:</strong> Quickly resolve software glitches and bugs.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Software Updates:</strong> Keep your software current with latest features and patches.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Backup and Recovery:</strong> Safeguard your data and ensure business continuity.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>System Audits:</strong> Comprehensive health checks and improvement recommendations.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Technical Support:</strong> 24/7 assistance to resolve issues and answer queries.</li>
            </ul>
          </div>
        </div>

        <p class="mt-3">
          Partner with JM Innovatech Solutions for reliable, proactive maintenance and support that keeps your technology working for you.
        </p>
      </div>
    </article>
  </section>

  <!-- Pricing Plans -->
  <section id="pricing" class="bg-light py-5 rounded" aria-label="Maintenance Pricing Plans">
    <header class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold">Maintenance & Support Pricing Plans</h2>
      <p class="lead mx-auto" style="max-width: 700px;">
        Choose a maintenance plan that fits your business needs and ensures uninterrupted performance and security.
      </p>

      <div class="mt-4">
        <a href="{{route('contact')}}" class="btn btn-outline-primary me-3">Learn More</a>
        <a href="{{route('contact')}}" class="btn btn-primary">Contact Us</a>
      </div>
    </header>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" data-aos="fade-up" data-aos-delay="100">

      @php
        $plans = [
          [
            'title' => 'Basic Plan',
            'subtitle' => 'Essential Maintenance',
            'price' => 'KES 10,000/month',
            'features' => [
              'Regular System Monitoring',
              'Security Patches & Updates',
              'Monthly Backup & Recovery',
              'Bug Fixes & Minor Updates',
              'Email Support',
              'Response Time within 48 hours',
            ],
            'btn_class' => 'btn-primary',
          ],
          [
            'title' => 'Standard Plan',
            'subtitle' => 'Advanced Support',
            'price' => 'KES 20,000/month',
            'features' => [
              'All Basic Plan Features',
              'Performance Optimization',
              'System Audits & Reports',
              'Priority Support via Phone & Email',
              'Response Time within 24 hours',
            ],
            'btn_class' => 'btn-success',
          ],
          [
            'title' => 'Premium Plan',
            'subtitle' => 'Comprehensive Care',
            'price' => 'KES 35,000/month',
            'features' => [
              'All Standard Plan Features',
              '24/7 Technical Support',
              'On-demand Emergency Fixes',
              'Dedicated Account Manager',
              'Customized Maintenance Solutions',
              'Response Time within 4 hours',
            ],
            'btn_class' => 'btn-warning text-dark',
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
              <a href="{{route('contact')}}" class="btn {{ $plan['btn_class'] }} mt-auto">Order Now</a>
            </div>
          </div>
        </article>
      @endforeach
    </div>

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
          'Proactive Monitoring',
          'Security Updates',
          'Regular Backups',
          'Priority Support',
          'Performance Optimization',
          'Dedicated Account Manager (Premium Plan)',
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

</main>

<style>
  @media (min-width: 992px) {
    #web {
      margin-top: 150px !important;
    }
  }
</style>

{{-- Structured Data for SEO --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "JM Innovatech Solutions Maintenance and Support Plans",
  "description": "Reliable and comprehensive maintenance and support services with flexible plans for all business sizes.",
  "serviceType": "Maintenance and Support",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Maintenance Plans",
    "itemListElement": [
      {
        "@type": "Offer",
        "name": "Basic Plan",
        "price": "10000",
        "priceCurrency": "KES",
        "availability": "https://schema.org/InStock"
      },
      {
        "@type": "Offer",
        "name": "Standard Plan",
        "price": "20000",
        "priceCurrency": "KES",
        "availability": "https://schema.org/InStock"
      },
      {
        "@type": "Offer",
        "name": "Premium Plan",
        "price": "35000",
        "priceCurrency": "KES",
        "availability": "https://schema.org/InStock"
      }
    ]
  }
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
