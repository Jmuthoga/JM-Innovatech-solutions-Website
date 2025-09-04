@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<main role="main" class="uiux-design-section" style="max-width: 1300px; margin: 80px auto 60px; padding: 0 20px;">

  <!-- UI/UX Design Intro -->
  <section id="uiux" class="mb-5" aria-label="UI/UX Design Services" style="margin-top: 20px;">
    <header class="text-center mb-5" data-aos="fade-up" style="max-width: 720px; margin-left: auto; margin-right: auto;">
      <h1 class="fw-semibold mb-3" style="font-size: 2.5rem; letter-spacing: 0.03em; line-height: 1.2; color: #212529;">
        Professional UI/UX Design Services
      </h1>
      <hr class="mx-auto mb-4" style="width: 60px; border-top: 3px solid #0d6efd; opacity: 0.8;" />
      <p class="text-secondary fs-5" style="line-height: 1.6;" aria-label="UI/UX Design Services in Kenya">
        JM Innovatech Solutions enhances user satisfaction with intuitive interfaces and optimized user experiences. Our creative process integrates research, prototyping, usability testing, and visual design to deliver digital products that stand out and perform excellently across all platforms.
      </p>
    </header>

    <article class="row align-items-center gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5 text-center">
        <img
          src="{{ asset('assets/img/design.avif') }}"
          alt="UI/UX Design at JM Innovatech Solutions"
          class="img-fluid rounded shadow-sm"
          loading="lazy"
          width="100%"
          height="auto"
        />
      </div>
      <div class="col-lg-7">
        <h2 class="h3 mb-3">Why Choose JM Innovatech Solutions?</h2>
        <p class="fst-italic">
          Our team creates user-centered, accessible, and visually compelling UI/UX designs, blending innovation with usability research to enhance engagement and satisfaction.
        </p>

        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>User Research:</strong> Deep understanding of your users to guide design choices.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Prototyping:</strong> Interactive mockups for iterative feedback and improvements.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Usability Testing:</strong> Ensuring intuitive navigation and delightful experiences.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Visual Design:</strong> Beautiful interfaces aligned with your brand identity.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Interaction Design:</strong> Engaging and easy-to-use user interactions.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Accessibility Design:</strong> Inclusive designs meeting accessibility standards.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Mobile UX Design:</strong> Optimized for smooth experiences on mobile devices.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>UI/UX Strategy Consulting:</strong> Aligning business goals with user needs for success.</li>
            </ul>
          </div>
        </div>

        <p class="mt-3">
          Partner with JM Innovatech Solutions to elevate your digital product with research-driven, user-friendly UI/UX designs.
        </p>
      </div>
    </article>
  </section>

  <!-- Pricing Plans -->
  <section id="pricing" class="bg-light py-5 rounded" aria-label="UI/UX Design Pricing Plans">
    <header class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold">UI/UX Design Pricing Plans</h2>
      <p class="lead mx-auto" style="max-width: 700px;">
        Pick a plan that fits your UI/UX design needs. All designs are user-centered, research-driven, and crafted for impactful experiences.
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
            'title' => 'Basic Design',
            'subtitle' => 'Perfect for Startups',
            'price' => 'KES 10,000',
            'features' => [
              'User Research & Analysis',
              'Wireframing & Prototyping',
              'Basic Usability Testing',
              'Mobile-First Design',
              '1 Revision Cycle',
              'Delivery Within 7 Days',
            ],
            'btn_class' => 'btn-primary',
          ],
          [
            'title' => 'Standard Design',
            'subtitle' => 'Ideal for Small Businesses',
            'price' => 'KES 20,000',
            'features' => [
              'All Basic Features',
              'Interactive Prototypes',
              'Advanced Usability Testing',
              'Accessibility Design',
              '3 Revision Cycles',
              'Delivery Within 14 Days',
            ],
            'btn_class' => 'btn-success',
          ],
          [
            'title' => 'Premium Design',
            'subtitle' => 'For Growing Companies',
            'price' => 'KES 35,000',
            'features' => [
              'All Standard Features',
              'Visual & Interaction Design',
              'User Journey Mapping',
              'UI/UX Strategy Consulting',
              'Unlimited Revisions',
              'Delivery Within 21 Days',
            ],
            'btn_class' => 'btn-warning text-dark',
          ],
          [
            'title' => 'Enterprise Design',
            'subtitle' => 'Comprehensive Solutions',
            'price' => 'KES 60,000',
            'features' => [
              'All Premium Features',
              'Dedicated Design Team',
              'Custom Branding & Identity',
              'Ongoing UX Optimization',
              'Post-Launch Support',
              'Delivery Within 30 Days',
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
          'User-Centered Design',
          'Accessibility Standards',
          'Responsive & Mobile-Friendly',
          'Interactive Prototypes',
          'Usability Testing',
          'Ongoing Support',
          'Strategic Consulting',
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
      color: #0d6efd !important;
      text-shadow: 0 0 8px rgba(13, 110, 253, 0.8);
    }
  </style>

</section>

</main>

<style>
  @media (min-width: 992px) {
    #uiux {
      margin-top: 150px !important;
    }
  }
</style>

{{-- Structured Data for SEO --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "JM Innovatech Solutions UI/UX Design Plans",
  "description": "Professional UI/UX design plans tailored for startups, small businesses, growing companies, and enterprises.",
  "offers": [
    {
      "@type": "Offer",
      "name": "Basic Design",
      "price": "10000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Standard Design",
      "price": "20000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Premium Design",
      "price": "35000",
      "priceCurrency": "KES",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Enterprise Design",
      "price": "60000",
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

