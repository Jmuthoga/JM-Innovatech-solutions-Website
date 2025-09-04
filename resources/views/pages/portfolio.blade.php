@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas -->
<canvas id="page-bg"></canvas>

<style>
  body {
    font-family: 'Inter', sans-serif;
  }

  h2.section-title {
    font-weight: 700;
    font-size: 2.2rem;
    color: #0d1b2a;
  }

  p.section-subtitle {
    color: #6c757d;
    max-width: 700px;
    margin: 0 auto 40px;
    font-size: 1.1rem;
  }

  /* === CATEGORY BUTTONS === */
  .category-list {
    list-style: none;
    padding: 0;
    margin: 20px 0 40px;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
  }
  .category-btn {
    padding: 10px 20px;
    border-radius: 30px;
    background-color: #f8f9fa;
    color: #333;
    font-weight: 500;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
  }
  .category-btn:hover,
  .category-btn.active {
    background-color: #0d6efd;
    color: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  /* === PORTFOLIO CARDS === */
  .portfolio-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 30px;
  }
  .portfolio-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
  }
  .portfolio-card img {
    width: 100%;
    height: 320px; /* consistent image height */
    object-fit: cover;
  }
  .portfolio-card-body {
    padding: 20px;
    text-align: center;
  }
  .portfolio-card-body h5 {
    font-size: 1.15rem;
    font-weight: 600;
    color: #0d1b2a;
  }
  .portfolio-card-body p {
    font-size: 0.95rem;
    color: #6c757d;
    margin: 10px 0 15px;
  }
  .portfolio-card-body a {
    display: inline-block;
    background: #0d6efd;
    color: #fff;
    font-weight: 500;
    padding: 8px 18px;
    border-radius: 30px;
    text-decoration: none;
    transition: all 0.3s;
  }
  .portfolio-card-body a:hover {
    background: #0b5ed7;
  }

  /* === BACKGROUND CANVAS === */
  #page-bg {
    position: fixed;
    inset: 0;
    z-index: -1;
    background: #fdfdfd;
    pointer-events: none;
  }

/* === HEADING BACKGROUND IMAGE === */
.portfolio-heading-bg {
  position: relative;
  background-image: url('{{ asset('assets/img/slide6.avif') }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 100px 0;
  text-align: center;
}

.portfolio-heading-bg .overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.55); /* Dark overlay */
}

.portfolio-heading-bg h2,
.portfolio-heading-bg p {
  color: #fff;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
  position: relative; /* keeps text above overlay */
  z-index: 2;
}


 .category-list {
    list-style: none;
    padding: 0;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px; /* equal spacing */
  }

  .category-list li {
    display: flex;
  }

  .category-btn {
    padding: 10px 20px;
    border: 1px solid #007bff;
    border-radius: 25px;
    text-decoration: none;
    color: #007bff;
    font-size: 15px;
    font-weight: 500;
    transition: all 0.3s ease;
    background-color: #fff;
  }

  .category-btn:hover,
  .category-btn.active {
    background-color: #007bff;
    color: #fff;
  }

  /* Mobile adjustments */
  @media (max-width: 768px) {
    .category-list {
      gap: 10px;
    }
    .category-btn {
      padding: 8px 16px;
      font-size: 14px;
    }
  }
</style>

<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs"  style=" margin: 150px auto 0px; padding: 0 20px;">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center" style="margin-top: 50px;">
      <h2>Portfolio</h2>
      <ol>
        <li><a href="{{route('main.home')}}">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- Heading with Background Image -->
<section id="portfolio-heading" class="portfolio-heading">
  <div class="portfolio-heading-bg">
    <div class="overlay"></div> <!-- Dark overlay -->
    <div class="container position-relative" data-aos="fade-up">
      <h2 class="section-title">Our Portfolio in Kenya and Beyond</h2>
      <p class="section-subtitle">
        We help <strong>Kenyan businesses</strong> and international brands grow with smart, creative, and reliable solutions.  
        Our projects show the <strong>quality</strong> and <strong>trust</strong> we bring to every client.
      </p>
    </div>
  </div>
</section>



<!-- Portfolio Categories -->
<div class="container">
  <ul class="category-list" data-aos="fade-up">
    <li>
      <a href="{{ route('portfolio') }}" 
         class="category-btn {{ request()->is('portfolio') ? 'active' : '' }}">
        All
      </a>
    </li>
    @foreach ($categories as $cat)
    <li>
      <a href="{{ route('portfolio.category', urlencode($cat)) }}" 
         class="category-btn {{ request()->is('portfolio/category/'.urlencode($cat)) ? 'active' : '' }}">
        {{ $cat }}
      </a>
    </li>
    @endforeach
  </ul>
</div>

<!-- Portfolio Projects -->
<section class="py-4">
  <div class="container">
    <div class="row" data-aos="fade-up">
      @forelse ($images as $img)
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <img src="{{ asset($img->image) }}" alt="Portfolio Project">
          <div class="portfolio-card-body">
            @if(!empty($img->description))
              <h5>{{ Str::limit($img->description, 50) }}</h5>
            @endif
            @if(!empty($img->link))
              @php
                $link = $img->link;
                if (!Str::startsWith($link, ['http://', 'https://'])) {
                    $link = '//' . ltrim($link, '/');
                }
              @endphp
              <a href="{{ $link }}" target="_blank">Explore More</a>
            @endif
          </div>
        </div>
      </div>
      @empty
      <div class="col-12 text-center">
        <p>No projects found in this category.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>

<!-- Background Canvas JS (particles) -->
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
      constructor(x, y, dx, dy, size, color) {
        this.x = x; this.y = y;
        this.dx = dx; this.dy = dy;
        this.size = size; this.color = color;
      }
      draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI*2);
        ctx.fillStyle = this.color;
        ctx.fill();
      }
      update() {
        if (this.x + this.size > canvas.width || this.x - this.size < 0) this.dx = -this.dx;
        if (this.y + this.size > canvas.height || this.y - this.size < 0) this.dy = -this.dy;
        this.x += this.dx; this.y += this.dy;
        this.draw();
      }
    }

    function connect() {
      for (let a = 0; a < particlesArray.length; a++) {
        for (let b = a; b < particlesArray.length; b++) {
          let dx = particlesArray[a].x - particlesArray[b].x;
          let dy = particlesArray[a].y - particlesArray[b].y;
          let distance = dx*dx + dy*dy;
          if (distance < (canvas.width/8) * (canvas.height/8)) {
            ctx.beginPath();
            ctx.strokeStyle = 'rgba(13,110,253,0.15)';
            ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
            ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
            ctx.stroke();
          }
        }
      }
    }

    function init() {
      particlesArray = [];
      let num = (canvas.width * canvas.height) / 16000;
      for (let i = 0; i < num; i++) {
        let size = (Math.random() * 2) + 2;
        let x = Math.random() * canvas.width;
        let y = Math.random() * canvas.height;
        let dx = (Math.random() - 0.5);
        let dy = (Math.random() - 0.5);
        let colors = ['#0d6efd','#6610f2','#198754','#dc3545'];
        let color = colors[Math.floor(Math.random()*colors.length)];
        particlesArray.push(new Particle(x, y, dx, dy, size, color));
      }
    }

    function animate() {
      requestAnimationFrame(animate);
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      particlesArray.forEach(p => p.update());
      connect();
    }

    init();
    animate();
  });
</script>

@endsection

