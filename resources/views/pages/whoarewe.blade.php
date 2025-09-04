@extends('layouts.master_home')

@section('home_content')
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- 🔹 Full Page Background Canvas -->
<canvas id="page-bg"></canvas>

<style>
/* ✅ Background Canvas Always Behind */
#page-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: -1;
    background: #ffffff;
    pointer-events: none;
}

/* ✅ Foreground Wrapper (responsive fix) */
.page-layer {
    margin: 0 auto 60px;
    padding: 220px 20px 0 20px; /* desktop default */
}

@media (max-width: 992px) { /* tablets */
    .page-layer { padding: 150px 15px 0 15px; }
}
@media (max-width: 768px) { /* mobile landscape */
    .page-layer { padding: 100px 15px 0 15px; }
}
@media (max-width: 576px) { /* mobile portrait */
    .page-layer { padding: 60px 10px 0 10px; }
}

.brushed-edges {
    display: block;
    max-width: 100%;
    height: auto;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);

    /* Mask with rectangular feather edges */
    -webkit-mask-image: 
      linear-gradient(to right, transparent 0px, black 30px, black calc(100% - 30px), transparent 100%),
      linear-gradient(to bottom, transparent 0px, black 30px, black calc(100% - 30px), transparent 100%);
    -webkit-mask-composite: destination-in;
    -webkit-mask-repeat: no-repeat;

    mask-image: 
      linear-gradient(to right, transparent 0px, black 30px, black calc(100% - 30px), transparent 100%),
      linear-gradient(to bottom, transparent 0px, black 30px, black calc(100% - 30px), transparent 100%);
    mask-composite: intersect;
    mask-repeat: no-repeat;

    background-color: white; /* ensures fade blends into white */
}



/* Sections styling */
.section-title {
    font-weight: 700;
    font-size: 2rem;
    margin-bottom: 1rem;
    position: relative;
    display: inline-block;
}
.section-title::after {
    content: "";
    width: 60px;
    height: 3px;
    background: #0d6efd;
    position: absolute;
    bottom: -8px;
    left: 0;
}
.highlight-box {
    background: #f8f9fa;
    border-left: 5px solid #0d6efd;
    padding: 1.5rem;
    border-radius: 8px;
}
.ceo-img-rect {
    width: 240px;   
    height: 400px;  
    object-fit: cover;
    border-radius: 1rem; /* slight rounding */
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);

    /* Mask for top, bottom, left, and right edges */
    -webkit-mask-image: 
      linear-gradient(to bottom, transparent 0px, black 30px, black calc(100% - 30px), transparent 100%),
      linear-gradient(to right, transparent 0px, black 15px, black calc(100% - 10px), transparent 100%);
    -webkit-mask-repeat: no-repeat;
    -webkit-mask-composite: destination-in;

    mask-image: 
      linear-gradient(to bottom, transparent 0px, black 30px, black calc(100% - 30px), transparent 100%),
      linear-gradient(to right, transparent 0px, black 15px, black calc(100% - 10px), transparent 100%);
    mask-repeat: no-repeat;
    mask-composite: intersect;

    background-color: white; /* fade edges into white */
}



.ceo-section {
    background: #f8f9fa;
    border-radius: 12px;
}

/* Call To Action Styling */
.cta-section {
    background: rgba(255,255,255,0.9);
    border-radius: 10px;
    padding: 80px 20px;
    max-width: 1100px;
    margin: 80px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    position: relative;
}
.animated-btn {
    border-radius: 6px;
    font-weight: 600;
    animation: pulse 2s infinite;
}
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}
</style>

