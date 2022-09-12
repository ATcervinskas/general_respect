<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- TODO remove cdns and replace with files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body class="main-content">
<header class="section sec1 header active">
    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <img src="" alt="">
            </div>
        </div>
        <div class="right-header">
            <h1 class="name">
                Hi, I'm <span>Artūras Červinskas.</span>
                A Web Developer.
            </h1>
            <!-- TODO Think about backed part becouse text should be saved inside db -->
            <p>
                I'm a Web Developer, I love to create beautiful and functional websites.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, libero?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis sed aut!
            </p>
            <div class="btn-con">
                <!-- TODO add href to CV -->
                <a href="" class="main-btn">
                    <span class="btn-text">Download CV</span>
                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                </a>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="section sec2 about">
        <div class="main-title">
            <h2>About <span>me</span> <span class="bg-text"> my stats</span></h2>
        </div>
    </section>
    <section class="section sec3 portfolio"></section>
    <section class="section sec4 blogs"></section>
    <section class="section sec5 contact"></section>
</main>

<div class="controls">
    <div class="control control-1 active-btn active" data-id="header">
        <i class="fa-solid fa-house-chimney"></i>
    </div>
    <div class="control control-2" data-id="about">
        <i class="fa-solid fa-user"></i>
    </div>
    <div class="control control-3" data-id="portfolio">
        <i class="fa-solid fa-briefcase"></i>
    </div>
    <div class="control control-4" data-id="blogs">
        <i class="fa-solid fa-newspaper"></i>
    </div>
    <div class="control control-5" data-id="contact">
        <i class="fa-solid fa-address-book"></i>
    </div>
</div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>