<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepijn van den Kieboom</title>
    <!-- Load the Latest Font Awesome Iconic Font. OPTIONAL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <!-- Load the latest Bootstrap 5 or Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/flatly/bootstrap.min.css">
    <style>
        @import url('https://www.fontspace.com/lemon-milk-font-f44669');
        .content {
            position:absolute;
            margin-top: 20%;
        }

        h1, .lead {
            color: #fff;
        }
        body, html {
            margin: 0 auto;
            padding: 0;
            scrollbar-width: thin;
        }

        .section {
            min-height: 750px;
            max-height: 750px;
            position: relative;
            text-align: center;
            font-family: sans-serif, arial;
            margin: 0;
        }

        h1, p {
            margin: 0;
            font-family: sans-serif, arial;
            font-weight: bold;
        }

        .text-wr {
            max-width: 960px;
            margin: 0 auto;
        }
        .container{
            justify-content: center;
            display: flex;
        }

        #background-video {
            max-width: 100% ;
            z-index: 1;

        }

        #section2 {
            background: #4bbfc3;
            color: #81d2d5;
        }

        #section3 {
            background: #283044;
            color: #686e7c;
        }

        #section4 {
            background: #ebf5ee;
            color: #aeb9b9;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
<x-header></x-header>
<div id="section1" class="section">
    <div class="container">
        <div class="content">
            <h1>Pepijn van den Kieboom</h1>
            <p class="lead">Student Web Development</p>
        </div>
    </div>
    <video id="background-video" autoplay loop muted poster="{{ Vite::asset('resources/media/whiteWaves.mp4') }}">
        <source src="{{ Vite::asset('resources/media/whiteWaves.mp4') }}" type="video/mp4">
    </video>
</div>
<div id="section2" class="section">
    <div class="text-wr">
        <h1 class="title">About me</h1>
        <p>My name is Pepijn van den Kieboom i am a software developer student at Curio in Breda.</p>
    </div>
</div>
<div id="section3" class="section">
    <div class="text-wr">
        <h1 class="title">Work</h1>
        <x-carousel/>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
    </div>
</div>
<div id="section4" class="section">
    <div class="text-wr">
        <h1 class="title">Contact Me</h1>
        <x-contact-form></x-contact-form>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
    </div>
</div>
<x-footer></x-footer>
<!-- Load the Bootstrap's JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Load the main JavaScript -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LLWL5N9CSM"></script>
<script>
    /*window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-LLWL5N9CSM');
*/
    window.slide = new SlideNav();
</script>
</body>
</html>

