@extends('layout.app')

@section('header')
 <!--header sectiom start--> 

 <header class="sticky"> 
            <a href="#" class="logo"><h1><span class="fas fa-dove"></span> With<span>Me.</span></h1></a>

            <div id="menu" class="fas fa-bars"></div>

            <nav class="navbar">
                <ul class="navbar ">
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

        </header>
        <!--header sectiom ends-->

@endsection



@section('content')
     <!--home sectiom start-->
     <section class="home" id="home">

<div class="content">

    <h3><span>Hello, my friends!</span></h3>
    <h1>I am Aliza </h1>
    <p>I love technology or that kind of stuff related. I'm hoping we all can work together and learning together!!.</p>
    <a href="#about" class="btn">Get Started</a>   
</div>

<div class="image">
    <img src="images/home-girl.png" alt="">
</div>

</section>
<!--home sectiom ends-->
<section class="about" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary">About <span>ME</span></h1>
        </div>
    </div>
    <div class="row">

        <div class="image">
            <img class="tilt" src="images/aliza.jpeg" alt="">
        </div>
        <div class="content">
            <h3> Front-End <span> Developer </span> </h3>
            <p class="info">My name is Aliza Husna Izzati, you can call me Aliza. I'm currently learning and interested about a whole lot stuff like ts, js, react, python, or anything coding related. I love technology or that kind of stuff related. I'm hoping we all can work together and learning together!!</p>
            <div class="box-container">
                <div class="box">
                    <p> <span> name: </span> Aliza Husna Izzati </p>
                    <p> <span> gender: </span> Female </p>
                    <p> <span> Age  : </span> 19 </p>
                    <p> <span> major : </span> Software Engineering </p>
                </div>
                <div class="box">
                    <p> <span> language : </span> Indonesia / English </p>
                    <p> <span> phone : </span> +62 895-3976-64627 </p>
                    <p> <span> email : </span> aliza.19064@mhs.unesa.ac.id </p>
                    <p> <span> address : </span> Ponorogo, Indonesia - 63472 </p>
                </div>
            </div>
            <a href="images/CV_Aliza Husna.png" class="download-btn">download CV</a>

        </div>
</section>
<!-- about section ends -->

 <!-- Education section start -->
 <section class="education" id="education">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
            <h1 class="position-absolute text-uppercase text-primary">education and experience</h1>
        </div>
    </div>

    <div class="row">

        <div class="column">

            <h3 class="title">my education</h3>

            <div class="box">
                <div class="year"> <i class="fas fa-calendar"></i> 2019 - Now </div>
                <h3>D4 Software Engineering - Universitas Negeri Surabaya</h3>
                <p>Menjadi mahasiswa yang sedang menempuh semester 5 dengan mengambil program studi manajemen informatika</p>
            </div>
            <div class="box">
                <div class="year"> <i class="fas fa-calendar"></i> 2016 - 2019 </div>
                <h3>natural science - SMAN 2 Ponorogo</h3>
                <p>Lulus 3 tahun dengan memperoleh nilai ujian nasional yang memuaskan.</p>
            </div>
        </div>

        <div class="column">

            <h3 class="title">my experience</h3>

            <div class="box">
                <div class="year"> <i class="fas fa-calendar"></i> 2021 - Now </div>
                <h3>PENRISTEK - HIMAPRO Software Engineering</h3>
                <p>Mengikuti organisasi himapro dengan divisi penristek yang berhubungan dengan teknologi.</p>
            </div>
            <div class="box">
                <div class="year"> <i class="fas fa-calendar"></i> 2021 - Now </div>
                <h3>Google Developer Student Club - GDSC ITB</h3>
                <p>mengikuti study club yang membahas lebih dalam tentang produk google.</p>
            </div>
        </div>

    </div>

</section>

<!-- education section ends -->

