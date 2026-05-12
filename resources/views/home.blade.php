@extends('layouts.app')

@section('content')

<!-- HOME -->
<section class="home" id="home">

    <div class="home-content" data-aos="fade-right">
        <h3>Hello, Saya</h3>
        <h1>Mochammad Mirza Zaidan</h1>
        <h3>Laravel Developer</h3>

        <p>
            Saya seorang web developer yang fokus membuat website modern,
            elegan, responsive, dan interaktif menggunakan Laravel.
        </p>

        <div class="hero-social">

    <!-- GITHUB -->
    <a href="https://github.com/Spyyy26"
       target="_blank">

        <i class='bx bxl-github'></i>

    </a>

    <!-- INSTAGRAM -->
    <a href="https://instagram.com/zaidanmochammad_"
       target="_blank">

        <i class='bx bxl-instagram'></i>

    </a>

    <!-- LINKEDIN -->
    <a href="https://www.linkedin.com/in/mochammad-mirza-zaidan-006747286/"
       target="_blank">

        <i class='bx bxl-linkedin'></i>

    </a>

    <!-- WHATSAPP -->
    <a href="https://wa.me/62895322192553?text=Halo%20Mirza%20saya%20tertarik%20dengan%20portfolio%20anda"
   target="_blank">

    <i class='bx bxl-whatsapp'></i>

</a>

</div>

        <a href="{{ asset('cv/cv-mirza.pdf') }}"
   class="btn-premium"
   download>

    <i class='bx bx-download'></i>

    Download CV

</a>
<a href="{{ asset('cv/cv-mirza.pdf') }}"
       target="_blank"
       class="btn-preview">

        <i class='bx bx-show'></i>

        Preview CV

    </a>
    </div>

    <div class="home-img" data-aos="zoom-in">
        <img src="{{ asset('images/profile.png') }}" alt="">
    </div>

</section>

<!-- ABOUT -->
<section class="about" id="about">

    <div class="about-img" data-aos="fade-right">
        <img src="{{ asset('images/profile.png') }}" alt="">
    </div>

    <div class="about-content" data-aos="fade-left">

        <h2 class="heading">
            Tentang <span>Saya</span>
        </h2>

        <h3>Fullstack Developer</h3>

        <p>
            Saya suka membuat website modern menggunakan Laravel,
            JavaScript, Angular, dan teknologi terbaru lainnya.
        </p>

        <a href="#" class="btn">Read More</a>

    </div>

</section>
<section class="experience-section" id="experience">

    <h2 class="heading">
        My <span>Experience</span>
    </h2>

    <div class="timeline">

        <div class="timeline-item" data-aos="fade-right">

            <div class="timeline-content">

                <span>2025</span>

                <h3>QA / Tester Engineer</h3>

                <h4>PT Studio Inovasi Teknologi</h4>

                <p>
                    Melakukan pengujian aplikasi web dan mobile,
                    testing fitur, bug reporting,
                    dan memastikan kualitas aplikasi.
                </p>

            </div>

        </div>

        <div class="timeline-item" data-aos="fade-left">

            <div class="timeline-content">

                <span>2025</span>

                <h3>POS & Booking System</h3>

                <h4>Gatsoe Sport - Biliard</h4>

                <p>
                    QA testing aplikasi POS dan booking system
                    berbasis Laravel & Flutter.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- SKILLS -->
<section class="skills" id="skills">

    <h2 class="heading">My <span>Skills</span></h2>

    <div class="skills-container">

    <!-- HTML -->
    <div class="skills-box" data-aos="flip-left">

        <i class='bx bxl-html5'></i>

        <h3>HTML5</h3>

        <p>Membuat struktur website modern.</p>

    </div>

    <!-- CSS -->
    <div class="skills-box"
         data-aos="flip-left"
         data-aos-delay="100">

        <i class='bx bxl-css3'></i>

        <h3>CSS3</h3>

        <p>Responsive UI dan animasi modern.</p>

    </div>

    <!-- JS -->
    <div class="skills-box"
         data-aos="flip-left"
         data-aos-delay="200">

        <i class='bx bxl-javascript'></i>

        <h3>JavaScript</h3>

        <p>Website interaktif dan dinamis.</p>

    </div>

    <!-- LARAVEL -->
    <div class="skills-box"
         data-aos="flip-left"
         data-aos-delay="300">

        <i class='bx bxl-laravel'></i>

        <h3>Laravel</h3>

        <p>
            Backend modern menggunakan Laravel,
            REST API, CRUD, Authentication,
            dan MVC Architecture.
        </p>

    </div>

</div>
    </div>

</section>

<!-- CONTACT -->
<section class="contact" id="contact">

    <h2 class="heading">
        Contact <span>Me!</span>
    </h2>

    <form action="{{ route('contact.store') }}"
      method="POST"
      data-aos="fade-up">

    @csrf

    @if(session('success'))

        <div class="alert-success">
            {{ session('success') }}
        </div>

    @endif

    <div class="input-box">

        <input type="text"
               name="name"
               placeholder="Nama">

        <input type="email"
               name="email"
               placeholder="Email">

    </div>

    <div class="input-box">

        <input type="text"
               name="subject"
               placeholder="Subject">

        <input type="text"
               name="phone"
               placeholder="No HP">

    </div>

    <textarea name="message"
              cols="30"
              rows="10"
              placeholder="Pesan"></textarea>

    <button class="btn-premium">
        Kirim Pesan
    </button>

</form>

</section>

@endsection