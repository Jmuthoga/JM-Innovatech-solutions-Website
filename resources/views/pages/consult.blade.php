@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<main role="main" class="it-consulting-section" style="max-width: 1300px; margin: 80px auto 60px; padding: 0 20px;">

  <!-- IT Consulting Intro -->
  <section id="it-consulting" class="mb-5" aria-label="IT Consulting Services" style="margin-top: 20px;">
    <header class="text-center mb-5" data-aos="fade-up" style="max-width: 720px; margin-left: auto; margin-right: auto;">
      <h1 class="fw-semibold mb-3" style="font-size: 2.5rem; letter-spacing: 0.03em; line-height: 1.2; color: #212529;">
        Professional IT Consulting Services
      </h1>
      <hr class="mx-auto mb-4" style="width: 60px; border-top: 3px solid #0d6efd; opacity: 0.8;" />
      <p class="text-secondary fs-5" style="line-height: 1.6;" aria-label="IT Consulting Services in Kenya">
        JM Innovatech Solutions provides expert IT consulting tailored to help your business optimize technology, enhance security, and align IT strategies with your goals. Our experienced consultants deliver solutions that empower your organization to thrive in today's digital landscape.
      </p>
    </header>

    <article class="row align-items-center gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5 text-center">
        <img
          src="{{ asset('assets/img/it.avif') }}"
          alt="IT Consulting at JM Innovatech Solutions"
          class="img-fluid rounded shadow-sm"
          loading="lazy"
          width="100%"
          height="auto"
        />
      </div>
      <div class="col-lg-7">
        <h2 class="h3 mb-3">Why Choose JM Innovatech Solutions for IT Consulting?</h2>
        <p class="fst-italic">
          Our expert consultants provide customized strategies focused on security, infrastructure, and digital transformation to help your business stay competitive and secure.
        </p>

        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Cybersecurity Expertise:</strong> Protect your business from evolving threats.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Infrastructure Planning:</strong> Build scalable and efficient IT systems.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Cloud Strategy:</strong> Optimize storage and collaboration securely.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>IT Strategy Development:</strong> Align technology with your business goals.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Business Continuity:</strong> Ensure operations run smoothly under any circumstance.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Risk Assessment:</strong> Identify and mitigate IT risks effectively.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Digital Transformation:</strong> Innovate and improve processes with new technologies.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Project Management:</strong> Deliver IT projects on time and on budget.</li>
            </ul>
          </div>
        </div>

        <p class="mt-3">
          Partner with JM Innovatech Solutions for IT consulting that drives your business forward with strategic, secure, and efficient technology solutions.
        </p>
      </div>
    </article>
  </section>

  <!-- IT Consulting Pricing Plans -->
  <section id="pricing" class="bg-light py-5 rounded" aria-label="IT Consulting Pricing Plans">
    <header class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold">IT Consulting Pricing Plans</h2>
      <p class="lead mx-auto" style="max-width: 700px;">
        Choose a consulting package tailored to your business needs. Transparent pricing and expert guidance to support your growth.
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
            'title' => 'Basic Consulting',
            'subtitle' => 'Ideal for Small Businesses',
            'price' => 'KES 13,000',
            'features' => [
              'Initial IT Assessment',
              'Security Review',
              'Basic Infrastructure Planning',
              '1 Month Support',
              'Delivery Within 10 Days',
              '50% Deposit Required',
            ],
            'btn_class' => 'btn-primary',
          ],
          [
            'title' => 'Standard Consulting',
            'subtitle' => 'For Growing Businesses',
            'price' => 'KES 22,000',
            'features' => [
              'Comprehensive IT Assessment',
              'Risk & Compliance Analysis',
              'Cloud Strategy Advice',
              '3 Months Support & Maintenance',
              'Delivery Within 15 Days',
              '50% Deposit Required',
            ],
            'btn_class' => 'btn-success',
          ],
          [
            'title' => 'Premium Consulting',
            'subtitle' => 'For Large Enterprises',
            'price' => 'KES 30,000',
            'features' => [
              'Full IT Infrastructure Planning',
              'Digital Transformation Strategy',
              'Dedicated Project Management',
              '6 Months Support & Maintenance',
              'Delivery Within 25 Days',
              '50% Deposit Required',
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
      <strong>All Consulting Plans Include:</strong>
    </p>

    <div class="row row-cols-1 row-cols-md-3 g-3 mb-4 text-start">
      @php
        $features = [
          'Expert Strategic Guidance',
          'Comprehensive Risk Assessments',
          'Customized Technology Solutions',
          'Dedicated Support & Advisory',
          'Ongoing Performance Monitoring',
          'Confidentiality & Data Privacy',
          '30-day Satisfaction Guarantee',
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
    #it-consulting {
      margin-top: 150px !important;
    }
  }
</style>

{{-- Structured Data for SEO --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "JM Innovatech Solutions IT Consulting Plans",
  "description": "Expert IT consulting services tailored to small, medium, and large businesses to optimize technology and enhance security.",
  "offers": [
    {
      "@type": "Offer",
      "name": "Basic Consulting",
      "price": "13000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Standard Consulting",
      "price": "22000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Premium Consulting",
      "price": "30000",
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