<!-- services section starts  -->

    <section class="services" id="services">

        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Services</h1>
            <h1 class="position-absolute text-uppercase text-primary">What Things I am Doing</span></h1>
        </div>

        <div class="box-container">

            <div class="box">
                <span class="number">1</span>
                <img src="images/s1.png" alt="">
                <h3>game development</h3>
                <p>Designing and Building a Game Using the MV Maker RPG Application.</p>
            </div>
    
            <div class="box">
                <span class="number">2</span>
                <img src="images/s2.png" alt="">
                <h3>graphic design</h3>
                <p>Designing posters using Photoshop and adobe illustrator.</p>
            </div>
    
            <div class="box">
                <span class="number">3</span>
                <img src="images/s3.png" alt="">
                <h3>App Development</h3>
                <p>Design and build mobile apps using flutter and dart.</p>
            </div>
    
            <div class="box">
                <span class="number">4</span>
                <img src="images/s4.png" alt="">
                <h3>data analysis</h3>
                <p>Analyze sentiment analysis using Python and R studio.</p>
            </div>
    
            <div class="box">
                <span class="number">5</span>
                <img src="images/s5.png" alt="">
                <h3>web development</h3>
                <p>Designing and building web using html5, css 3, php, js.</p>
            </div>
    
            <div class="box">
                <span class="number">6</span>
                <img src="images/s6.png" alt="">
                <h3>web design</h3>
                <p>Designing Front-End web using figma application.</p>
            </div>
    
        </div>
    
    </section>
    <!-- services section ends -->



            
<!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
            <h1 class="position-absolute text-uppercase text-primary">My portfolio</h1>
        </div>

        <div class="box-container">

            <a href="#" class="box">
                <img src="images/food.png" alt="">
                <div class="info">project 01</div>
            </a>

            <a href="#" class="box">
                <img src="images/rs.png" alt="">
                <div class="info">project 02</div>
            </a>

            <a href="#" class="box">
                <img src="images/digi.png" alt="">
                <div class="info">project 03</div>
            </a>

            <a href="#" class="box">
                <img src="images/sehati.png" alt="">
                <div class="info">project 04</div>
            </a>

            <a href="#" class="box">
                <img src="images/covid.png" alt="">
                <div class="info">project 05</div>
            </a>

            <a href="#" class="box">
                <img src="images/learn.png" alt="">
                <div class="info">project 06</div>
            </a>

        </div>

    </section>

    <!-- portfolio section ends -->
    <!-- contact section starts  -->

<section class="contact" id="contact">

<div class="position-relative d-flex align-items-center justify-content-center">
    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
    <h1 class="position-absolute text-uppercase text-primary">Get In Touch With Me</h1>
</div>

<div class="box-container">
    
    <div class="box">
        <i class="fas fa-phone"></i>
        <h3>my number</h3>
        <p>+62- 895 - 3976 - 64627</p>
    </div>

    <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>my email</h3>
        <p>aliza.19064@mhs.unesa.ac.id</p>
    </div>

    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>my address</h3>
        <p>Ponorogo, Indonesia - 63472</p>
    </div>

</div>

<div class="row">

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <input type="text" placeholder="subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
        <button class="btn"> send message </button>
    </form>
    <div class="image">
        <img src = "images/Designer girl-pana.png" alt = "">
    </div>

</div>

</section>
<a href="#home" class="scroll-top">
        <img src="images/scroll-img.png" alt="">
    </a>


<!-- contact section ends -->

@endsection




@section('footer')
      <!--proses footer starts-->
    <div class="main-content">
      <div class="left box">
        <h2>Tentang Kami</h2>
        <div class="content">
          <p>withme is a web portfolio that contains my biodata and projects.</p>
          <div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>

      <div class="center box">
        <h2>Alamat</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Ponorogo - Indonesia, 63472 </span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+62 895-3976-64627</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">aliza.19064@mhs.unesa.ac.id</span>
          </div>
        </div>
      </div>

      <div class="right box">
        <h2>Contact Me</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea rows="2" cols="25" required></textarea>
            </div>
            <div class="btn2">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
      <center>
        <span class="credit">Created By me| </span>
        <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
      </center>
    </div>
<!--proses footer ends-->
@endsection