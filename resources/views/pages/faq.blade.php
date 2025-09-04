@extends('layouts.master_home')

@section('home_content')
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<canvas id="page-bg"></canvas>

<style>
.faq-section-row .faq-image img {
    width: 100%;         /* Full width within column */
    max-width: 400px;    /* Limit so text doesn’t shrink too much */
    height: auto;        /* Maintain aspect ratio */
    border-radius: 1rem;
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    margin-bottom: 1.5rem; /* space between image and questions */
}

.faq-section-row .faq-image {
    flex: 0 0 40%; /* Image takes 40% of the row */
    max-width: 400px; /* Optional max width */
}

.faq-section-row .faq-items {
    flex: 1 1 55%; /* FAQ items take remaining space */
    min-width: 250px;
}

.faq-question {
    word-break: break-word;
    overflow-wrap: break-word;
}

.faq-items .faq-question {
    font-weight: 600;
    font-size: 1.2rem;
    word-break: break-word;
    max-width: 90%;  /* Keeps questions from stretching too much */
}


@media (max-width: 992px) {
    .faq-section-row {
        flex-direction: column; /* Stack image above FAQ items */
        align-items: center;
    }
    .faq-section-row .faq-image {
        order: -1; /* Ensure image is first */
        margin-bottom: 2rem;
    }
}


@media (max-width:768px){
    .faq-question { font-size: 1rem; }
    .faq-answer { font-size: 0.9rem; }
}


#page-bg { position: fixed; top:0; left:0; width:100vw; height:100vh; z-index:-1; background:#fff; pointer-events:none; }
.page-layer { margin:0 auto 60px; padding:220px 20px 0 20px; }
@media (max-width:992px){.page-layer{padding:150px 15px 0 15px;}}
@media (max-width:768px){.page-layer{padding:100px 15px 0 15px;}}
@media (max-width:576px){.page-layer{padding:60px 10px 0 10px;}}

