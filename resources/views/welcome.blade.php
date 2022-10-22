<x-head></x-head>
<body>
<x-header></x-header>
<div id="section1" class="section">
    <div class="container">
        <div class="content">
            <h1>Pepijn van den Kieboom</h1>
            <p class="lead">Student Web Development</p>
            <a style="color: #162447" href="#section2"><i class="fa-solid fa-circle-chevron-down fa-3x" ></i></a>
        </div>
    </div>
    <video id="background-video" autoplay loop muted poster="{{ Vite::asset('resources/media/whiteWaves.mp4') }}">
        <source src="{{ Vite::asset('resources/media/whiteWaves.mp4') }}" type="video/mp4">
    </video>
</div>
<div id="section2" class="section">
    <div class="text-center">
        <div class="row g-0">
            <div class="col">
                <div class="text-wr p-5">
                    <h1 class="title pt-5">About me</h1>
                    <p>My name is Pepijn van den Kieboom i am a software developer student at Curio in Breda.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam blanditiis debitis earum eligendi enim fugit odio perferendis reprehenderit, sint tenetur unde voluptate voluptatibus. Dolorem eum iusto placeat rerum saepe.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa, delectus dignissimos eaque earum error eum facilis fuga ipsa ipsum laboriosam minima minus neque quis quisquam sit tempora voluptate voluptates.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cupiditate dolorem dolorum facilis harum laboriosam maiores officiis placeat, porro quisquam reiciendis tempore totam velit? Autem, harum, quasi? Officia, placeat, soluta?</p>
                </div>
            </div>
            <div class="col">
                <img src="https://cohenwoodworking.com/wp-content/uploads/2016/09/image-placeholder-500x500.jpg" class="d-block vw-100" alt="...">
            </div>
        </div>
    </div>
</div>
<div id="section3" class="section">
    <div class="text-wr">
        {{-- <h1 class="titleDark">Work</h1>
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
             </div>
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <a href="{{ route('project') }}">
                         <img src="{{ Vite::asset('resources/media/woods.jpg') }}" class=" d-block w-100 h-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                             <h5>First slide label</h5>
                             <p>Some representative placeholder content for the first slide.</p>
                         </div>
                     </a>
                 </div>
                 @foreach($projects as $project)
                     <div class="carousel-item">
                         <img src="/images/{{ $project->image }}" class=" d-block w-50">
                     </div>
                 @endforeach
                 --}}{{--<div class="carousel-item">
                     <a href="{{ route('project') }}">
                         <img src="{{ Vite::asset('resources/media/railway.jpg') }}" class=" d-block w-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                             <h5>Third slide label</h5>
                             <p>Some representative placeholder content for the third slide.</p>
                         </div>
                     </a>
                 </div>--}}{{--
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>--}}
        <h1 class="titleDark">Work</h1>

        <div class="tiles">
            @foreach($projects as $project)
                <div class="tile">
                <div class="card mx-2">
                    <img src="/images/{{ $project->image }}">
                    <h3 class=" display-6 lh-1 fw-bold">{{$project->name}}</h3>
                    <div class="focus-content">
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                <small>{{$project->category}}</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                <small>{{$project->date}}</small>
                            </li>

                        </ul>

                    </div>
                   <a href="{{route('project', $project)}}"> <div class="btn-primary rounded-2">View Project</div></a>
                </div>
            </div>

           {{-- <div class="tile">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                    <img src="/images/{{ $project->image }}">
                    <h3 class=" display-6 lh-1 fw-bold">{{$project->name}}</h3>
                        <div class="focus-content">
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                    <small>{{$project->category}}</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                    <small>{{$project->date}}</small>
                                </li>
                            </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/> <a href="#">Link to source</a>
                        </p>
                    </div>
                </div>
            </div>--}}
            @endforeach
        </div>
    </div>
</div>
<div id="section4" class="section">
    <div class=" text-wr">
        <h1 class=" title">Contact Me</h1>
        <x-contact-form></x-contact-form>
    </div>
</div>
<x-footer></x-footer>
</body>

