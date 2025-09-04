@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- Hero Section --}}
<section class="w-100 text-white text-center position-relative"
         style="padding: 100px 20px; background: linear-gradient(270deg, #0d6efd, #6610f2, #198754, #dc3545);
                background-size: 400% 400%; animation: gradientShift 15s ease infinite; margin: 130px auto 60px;"> 

    <div class="container-fluid px-3">
        <h1 id="animated-heading"
            class="fs-2 fw-bold mb-4 animate__animated text-light">
            {{ $career->title }}
        </h1>
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

    .career-title {
        font-size: 1.8rem;
        line-height: 1.3;
        margin-bottom: 1rem;
        color: #222;
    }

    /* Limit poster image size */
    .career-poster {
        max-height: 280px;
        max-width: 100%;
        object-fit: contain;
        margin: 0;         
        display: inline;   
    }

    /* Interview questions styling */
    .accordion-button {
        font-size: 0.95rem;
        font-weight: 600;
    }

    .accordion-body {
        font-size: 0.9rem;
        line-height: 1.6;
        color: #444;
    }

    /* Apply button styling */
    .apply-btn {
        display: inline-block;
        padding: 14px 35px;
        font-size: 1.1rem;
        font-weight: bold;
        color: #fff;
        background: linear-gradient(90deg, #0d6efd, #6610f2);
        border: none;
        border-radius: 50px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
    }

    .apply-btn:hover {
        background: linear-gradient(90deg, #6610f2, #0d6efd);
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.3);
    }

    .apply-btn:active {
        transform: scale(0.97);
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        #animated-heading {
            font-size: 1.6rem;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const heading = document.getElementById("animated-heading");
        const animations = [
            "animate__fadeInDown",
            "animate__zoomIn",
            "animate__lightSpeedInRight",
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
        {{-- Main Career Content --}}
        <div class="col-lg-8">
            <div class="card mb-4 shadow-sm border-0">
                @if($career->poster_path)
                    <div class="overflow-hidden text-start p-3">
                        <img src="{{ asset($career->poster_path) }}" 
                             alt="{{ $career->title }}" 
                             class="career-poster rounded shadow-sm">
                    </div>
                @endif

                <div class="card-body">
                    <h2 class="career-title fw-bold">{{ $career->title }}</h2>

                    <p class="text-muted mb-3">
                        📅 Uploaded: <strong>{{ $career->upload_date }}</strong> 
                        | ⏳ Deadline: <strong>{{ $career->deadline }}</strong>
                    </p>

                    {{-- Bigger status badge --}}
                    <span class="badge px-3 py-2 fs-6 {{ $career->status=='Open' ? 'bg-success' : 'bg-danger' }}">
                        {{ $career->status }}
                    </span>

                    <div class="mt-4" style="line-height:1.7; font-size:1.05rem; color:#333;">
                        {!! $career->description !!}
                    </div>

                    <h4 class="mt-4">Responsibilities & Requirements</h4>
                    <p>{!! $career->responsibilities !!}</p>

                    <h4 class="mt-4">Application Instructions</h4>
                    <p>{!! $career->instructions !!}</p>

                    {{-- Apply button --}}
                    @if($career->status == 'Open')
                        <div class="text-center mt-5">
                            <a href="" class="apply-btn animate__animated animate__pulse animate__infinite">
                                 Apply Now
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Sidebar: Interview Questions --}}
        <div class="col-lg-4">
            <h4 class="mb-3 fw-bold text-dark animate__animated animate__fadeInDown">
                <i class="bi bi-question-circle-fill me-2 text-primary"></i> Frequently Asked Interview Questions
            </h4>
            @if($career->interviewQuestions->count())
                <div class="accordion shadow-sm rounded" id="interviewQuestionsAccordion">
                    @foreach($career->interviewQuestions as $index => $q)
                        <div class="accordion-item border mb-2 rounded animate__animated animate__fadeInUp animate__delay-{{ $index }}s">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button collapsed fw-semibold text-dark d-flex justify-content-between align-items-center" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapse{{ $index }}" 
                                        aria-expanded="false" 
                                        aria-controls="collapse{{ $index }}">
                                    <div>
                                        <span class="badge bg-primary me-2">Q{{ $index + 1 }}</span> 
                                        {{ $q->question }}
                                    </div>
                                    <i class="bi bi-eye-slash toggle-icon fs-5 ms-2 text-secondary"></i>
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse" 
                                aria-labelledby="heading{{ $index }}" 
                                data-bs-parent="#interviewQuestionsAccordion">
                                <div class="accordion-body bg-light rounded shadow-sm animate__animated animate__fadeIn">
                                    <strong class="text-primary">Answer:</strong>  
                                    <p class="mt-2 mb-0 text-secondary" style="font-size: 0.95rem; line-height: 1.6;">
                                        {{ $q->answer }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-4">
                    <i class="bi bi-chat-left-text text-muted" style="font-size: 2rem;"></i>
                    <p class="text-muted mt-2">No interview questions have been uploaded yet.</p>
                </div>
            @endif
        </div>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const accordions = document.querySelectorAll("#interviewQuestionsAccordion .accordion-button");
        
                accordions.forEach(button => {
                    button.addEventListener("click", function () {
                        const icon = this.querySelector(".toggle-icon");
                        setTimeout(() => {
                            if (this.classList.contains("collapsed")) {
                                icon.classList.remove("bi-eye", "text-primary");
                                icon.classList.add("bi-eye-slash", "text-secondary");
                            } else {
                                icon.classList.remove("bi-eye-slash", "text-secondary");
                                icon.classList.add("bi-eye", "text-primary");
                            }
                        }, 200);
                    });
                });
            });
        </script>
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

