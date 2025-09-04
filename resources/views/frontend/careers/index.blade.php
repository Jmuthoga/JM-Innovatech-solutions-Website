@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas -->
<canvas id="page-bg"></canvas>

{{-- Intro Section --}}
<section class="w-100 text-white text-center position-relative"
         style="padding: 100px 20px; background: linear-gradient(270deg, #ff6f61, #6a11cb, #2575fc, #00c6ff);
                background-size: 400% 400%; animation: gradientShift 15s ease infinite; margin: 130px auto 60px;"> 

    <div class="container-fluid px-3">
        {{-- Animated Heading --}}
        <h1 id="animated-heading"
            class="display-5 fw-bold mb-4 animate__animated text-light">
            Explore Exciting Career Opportunities 🚀
        </h1>

        <p class="lead mx-auto" 
           style="max-width: 900px; color: #f1f1f1; font-size: 1.25rem; line-height: 1.7;">
            Join <strong>JM Innovatech Solutions</strong> and shape the future of technology. 
            Discover open roles, explore interview insights, and take the next step in your professional journey.
        </p>
    </div>
</section>

{{-- Animate.css --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

{{-- Gradient Background Animation --}}
<style>
    @keyframes gradientShift {
        0% {background-position: 0% 50%;}
        50% {background-position: 100% 50%;}
        100% {background-position: 0% 50%;}
    }

    #animated-heading {
        transition: color 1.5s ease-in-out;
    }

    .career-img-hover {
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease-in-out;
    }

    .career-img-hover:hover {
        transform: scale(1.1);
    }
    
    .career-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

    .career-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    
    .career-img-hover {
        transition: transform 0.4s ease;
    }
    
    .career-card:hover .career-img-hover {
        transform: scale(1.05);
    }

</style>

{{-- Auto cycle heading animations --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const heading = document.getElementById("animated-heading");
        const animations = [
            "animate__fadeInDown",
            "animate__zoomIn",
            "animate__bounce",
            "animate__lightSpeedInRight",
            "animate__jackInTheBox",
            "animate__rubberBand"
        ];
        const colors = ["#ffffff", "#ffeb3b", "#00e676", "#ff4081", "#ffd700"];

        let index = 0;
        setInterval(() => {
            heading.classList.remove(...animations);
            heading.classList.add("animate__animated", animations[index]);
            heading.style.color = colors[index];
            index = (index + 1) % animations.length;
        }, 3000);
    });
</script>

<div class="container my-5">
    <div class="row">
        {{-- Careers Grid --}}
        <div class="col-lg-8">
            <div class="row">
            @forelse($careers as $career)
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-lg border-0 rounded-3 overflow-hidden career-card">
                        
                        <!-- Career Poster -->
                        <a href="{{ route('careers.show',$career->slug) }}" class="d-block">
                            <img src="{{ asset($career->poster_path) }}" 
                                 class="card-img-top career-img-hover" 
                                 alt="{{ $career->title }}">
                        </a>
            
                        <!-- Card Body -->
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold mb-2 text-dark">{{ $career->title }}</h5>
            
                            <p class="text-muted small mb-3">
                                <i class="bi bi-calendar-event me-1 text-primary"></i> Uploaded: {{ $career->created_at->format('d M, Y') }} <br>
                                <i class="bi bi-clock me-1 text-primary"></i> Deadline: {{ $career->deadline }}
                            </p>
            
                            <!-- Status Badge -->
                            <span class="badge px-3 py-2 rounded-pill 
                                        {{ $career->status == 'Open' ? 'bg-success' : 'bg-danger' }}">
                                {{ $career->status }}
                            </span>
            
                            <!-- View Details Button -->
                            <div class="mt-auto text-center">
                                <a href="{{ route('careers.show',$career->slug) }}" 
                                   class="btn btn-outline-primary btn-sm mt-3 rounded-pill">
                                    View Details <i class="bi bi-arrow-right-circle ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                            <div class="col-12 text-center py-5">
                                <div class="p-5 bg-white rounded-4 shadow border" style="border-color: #0d6efd20;">
                                    <i class="bi bi-briefcase-fill" style="font-size: 3rem; color:#0d6efd;"></i>
                                    <h4 class="mt-3 fw-bold text-dark">No Open Career Opportunities</h4>
                                    <p class="text-muted mb-4">
                                        Thank you for your interest in joining <strong>JM Innovatech Solutions</strong>.<br>
                                        At the moment, we do not have any open positions.  
                                        Please check back soon for future opportunities.
                                    </p>
                                    <a href="{{ route('contact') }}" 
                                       class="btn rounded-pill px-4" 
                                       style="background-color:#0d6efd; color:white; border:none;">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-4 d-flex justify-content-center">
                {{ $careers->links() }}
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            {{-- Interview Questions --}}
            <div class="mb-4">
                <h4 class="mb-3">Frequently Asked Interview Questions</h4>
                @if($questions->count())
                    <ul class="list-group list-group-flush" style="max-height: 350px; overflow-y: auto;">
                        @foreach($questions as $q)
                            <li class="list-group-item">
                                <strong>{{ $q->career->title }}:</strong> 
                                {{ Str::limit($q->question, 80) }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="text-center py-4">
                        <i class="bi bi-chat-left-text text-secondary" style="font-size: 2rem;"></i>
                        <p class="text-muted mt-2">No interview questions have been uploaded yet.</p>
                    </div>

                @endif
            </div>
        </div>
    </div>
</div>

<!-- Background Canvas CSS -->
<style>
  #page-bg {
      position: fixed;
      inset: 0;
      width: 100vw;
      height: 100vh;
      z-index: -1;
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