.section-title { font-weight:700; font-size:2rem; margin-bottom:1rem; position:relative; display:inline-block;}
.section-title::after { content:""; width:60px; height:3px; background:#0d6efd; position:absolute; bottom:-8px; left:0;}

.faq-item { margin-bottom:1.5rem; border-radius:10px; box-shadow:0 6px 18px rgba(0,0,0,0.08); background:#f8f9fa; padding:1.5rem; transition:all 0.3s ease; }
.faq-question { font-weight:600; font-size:1.2rem; display:flex; justify-content:space-between; align-items:center;}
.faq-answer { margin-top:0.8rem; display:none; font-size:1rem; color:#495057;}
.view-btn { background:#0d6efd; color:#fff; border:none; padding:6px 12px; border-radius:6px; cursor:pointer; font-size:0.9rem; transition:all 0.3s ease; }
.view-btn:hover { background:#6610f2; }

.faq-section-row { display:flex; align-items:center; margin-bottom:3rem; gap:2rem; flex-wrap:wrap; }
.faq-section-row.left-img .faq-image { order:0; }
.faq-section-row.left-img .faq-items { order:1; }
.faq-section-row.right-img .faq-image { order:1; }
.faq-section-row.right-img .faq-items { order:0; }

.faq-image img { max-width:400px; border-radius:1rem; box-shadow:0 6px 18px rgba(0,0,0,0.12); width:100%; }
.faq-items { flex:1; min-width:250px; }

.animated-btn { border-radius:6px; font-weight:600; animation:pulse 2s infinite; }
@keyframes pulse {0%{transform:scale(1);}50%{transform:scale(1.05);}100%{transform:scale(1);}}
</style>

<div class="page-layer container">
    <!-- Hero -->
<div class="row justify-content-center text-center mb-5" data-aos="fade-up">
    <div class="col-lg-8">
        <h1 class="fw-bold display-5 mb-3">Frequently Asked Questions</h1>
        <p class="fs-5 text-secondary">
            Explore detailed answers about our services, processes, downloadable resources, and career opportunities. 
            Get the information you need to make informed decisions with ease.
        </p>
    </div>
</div>


    <!-- General Questions (Image Left) -->
    <div class="faq-section-row left-img" data-aos="fade-up">
        <div class="faq-image">
            <img src="{{ asset('assets/img/general.webp') }}" alt="General Questions">
        </div>
        <div class="faq-items">
            <h2 class="section-title mt-4 mb-3">General Questions</h2>
            @foreach([
                'What services do you offer?' => 'We provide software development, IT solutions, e-commerce platforms, and custom digital tools.',
                'How long have you been in business?' => 'Founded in 2023, JM Innovatech has been helping businesses innovate and grow through technology solutions.',
                'Can you customize software for my business?' => 'Yes, we tailor software solutions to fit your processes, objectives, and operational goals.',
                'Do you provide support after deployment?' => 'We provide maintenance, updates, and technical support to ensure smooth operation of all systems.',
                'How can I contact your team?' => 'You can reach us via our <a href="'.route('contact').'">contact page</a>, email, or phone.',
                'Do you offer training for your solutions?' => 'Yes, we provide user training and documentation for all deployed software.',
                'Do you have local or remote support?' => 'We offer both local and remote support depending on client needs.',
                'What industries do you serve?' => 'We serve multiple industries including education, finance, retail, and healthcare.',
                'Can you handle urgent projects?' => 'Yes, we can manage urgent projects with proper scoping and resource allocation.',
                'Are your solutions scalable?' => 'Absolutely, all our software is designed to scale with your business growth.'
            ] as $q => $a)
            <div class="faq-item">
                <div class="faq-question">{{ $q }} <button class="view-btn">View Answer</button></div>
                <div class="faq-answer">{!! $a !!}</div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Services & Processes (Image Right) -->
    <div class="faq-section-row right-img" data-aos="fade-up">
        <div class="faq-image">
            <img src="{{ asset('assets/img/service.jpg') }}" alt="Services & Processes">
        </div>
        <div class="faq-items">
            <h2 class="section-title mt-4 mb-3">Services & Processes</h2>
            @foreach([
                'What is your software development process?' => 'Our process includes requirements analysis, design, development, testing, deployment, and ongoing support.',
                'Can you integrate existing systems?' => 'Yes, we provide integration with legacy or third-party systems to streamline your workflow.',
                'Do you offer cloud-based solutions?' => 'We offer scalable cloud solutions including SaaS, PaaS, and custom cloud platforms.',
                'Can you handle database migrations?' => 'Yes, we ensure smooth and secure database migration without downtime or data loss.',
                'Do you provide e-commerce solutions?' => 'We design e-commerce platforms with payment integration, product management, and analytics.',
                'Do you implement cybersecurity measures?' => 'Yes, we follow best practices to secure all applications and data.',
                'Can you provide API integrations?' => 'Yes, we develop custom API integrations to connect with third-party services.',
                'Do you offer system maintenance contracts?' => 'Yes, ongoing maintenance packages are available for all software solutions.',
                'Can you optimize existing software?' => 'We can analyze and optimize software to improve performance and efficiency.',
                'Do you offer project consulting?' => 'Yes, we provide IT consulting to plan and implement effective software solutions.'
            ] as $q => $a)
            <div class="faq-item">
                <div class="faq-question">{{ $q }} <button class="view-btn">View Answer</button></div>
                <div class="faq-answer">{!! $a !!}</div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Attachments & Downloads (Image Left) -->
    <div class="faq-section-row left-img" data-aos="fade-up">
        <div class="faq-image">
            <img src="{{ asset('assets/img/downloads.avif') }}" alt="Attachments & Downloads">
        </div>
        <div class="faq-items">
            <h2 class="section-title mt-4 mb-3">Attachments & Downloads</h2>
            @foreach([
                'Do you provide a company profile?' => 'Yes, you can download our company profile here: <a href="'.asset('frontend/assets/img/JM%20Innovatech%20Solutions%20Profile.pdf').'" download>Download PDF</a>',
                'Are there brochures for your services?' => 'Yes, service brochures are available for download: <a href="'.asset('frontend/assets/img/Services_Brochure.pdf').'" download>Download Brochure</a>',
                'Can I get case studies or project samples?' => 'We provide select case studies and samples upon request. Please contact our team via the contact page.',
                'Are manuals or guides available?' => 'Yes, user manuals and guides are provided for deployed software.',
                'Do you provide technical specifications?' => 'Technical specifications and architecture diagrams can be shared upon request.',
                'Are software licenses available?' => 'Yes, we provide licenses for proprietary solutions when applicable.',
                'Can I get templates or resources?' => 'Templates for processes, workflows, and reports are available on request.',
                'Do you provide installation packages?' => 'Yes, complete installation packages are available for download with instructions.',
                'Are updates or patch notes available?' => 'Yes, we share updates and patch notes regularly for all maintained software.'
            ] as $q => $a)
            <div class="faq-item">
                <div class="faq-question">{{ $q }} <button class="view-btn">View Answer</button></div>
                <div class="faq-answer">{!! $a !!}</div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Careers & Industrial Attachments (Image Right) -->
    <div class="faq-section-row right-img" data-aos="fade-up">
        <div class="faq-image">
            <img src="{{ asset('assets/img/join.jpg') }}" alt="Careers & Industrial Attachments">
        </div>
        <div class="faq-items">
            <h2 class="section-title mt-4 mb-3">Careers & Industrial Attachments</h2>
            @foreach([
                'Do you offer internships for students?' => 'Yes, we provide structured internships in IT, software development, and business analytics. Applications can be submitted via our <a href="'.route('careers.index').'">career page</a>.',
                'Can I apply for industrial attachment?' => 'Students from universities and technical colleges are welcome to apply via our <a href="'.route('careers.index').'">career page</a>.',
                'What is the duration of internships or attachments?' => 'Durations typically range from 2–6 months depending on the institution and program.',
                'Are internships paid?' => 'Internships may include a stipend or allowance. Specific details are shared during recruitment.',
                'Do you provide letters of recommendation?' => 'Yes, successful interns receive letters highlighting their skills and contributions during their program.',
                'Do you have mentorship programs?' => 'Yes, all interns are assigned mentors to guide their learning and development.',
                'Can students work remotely?' => 'Remote attachments may be possible depending on the project requirements.',
                'Are there opportunities for employment after internships?' => 'Outstanding interns may be considered for full-time positions within the company.',
                'What skills are required for internships?' => 'Basic programming, IT knowledge, or business analytics skills depending on the role.',
                'Do you provide certificates after completion?' => 'Yes, all interns receive certificates of completion detailing the skills acquired.'
            ] as $q => $a)
            <div class="faq-item">
                <div class="faq-question">{{ $q }} <button class="view-btn">View Answer</button></div>
                <div class="faq-answer">{!! $a !!}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row align-items-center mb-5" data-aos="fade-up">
    
        <!-- Left CTA: Careers / Join Our Team -->
        <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
            <div class="cta-section position-relative p-4 rounded shadow-sm" style="background:#f8f9fa;">
                <h2 class="fw-bold mb-3">Join Our Team</h2>
                <p class="fs-5 text-secondary mb-3">
                    Explore exciting career opportunities, internships, and industrial attachments at JM Innovatech Solutions. 
                    Submit your application through our recruitment portal.
                </p>
                <a href="{{ route('careers.index') }}" 
                   class="btn btn-success btn-lg px-4 shadow-sm animated-btn">
                   Apply Now
                </a>
            </div>
        </div>
    
        <!-- Right CTA: Contact / Need More Information -->
        <div class="col-lg-6 text-center text-lg-start">
            <div class="cta-section position-relative p-4 rounded shadow-sm" style="background:#e9f2ff;">
                <h2 class="fw-bold mb-3" data-aos="fade-down" data-aos-delay="100">
                    Need More Information?
                </h2>
                <p class="fs-5 text-secondary mb-3" data-aos="fade-up" data-aos-delay="300">
                    Contact us today, and our team will provide detailed answers and guidance for your project.
                </p>
                <a href="{{ route('contact') }}" 
                   class="btn btn-primary btn-lg px-5 shadow-sm animated-btn" 
                   data-aos="zoom-in" data-aos-delay="600">
                   Contact Us
                </a>
            </div>
        </div>
    
    </div>

</div>

<!-- Canvas Script -->
<script>
const canvas = document.getElementById('page-bg');
const ctx = canvas.getContext('2d');
let particlesArray;
function resizeCanvas(){canvas.width=window.innerWidth;canvas.height=window.innerHeight;}
resizeCanvas(); window.addEventListener('resize',()=>{resizeCanvas();init();});
class Particle{constructor(x,y,dx,dy,size,color){this.x=x;this.y=y;this.dx=dx;this.dy=dy;this.size=size;this.color=color;} draw(){ctx.beginPath();ctx.arc(this.x,this.y,this.size,0,Math.PI*2,false);ctx.fillStyle=this.color;ctx.fill();} update(){if(this.x+this.size>canvas.width||this.x-this.size<0)this.dx=-this.dx; if(this.y+this.size>canvas.height||this.y-this.size<0)this.dy=-this.dy; this.x+=this.dx; this.y+=this.dy; this.draw();}}
function connect(){for(let a=0;a<particlesArray.length;a++){for(let b=a;b<particlesArray.length;b++){let dx=particlesArray[a].x-particlesArray[b].x;let dy=particlesArray[a].y-particlesArray[b].y;let distance=dx*dx+dy*dy;if(distance<(canvas.width/7)*(canvas.height/7)){ctx.beginPath();ctx.strokeStyle='rgba(13,110,253,0.2)';ctx.lineWidth=1;ctx.moveTo(particlesArray[a].x,particlesArray[a].y);ctx.lineTo(particlesArray[b].x,particlesArray[b].y);ctx.stroke();}}}}
function init(){particlesArray=[];let num=(canvas.width*canvas.height)/15000;for(let i=0;i<num;i++){let size=Math.random()*3+2;let x=Math.random()*(canvas.width-size*2)+size;let y=Math.random()*(canvas.height-size*2)+size;let dx=Math.random()*1-0.5;let dy=Math.random()*1-0.5;let color=['#0d6efd','#6610f2','#198754','#dc3545'][Math.floor(Math.random()*4)];particlesArray.push(new Particle(x,y,dx,dy,size,color));}}
function animate(){requestAnimationFrame(animate);ctx.clearRect(0,0,canvas.width,canvas.height);for(let i=0;i<particlesArray.length;i++){particlesArray[i].update();} connect();}
init();animate();
</script>

<!-- FAQ Toggle -->
<script>
document.querySelectorAll('.view-btn').forEach(btn=>{
    btn.addEventListener('click',()=>{
        const answer=btn.closest('.faq-item').querySelector('.faq-answer');
        answer.style.display=answer.style.display==='block'?'none':'block';
        btn.textContent=answer.style.display==='block'?'Hide Answer':'View Answer';
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration:1000,once:true});</script>

@endsection