<!-- 🔹 Foreground Content -->
<div class="page-layer container">

    <!-- Hero -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-6" data-aos="fade-right">
            <h1 class="fw-bold display-5">Who Are We?</h1>
            <p class="fs-5 text-muted">
                JM Innovatech Solutions is a software development company delivering 
                world-class IT services – reliable, scalable, and cost-effective. 
                Since 2023, we have been a trusted partner for businesses seeking 
                to transform operations through technology.
            </p>
            <a href="{{route('contact')}}" 
               class="btn btn-primary btn-lg rounded-pill px-4" 
               data-aos="zoom-in" data-aos-delay="300">
                Get in Touch
            </a>
        </div>
        <div class="col-lg-6 text-center" data-aos="fade-left">
            <img src="{{ asset('assets/img/who.jpg') }}" 
                 alt="About JM Innovatech" 
                 class="img-fluid brushed-edges">
        </div>

    </div>

    <!-- About Company -->
    <div class="about-section mb-5" data-aos="fade-up">
        <h2 class="section-title">About Company</h2>
        <p class="fs-5">
            Our company was founded with one clear vision – to provide 
            advanced software and digital solutions that simplify and strengthen 
            business operations. Our portfolio spans solutions for database migration, 
            marketing systems, and e-commerce platforms, each designed to meet unique 
            client needs with precision and quality.
        </p>
        <div class="highlight-box mt-4" data-aos="zoom-in" data-aos-delay="200">
            <p class="fs-5 mb-0">
                Every solution is professionally designed, rigorously tested, and 
                implemented with a focus on long-term value. We deliver systems that 
                combine flexibility, intuitive design, and powerful technology.
            </p>
        </div>
