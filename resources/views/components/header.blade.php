<style>
    .navbar-area {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 99;
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
    }

    .sticky {
        position: fixed;
        z-index: 99;
        background-color: rgba(255, 255, 255, 0.8);
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        -webkit-box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
        box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
    }
    .sticky .navbar {
        padding: 10px 0;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
        .sticky .navbar {
            padding: 15px 0;
        }
    }

    .sticky .navbar .navbar-nav .nav-item a {
        color: #162447;
    }

    .sticky .navbar .navbar-nav .nav-item a::before {
        color: #162447;
    }

    .sticky .navbar .navbar-toggler .toggler-icon {
        background: #162447;
    }

    .navbar {
        padding: 0;
        border-radius: 5px;
        position: relative;
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        padding: 20px 0;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
        .navbar {
            padding: 17px 0;
        }
    }

    .navbar-brand {
        padding: 0;
    }

    .navbar-brand img {
        max-width: 180px;
    }

    .navbar-toggler {
        padding: 0;
    }

    .navbar-toggler:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .navbar-toggler .toggler-icon {
        width: 30px;
        height: 2px;
        background-color: #fff;
        display: block;
        margin: 5px 0;
        position: relative;
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
    }

    .navbar-toggler.active .toggler-icon:nth-of-type(1) {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        top: 7px;
    }

    .navbar-toggler.active .toggler-icon:nth-of-type(2) {
        opacity: 0;
    }

    .navbar-toggler.active .toggler-icon:nth-of-type(3) {
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
        top: -7px;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
        .navbar-collapse {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #fff;
            z-index: 9;
            -webkit-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
        .navbar-nav {
            padding: 20px 30px;
        }
    }

    .navbar-nav .nav-item {
        position: relative;
        margin-left: 40px;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
        .navbar-nav .nav-item {
            margin-left: 0px;
        }
    }

    .navbar-nav .nav-item a {
        font-size: 18px;
        font-weight: 400;
        color: #fff;
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        padding: 10px 0;
        position: relative;
        z-index: 1;
    }

    .navbar-nav .nav-item a::before {
        content: "";
        position: absolute;
        height: 5px;
        width: 0;
        border-radius: 16px;
        background: #2c3e50;
        bottom: 15px;
        left: 0;
        z-index: -1;
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
        .navbar-nav .nav-item a::before {
            top: auto;
            bottom: 0;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
        .navbar-nav .nav-item a {
            display: inline-block;
            padding: 6px 0px;
            color: #162447;
        }
    }

    .navbar-nav .nav-item a:hover::before, .navbar-nav .nav-item a.active::before {
        width: 100%;
    }
</style>
<header class="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="#section1">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#section2">About me</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#section3">Work</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="#section4">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-lg-stretch">
                            <div class="w-100 mx-3">
                            </div>
                            <a class="btn btn-primary rounded-circle" href="{{ route('dashboard') }}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </div>
                        <!-- navbar collapse -->
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>

        <!-- container -->
    </div>
    <!-- navbar area -->
</header>
<script>

</script>

{{--<header class="py-3 navbar fixed-top">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 20fr;">
        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" tabindex="-1" role="button" aria-controls="offcanvasExample">
            ☰
        </a>
        <div class="offcanvas offcanvas-start opacity-75" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Quick menu</h5>
                <button type="button" class="btn-close bg-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ">
                <div class="list-group-flush">
                    <a href="/" class="list-group-item list-group-item-action active" aria-current="true">
                        Home
                    </a>
                    @if( request()->is('/'))
                    <a href="#section2" class="list-group-item list-group-item-action">About me</a>
                    <a href="#section3" class="list-group-item list-group-item-action">Work</a>
                    <a href="#section4" class="list-group-item list-group-item-action">Contact</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="d-flex align-items-lg-stretch">
            <div class="w-100 mx-3">
            </div>
                <a class="btn btn-primary rounded-circle" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-user"></i>
                </a>
        </div>
    </div>
</header>--}}


