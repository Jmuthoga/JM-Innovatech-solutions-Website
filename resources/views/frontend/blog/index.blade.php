@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        {{-- Blog Intro Full Width --}}
        <section class="w-100 text-white text-center position-relative"
                 style="padding: 100px 20px; background: linear-gradient(270deg, #ff6f61, #6a11cb, #2575fc, #00c6ff);
                        background-size: 400% 400%; animation: gradientShift 15s ease infinite; margin: 130px auto 60px;"> 
        
            <div class="container-fluid px-3">
                {{-- Animated Heading --}}
                <h1 id="animated-heading"
                    class="display-3 fw-bold mb-4 animate__animated text-light">
                    Welcome to Our Tech Blog & News🚀
                </h1>
        
                {{-- SEO Friendly Paragraph --}}
                <p class="lead mx-auto" 
                   style="max-width: 900px; color: #f1f1f1; font-size: 1.25rem; line-height: 1.7;">
                    Discover <strong>Kenya’s latest technology trends</strong>, software innovations, 
                    digital transformation, and business solutions. Explore expert tutorials, videos, 
                    tech adverts, and industry insights that empower developers, entrepreneurs, and 
                    enterprises in the fast-growing <strong>Kenyan tech ecosystem</strong>.
        
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
        
            /* Responsiveness */
            @media (max-width: 768px) {
                #animated-heading {
                    font-size: 2.2rem;
                }
                section p {
                    font-size: 1rem;
                }
            }
        </style>
        
        {{-- Auto cycle heading animations & color changes --}}
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
        
        
        {{-- Animate.css --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
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
                let index = 0;
        
                setInterval(() => {
                    heading.classList.remove(...animations);
                    heading.classList.add("animate__animated", animations[index]);
                    index = (index + 1) % animations.length;
                }, 3000);
            });
        </script>


    <div class="container my-5">
        <div class="row">
        
        {{-- Main Blog Posts Grid --}}
        <div class="col-lg-8">
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-md-6 mb-4"> {{-- Two per row --}}
                        <div class="card h-100 shadow-sm overflow-hidden">
                            @if($post->image)
                                <a href="{{ route('blog.show', $post->slug) }}" class="d-block overflow-hidden">
                                    <img src="{{ asset($post->image) }}" 
                                         class="card-img-top blog-img-hover" 
                                         alt="{{ $post->title }}">
                                </a>
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text flex-grow-1">
                                    {{ \Illuminate\Support\Str::words(strip_tags(($post->excerpt ?: $post->content) ?? ''), 15, '......') }}
                                </p>
                                 
                                {{-- Author + Date + Views --}}
                                <p class="text-muted mb-2 d-flex align-items-center justify-content-between small">
                                    <span>
                                        <i class="bi bi-person"></i> {{ $post->author ?? 'JM Innovatech Solution' }}
                                        &nbsp; | &nbsp;
                                        <i class="bi bi-calendar"></i> {{ $post->created_at->format('d M, Y') }}
                                        &nbsp; | &nbsp;
                                        <i class="bi bi-eye"></i> {{ $post->views }} views
                                    </span>
                                </p>


                            <div class="text-center mt-auto">
                                <a href="{{ route('blog.show', $post->slug) }}" 
                                   class="text-primary fw-semibold" 
                                   style="text-decoration:none;">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">No blog found.</p>
                @endforelse
            </div>
        
            {{-- Pagination --}}
            <div class="mt-4 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
        
        {{-- Extra CSS --}}
        <style>
            .blog-img-hover {
                height: 250px;
                object-fit: cover;
                transition: transform 0.4s ease-in-out;
            }
        
            .blog-img-hover:hover {
                transform: scale(1.1); /* Zoom in */
            }
        </style>



        {{-- Sidebar --}}
        <div class="col-lg-4">

            {{-- Recent Posts --}}
            <div class="mb-4">
                <h4 class="mb-3">Recent Posts</h4>
                @if($trendingPosts->count())
                    <div style="max-height: 350px; overflow-y: auto; border: 1px solid #e0e0e0; border-radius: 5px;">
                        <ul class="list-group list-group-flush">
                            @foreach($trendingPosts as $trend)
                                <li class="list-group-item">
                                   <a href="{{ route('blog.show', $trend) }}" class="text-decoration-none">
                                        {{ Str::limit($trend->title, 60) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p class="text-muted">No trending posts.</p>
                @endif
            </div>


            {{-- Adverts --}}
            <div class="mb-4">
                <h4 class="mb-3">Adverts</h4>
                <p class="text-muted small mb-3">
                    Showcase your products and services to a targeted audience through our platform. 
                    <a href="{{ route('contact') }}" class="text-primary fw-semibold">Advertise with Us</a>.
                </p>
                @if($adverts->count())
                    <div id="advertCarouselSingle" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        
                        {{-- Indicators --}}
                        <div class="carousel-indicators">
                            @foreach($adverts as $key => $advert)
                                <button type="button" 
                                        data-bs-target="#advertCarouselSingle" 
                                        data-bs-slide-to="{{ $key }}" 
                                        class="{{ $key == 0 ? 'active' : '' }}" 
                                        aria-current="{{ $key == 0 ? 'true' : 'false' }}"></button>
                            @endforeach
                        </div>
            
                        {{-- Slides --}}
                        <div class="carousel-inner">
                            @foreach($adverts as $key => $advert)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('uploads/adverts/'.$advert->image) }}" 
                                         class="d-block w-100 rounded shadow" 
                                         alt="{{ $advert->title }}" 
                                         style="height:450px; object-fit:cover;">
                                    <!--<div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">-->
                                    <!--    <h6 class="text-white">{{ Str::limit($advert->title, 60) }}</h6>-->
                                    <!--</div>-->
                                </div>
                            @endforeach
                        </div>
            
                            {{-- Controls --}}
                            <button class="carousel-control-prev custom-btn d-none" type="button" data-bs-target="#advertCarouselSingle" data-bs-slide="prev">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="carousel-control-next custom-btn d-none" type="button" data-bs-target="#advertCarouselSingle" data-bs-slide="next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                            <style>
                                #advertCarouselSingle {
                                    position: relative;
                                }
                            
                                /* Default hidden */
                                #advertCarouselSingle .custom-btn {
                                    position: absolute;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    background: rgba(0,0,0,0.5);
                                    border: none;
                                    border-radius: 50%;
                                    width: 50px;
                                    height: 50px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    color: #fff;
                                    font-size: 1.5rem;
                                    transition: all 0.3s ease-in-out;
                                    opacity: 0;
                                    pointer-events: none;
                                }
                            
                                /* Show only on hover */
                                #advertCarouselSingle:hover .custom-btn {
                                    opacity: 1;
                                    pointer-events: auto;
                                }
                            
                                /* Left and Right buttons */
                                #advertCarouselSingle .carousel-control-prev {
                                    left: 20px;
                                }
                                #advertCarouselSingle .carousel-control-next {
                                    right: 20px;
                                }
                            
                                #advertCarouselSingle .custom-btn:hover {
                                    background: rgba(0,0,0,0.8);
                                    transform: translateY(-50%) scale(1.1);
                                }
                            </style>
            
                    </div>
                @else
                    <p class="text-muted">No adverts found.</p>
                @endif
            </div>



            {{-- Videos --}}
            <div class="mb-4">
                <h4 class="mb-3">Tech Talks That Inspire</h4>
            
                @if($videos->count())
                    {{-- Main Player --}}
                    <div class="mb-4 w-100">
                        <div class="ratio ratio-16x9 w-100">
                            <div id="video-player" class="w-100 h-100"></div>
                        </div>
                    </div>
            
                    {{-- Playlist Thumbnails --}}
                    <div class="row g-3">
                        @foreach($videos as $video)
                            @php
                                preg_match("/(?:v=|\/)([0-9A-Za-z_-]{11}).*/", $video->youtube_link, $matches);
                                $videoId = $matches[1] ?? '';
                            @endphp
                            @if($videoId)
                                <div class="col-md-4">
                                    <div class="video-thumb card h-100" data-video="{{ $videoId }}">
                                        <img src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg" 
                                             class="card-img-top" alt="Video thumbnail">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @else
                    <p class="text-muted">No videos found.</p>
                @endif
            </div>
            
            <script>
                // Collect video IDs
                const videoIds = [
                    @foreach($videos as $video)
                        @php
                            preg_match("/(?:v=|\/)([0-9A-Za-z_-]{11}).*/", $video->youtube_link, $matches);
                            $videoId = $matches[1] ?? '';
                        @endphp
                        "{{ $videoId }}",
                    @endforeach
                ];
            
                let currentIndex = 0;
                let player;
            
                // Load YouTube API
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            
                // Init Player
                function onYouTubeIframeAPIReady() {
                    player = new YT.Player('video-player', {
                        videoId: videoIds[currentIndex],
                        playerVars: {
                            autoplay: 1,
                            controls: 1,
                            mute: 0
                        },
                        events: {
                            'onStateChange': onPlayerStateChange
                        }
                    });
                    highlightCurrent();
                }
            
                // Auto play next
                function onPlayerStateChange(event) {
                    if (event.data === YT.PlayerState.ENDED) {
                        currentIndex++;
                        if (currentIndex < videoIds.length) {
                            player.loadVideoById(videoIds[currentIndex]);
                            highlightCurrent();
                        }
                    }
                }
            
                // Highlight active thumbnail
                function highlightCurrent() {
                    document.querySelectorAll('.video-thumb').forEach((el, idx) => {
                        el.classList.toggle('border-primary', idx === currentIndex);
                        el.classList.toggle('shadow', idx === currentIndex);
                    });
                }
            
                // Allow manual click on thumbnails
                document.addEventListener('click', function(e) {
                    if (e.target.closest('.video-thumb')) {
                        let thumb = e.target.closest('.video-thumb');
                        let vid = thumb.getAttribute('data-video');
                        currentIndex = videoIds.indexOf(vid);
                        player.loadVideoById(vid);
                        highlightCurrent();
                    }
                });
            </script>


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