<!-- ✅ Ultra-Professional Download Company Profile Button -->
        <div class="mt-5 text-center" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ asset('frontend/assets/img/JM%20Innovatech%20Solutions%20Profile.pdf') }}" download
               class="btn professional-download-btn d-inline-flex align-items-center px-5 py-3 fw-semibold">
                <i class="bi bi-download me-3 fs-5"></i>
                Download Company Profile
            </a>
        </div>
        
        <!-- Professional Button Styles -->
        <style>
        .professional-download-btn {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
            border-radius: 50px;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 8px 25px rgba(13, 110, 253, 0.3);
            transition: all 0.4s ease;
        }
        
        .professional-download-btn i {
            transition: transform 0.3s ease;
        }
        
        .professional-download-btn:hover {
            background: linear-gradient(135deg, #6610f2, #0d6efd);
            box-shadow: 0 12px 30px rgba(13, 110, 253, 0.5);
            transform: translateY(-3px);
        }
        
        .professional-download-btn:hover i {
            transform: rotate(20deg) scale(1.2);
        }
        </style>


    </div>

    <!-- Mission -->
    <div class="mission-section row align-items-center mb-5">
        <div class="col-lg-6 text-center mb-4 mb-lg-0" data-aos="fade-right">
           <img src="{{ asset('assets/img/misson.avif') }}" 
             alt="Our Mission" 
             class="img-fluid rounded-3 shadow brushed-edges">
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <h2 class="section-title">Our Mission</h2>
            <p class="fs-5">
                Our mission is to build lasting partnerships with clients by offering 
                efficient, cost-saving outsourcing solutions. We empower businesses to 
                embrace technology without losing focus on their core objectives – 
                achieving growth while staying within budget.
            </p>
        </div>
    </div>

    <!-- Core Values -->
    <div class="mb-5" data-aos="fade-up">
        <h2 class="section-title text-center">Our Core Values</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <p class="fs-5">
                    At JM Innovatech Solutions, excellence is our standard.  
                    We emphasize flexibility, client-focused innovation, and 
                    dependable solutions tailored to business realities.
                </p>
                <p class="fs-5">
                    Our products digitalize processes, simplify workflows, 
                    and unlock sustainable performance improvements across industries.
                </p>
            </div>
            <div class="col-md-6">
                <div class="highlight-box">
                    <p class="fs-5 mb-0">
                        Each project reflects our core principles – transparency, 
                        reliability, and innovation. We don’t just build software, 
                        we build trust, measurable results, and long-term success.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CEO Section (with speech effect) -->
    <div class="ceo-section row align-items-center p-5 mb-5" data-aos="fade-up">
        <div class="col-lg-7 text-lg-start text-center mb-4 mb-lg-0">
            <h2 class="section-title">Message from Our CEO & Founder</h2>
            <blockquote class="blockquote fs-5 fst-italic ceo-speech">
                JM Innovatech was built on the belief that technology should 
                empower people – not complicate their lives. We listen, innovate, 
                and deliver solutions that strengthen businesses in today’s 
                competitive, fast-changing world.
            </blockquote>
            <p class="fs-5 mt-3">
                Our team is committed to more than writing code – we deliver 
                growth, trust, and excellence in every partnership. Choosing 
                JM Innovatech means choosing a dedicated ally invested in 
                your success.
            </p>
            <footer class="blockquote-footer fs-5 mt-3">
                <strong>John Muthoga Kanyingi</strong><br>
                CEO & Founder – JM Innovatech Solutions
            </footer>
        </div>
        <div class="col-lg-5 text-center" data-aos="zoom-in">
            <img src="{{ asset('assets/img/johnm.png') }}" alt="CEO & Founder" class="ceo-img-rect">
        </div>
    </div>
    
    <!-- CSS for CEO Speech Bubble -->
    <style>
    .ceo-speech {
        position: relative;
        background: #f0f4ff;
        border-left: 5px solid #0d6efd;
        border-radius: 15px;
        padding: 1.5rem 2rem;
        font-style: italic;
        quotes: "“" "”" "‘" "’";
    }
    
    .ceo-speech::before {
        content: open-quote;
        font-size: 3rem;
        color: #0d6efd;
        position: absolute;
        top: -10px;
        left: 15px;
    }
    
    .ceo-speech::after {
        content: close-quote;
        font-size: 3rem;
        color: #0d6efd;
        position: absolute;
        bottom: -10px;
        right: 15px;
    }
    </style>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section" aria-label="Google Reviews">
        
  <!-- Elfsight Widget for johnmuthogakanyingi@gmail.com -->
<!--  <div class="container" data-aos="fade-up" data-aos-delay="100">-->
<!--    <script src="https://elfsightcdn.com/platform.js" async></script>-->
<!--    <div class="elfsight-app-b2c1b872-0896-4b02-af6c-a42db516115d" data-elfsight-app-lazy></div>-->
<!--  </div>-->
<!--</section>-->

<!-- Elfsight Google Reviews for jkanyingi572@gmail.com -->
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-bf1323d4-6c52-466b-b4b6-e341db3c22fb" data-elfsight-app-lazy></div>



    <!-- Call to Action -->
    <div class="cta-section text-center mt-5 position-relative overflow-hidden" data-aos="fade-up">
        <div class="cta-content position-relative">
            <h2 class="fw-bold mb-3" data-aos="fade-down" data-aos-delay="100">
                Let’s Build the Future Together
            </h2>
            <p class="fs-5 mb-4" data-aos="fade-up" data-aos-delay="300">
                Partner with <strong>JM Innovatech Solutions</strong> – where innovation meets reliability.  
                Together, we can transform your business with scalable, modern, and results-driven solutions.
            </p>
            <a href="{{route('contact')}}" 
               class="btn btn-primary btn-lg px-5 shadow-sm animated-btn" 
               data-aos="zoom-in" data-aos-delay="600">
               Partner With Us Today
            </a>
        </div>
    </div>

</div>

<!-- 🔹 Animated Canvas Script -->
<script>
const canvas = document.getElementById('page-bg');
const ctx = canvas.getContext('2d');
let particlesArray;

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resizeCanvas();

window.addEventListener('resize', () => {
    resizeCanvas();
    init();
});

class Particle {
    constructor(x, y, directionX, directionY, size, color) {
        this.x = x;
        this.y = y;
        this.directionX = directionX;
        this.directionY = directionY;
        this.size = size;
        this.color = color;
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
        let color = ['#0d6efd', '#6610f2', '#198754', '#dc3545'][Math.floor(Math.random()*4)];
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
</script>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
    duration: 1000,
    once: true,
});
</script>
@endsection
