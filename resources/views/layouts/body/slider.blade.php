<!-- @php
$sliders = DB::table('sliders')->get();

@endphp



<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

      @foreach ($sliders as $key => $slider)
      <div class="carousel-item {{$key == 0 ? 'active' : ''}}" style="background-image: url({{asset($slider->image)}});">
        <div class="carousel-container">
          <div class="carousel-content animate__animated animate__fadeInUp">
            <h2>{{$slider->title}}</h2>
            <p>{{$slider->dec}}</p>
            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
          </div>
        </div>
      </div>
      @endforeach -->
<!-- Slide 1 -->


<!-- 
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

  </div>
</section> -->

<section id="hero" class="position-relative">

  <!-- ✅ Background canvas goes here inside hero -->
  <canvas id="page-bg"></canvas>

  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url('{{ asset('assets/img/slide.avif') }}');">
        <div class="carousel-container d-flex align-items-center justify-content-center">
          <div class="carousel-content text-center text-white animate__animated animate__fadeInUp">
            <h2 class="display-4 font-weight-bold">Welcome to JM Innovatech Solutions</h2>
            <p class="lead mt-3">We specialize in delivering cutting-edge
              software solutions tailored to meet your unique needs. Our expertise
              spans custom software development, web and mobile app development,
              cloud solutions, data analytics, and IT consulting.</p>
            <a href="#" class="btn btn-primary btn-lg mt-4">Explore Our Services</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide2.webp') }}');">
        <div class="carousel-container d-flex align-items-center justify-content-center">
          <div class="carousel-content text-center text-white animate__animated animate__fadeInUp">
            <h2 class="display-4 font-weight-bold">Empowering Ambitious Brands</h2>
            <p class="lead mt-3">We specialize in designing scalable, innovative, and tailored digital solutions that empower brands to reach their full potential. Our team combines creativity, technology, and strategy to deliver exceptional web development, branding, and digital experiences that drive growth, enhance engagement, and maximize success.</p>
            <a href="#" class="btn btn-primary btn-lg mt-4">View Our Work</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide3.avif') }}');">
        <div class="carousel-container d-flex align-items-center justify-content-center">
          <div class="carousel-content text-center text-white animate__animated animate__fadeInUp">
            <h2 class="display-4 font-weight-bold">Digital Strategies That Deliver</h2>
            <p class="lead mt-3">Our team excels at crafting strategies that deliver measurable results. By combining data-driven insights with creative innovation, we help brands grow their online presence, increase engagement, and build lasting connections with their audience, ensuring long-term success and sustained business growth.</p>
            <a href="#" class="btn btn-primary btn-lg mt-4">Get Started Today</a>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide4.avif') }}');">
        <div class="carousel-container d-flex align-items-center justify-content-center">
          <div class="carousel-content text-center text-white animate__animated animate__fadeInUp">
            <h2 class="display-4 font-weight-bold">Transforming Ideas into Digital Realities</h2>
            <p class="lead mt-3">Specializing in turning ideas into fully realized digital solutions, we focus on web design and custom software development. Every project is carefully crafted to align perfectly with business goals, helping you make a strong impact in the digital world.</p>
            <a href="#" class="btn btn-primary btn-lg mt-4">Our Process</a>
          </div>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide5.avif') }}');">
        <div class="carousel-container d-flex align-items-center justify-content-center">
          <div class="carousel-content text-center text-white animate__animated animate__fadeInUp">
            <h2 class="display-4 font-weight-bold">Seamless User Experiences</h2>
            <p class="lead mt-3">We believe a seamless user experience is the foundation of every successful product. Our team creates intuitive and easy-to-navigate interfaces that enhance user engagement and satisfaction, ensuring each interaction is smooth and the product is a pleasure to use.</p>
            <a href="#" class="btn btn-primary btn-lg mt-4">See Our Work</a>
          </div>
        </div>
      </div>

      <!-- Slide 6 -->
      <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide6.avif') }}');">
        <div class="carousel-container d-flex align-items-center justify-content-center">
          <div class="carousel-content text-center text-white animate__animated animate__fadeInUp">
            <h2 class="display-4 font-weight-bold">Innovating for the Future</h2>
            <p class="lead mt-3">Our focus is on future-proofing your brand with digital solutions that are scalable and adaptable. By integrating the latest technologies and strategies, we ensure your business remains competitive and ahead in an ever-changing digital landscape.</p>
            <a href="#" class="btn btn-primary btn-lg mt-4">Let's Collaborate</a>
          </div>
        </div>
      </div>

    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <!-- Indicators -->
    <ol class="carousel-indicators" id="hero-carousel-indicators">
      <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#heroCarousel" data-slide-to="1"></li>
      <li data-target="#heroCarousel" data-slide-to="2"></li>
      <li data-target="#heroCarousel" data-slide-to="3"></li>
      <li data-target="#heroCarousel" data-slide-to="4"></li>
      <li data-target="#heroCarousel" data-slide-to="5"></li>
    </ol>
  </div>
</section>


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