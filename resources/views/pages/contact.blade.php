@extends('layouts.master_home')
@section('home_content')

<!-- Background canvas (only on this page) -->
<canvas id="page-bg"></canvas>

<section id="breadcrumbs" class="breadcrumbs"  style=" margin: 130px auto 60px; padding: 0 20px;">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center" style="margin-top: 50px;">
      <h2>Contact</h2>
      <ol>
        <li><a href="{{route('main.home')}}">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="row justify-content-center" data-aos="fade-up">

      <div class="col-lg-10">

        <div class="info-wrap">
          <div class="row">
            
            <!-- Visit Us -->
            <div class="col-12 mb-4 text-center">
              <h3 class="text-primary fw-bold" style="font-size: 1.8rem; letter-spacing: 0.5px;">Visit Us</h3>
              <p class="text-muted" style="font-size: 1rem;">We’d love to see you! Here’s where you can find us.</p>
            </div>

            <div class="col-lg-4 info">
              <i class="icofont-google-map"></i>
              <h4>Head Office:</h4>
              <p>{{$contacts->address}}</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>{{$contacts->email}}</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>{{$contacts->phone}}</p>
            </div>

          </div>
        </div>

      </div>

    </div>


    <!-- Message + Map Row -->
    <div class="row mt-5 justify-content-center" data-aos="fade-up">

<!-- Message Form -->
<div class="col-lg-6 order-lg-1 order-2">
  <div class="contact-form-wrapper p-4 p-lg-5 shadow-sm rounded bg-white">
    <h3 class="mb-3 text-primary fw-bold" style="font-size: 1.8rem; letter-spacing: 0.5px;">Get in Touch</h3>
    <p class="mb-4 text-muted" style="font-size: 1rem;">Send us an inquiry and we'll get back to you within 24 business hours.</p>

    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif

   <form action="{{ route('contact.form') }}" method="post">
      @csrf
      <div class="form-row">
        <div class="col-md-6 form-group mb-3">
          <label for="name">Your Name <span style="color:red">*</span></label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required />
        </div>
        <div class="col-md-6 form-group mb-3">
          <label for="email">Your Email <span style="color:red">*</span></label>
          <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email address" required />
        </div>
      </div>
    
      <div class="form-row">
        <div class="col-md-6 form-group mb-3">
          <label for="phone">Phone <span style="color:red">*</span></label>
          <input type="tel" id="phone" name="phone" class="form-control" placeholder="e.g. +254 700 000000" required />
        </div>
    
        <div class="col-md-6 form-group mb-3">
          <label for="interest">Area of Interest <span style="color:red">*</span></label>
          <select id="interest" name="interest" class="form-control" required>
            <option value="">-- Select an option --</option>
            <option value="Web Development">Web Development</option>
            <option value="POS System">POS System</option>
            <option value="E-commerce Website">E-commerce Website</option>
            <option value="Mobile App Development">Mobile App Development</option>
            <option value="Software Customization">Software Customization</option>
            <option value="Graphic designs">Graphic Design</option>
            <option value="Internship and Attachments">Internship and Attachments</option>
            <option value="JM Academy Consultation">JM Academy Consultation</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
    
      <div class="form-group mb-3">
        <label for="subject">Subject <span style="color:red">*</span></label>
        <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject of your message" required />
      </div>
    
      <div class="form-group mb-4">
        <label for="message">Message <span style="color:red">*</span></label>
        <textarea id="message" class="form-control" name="message" rows="5" placeholder="Write your message here..." required></textarea>
      </div>
    
      <button class="btn btn-primary btn-block py-2" type="submit" style="font-weight: 600;">Send Message</button>
    </form>

  </div>
</div>

<!-- intl-tel-input CSS (primary + fallback) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.min.css" crossorigin="anonymous">

<!-- intl-tel-input JS (primary) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js" crossorigin="anonymous"></script>
<!-- JS fallback loader if primary fails -->
<script>
  if (!window.intlTelInput) {
    var s = document.createElement('script');
    s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/intlTelInput.min.js';
    s.crossOrigin = 'anonymous';
    document.head.appendChild(s);
  }
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  // Ensure CSS actually applied – if not, inject fallback CSS
  (function ensureItiCSS() {
    var probe = document.createElement('div');
    probe.className = 'iti__country-list';
    document.body.appendChild(probe);
    var display = getComputedStyle(probe).display;
    document.body.removeChild(probe);
    if (display !== 'none') {
      // CSS not applied; inject jsDelivr CSS
      var link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = 'https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.min.css';
      link.crossOrigin = 'anonymous';
      document.head.appendChild(link);
    }
  })();

  function initPhone() {
    var input = document.querySelector("#phone");
    if (!input || !window.intlTelInput) return;

    var iti = window.intlTelInput(input, {
      initialCountry: "ke",                  // default Kenya
      separateDialCode: true,                // show +254 outside
      preferredCountries: ["ke","us","gb","in"],
      // utils improves formatting/validation; if blocked, dropdown still works
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });

    // Submit full international number
    if (input.form) {
      input.form.addEventListener("submit", function() {
        input.value = iti.getNumber();
      });
    }
  }

  // If JS was loaded via fallback, wait for it
  if (window.intlTelInput) {
    initPhone();
  } else {
    var tries = 0;
    var timer = setInterval(function () {
      tries++;
      if (window.intlTelInput || tries > 20) { // ~2s max
        clearInterval(timer);
        initPhone();
      }
    }, 100);
  }
});
</script>

      <!-- Map -->
      <div class="col-lg-6 order-lg-2 order-2 mb-4 mb-lg-0">
        <iframe
          style="border:0; width: 100%; height: 100%; min-height: 400px;"
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1995.047319738827!2d36.81478987621131!3d-1.270053135902092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173b1a7bde1b%3A0x5a1c4f4f1b3f6a36!2sWestlands%20Square%20Shopping%20Mall%2C%20Ring%20Road%2C%20Parklands%2C%20Nairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1682101234567"
          frameborder="0"
          allowfullscreen
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

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

