@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<main role="main" class="industrial-training-section" style="max-width: 1300px; margin: 80px auto 60px; padding: 0 20px;">

  <!-- Industrial Training Intro -->
  <section id="industrial-training" class="mb-5" aria-label="Industrial Training at JM Innovatech Academy" style="margin-top: 20px;">
    <header class="text-center mb-5" data-aos="fade-up" style="max-width: 720px; margin-left: auto; margin-right: auto;">
      <h1 class="fw-semibold mb-3" style="font-size: 2.5rem; letter-spacing: 0.03em; line-height: 1.2; color: #212529;">
        Industrial Training Programs
      </h1>
      <hr class="mx-auto mb-4" style="width: 60px; border-top: 3px solid #0d6efd; opacity: 0.8;" />
      <p class="text-secondary fs-5" style="line-height: 1.6;" aria-label="Industrial Training Services in Software Development">
        Unlock your potential with <strong>JM Innovatech Academy</strong>. Our comprehensive training covers programming, web & mobile development, cybersecurity, data science, cloud computing, and more all designed to equip you with the skills the industry demands.
      </p>
    </header>

    <article class="row align-items-center gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5 text-center">
        <img
          src="{{ asset('assets/img/train.avif') }}"
          alt="Industrial Training at JM Innovatech Academy"
          class="img-fluid rounded shadow-sm"
          loading="lazy"
          width="100%"
          height="auto"
        />
      </div>
      <div class="col-lg-7">
        <h2 class="h3 mb-3">Why Choose JM Innovatech Academy?</h2>
        <p class="fst-italic">
          Gain hands-on experience with expert instructors and real-world projects. Our training programs are tailored for beginners and advanced learners, ensuring career-ready skills across all facets of software development and IT.
        </p>

        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Comprehensive Curriculum:</strong> Python, JavaScript, PHP, Java, C++, and more.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Web & Mobile Development:</strong> HTML, CSS, React, Django, Flutter.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Cybersecurity & Data Science:</strong> Ethical hacking, machine learning, data analytics.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Cloud & Database Management:</strong> AWS, Azure, MySQL, PostgreSQL, MongoDB.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>UI/UX Design:</strong> Industry-standard tools and best practices.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Flexible Scheduling:</strong> Full-time, part-time, online, and onsite options.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>Job-Ready Skills:</strong> Real projects, mentorship, and career support.</li>
              <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><strong>24/7 Support:</strong> Dedicated technical assistance throughout your learning journey.</li>
            </ul>
          </div>
        </div>

        <p class="mt-3">
          Prepare for a rewarding career in technology with JM Innovatech Academy. Our proven training approach ensures you graduate confident, capable, and ready to excel.
        </p>
      </div>
    </article>
  </section>

  <!-- Pricing Plans -->
  <section id="pricing" class="bg-light py-5 rounded" aria-label="Industrial Training Pricing Plans">
    <header class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold">Training Pricing & Enrollment</h2>
      <p class="lead mx-auto" style="max-width: 700px;">
        For detailed pricing, course schedules, and enrollment information, please visit our official <a href="" target="_blank" rel="noopener" class="text-primary fw-semibold">JM Academy Portal</a>.
      </p>

      <div class="mt-4">
        <a href="" target="_blank" rel="noopener" class="btn btn-outline-primary me-3">Learn More</a>
        <a href="" target="_blank" rel="noopener" class="btn btn-primary">Join JM Academy</a>
      </div>
    </header>
  </section>

  <!-- Highlights -->
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
      <strong>All Training Programs Include:</strong>
    </p>

    <div class="row row-cols-1 row-cols-md-3 g-3 mb-4 text-start">
      @php
        $features = [
          'Hands-on Projects',
          'Industry-Expert Trainers',
          'Flexible Learning Options',
          'Certification upon Completion',
          'Career Support & Guidance',
          'Access to Exclusive Resources',
          'Lifetime Alumni Network',
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
      <strong>Our Promise:</strong> 100% satisfaction or your money back within 30 days.
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
    #industrial-training {
      margin-top: 150px !important;
    }
  }
</style>

{{-- Structured Data for SEO --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Industrial Training at JM Innovatech Academy",
  "description": "Comprehensive industrial training programs in software development, cybersecurity, cloud computing, data science, and more.",
  "provider": {
    "@type": "Organization",
    "name": "JM Innovatech Academy",
    "sameAs": "https://jminnovatechsolution.co.ke"
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
