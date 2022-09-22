<style>
    .offCanvasBtn{
        background-color: #48a9a6;
    }
</style>
<header class="py-3 navbar fixed-top">
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
                    <a href="#section1" class="list-group-item list-group-item-action active" aria-current="true">
                        Home
                    </a>
                    <a href="#section2" class="list-group-item list-group-item-action">About me</a>
                    <a href="#section3" class="list-group-item list-group-item-action">Work</a>
                    <a href="#section4" class="list-group-item list-group-item-action">Contact</a>

                </div>
            </div>
        </div>
        <div class="d-flex align-items-lg-stretch">
            <div class="w-100 me-3">
            </div>
            <div class="flex-shrink-0 dropdown">
                <a class="navbar-brand " href="{{ route('dashboard') }}">
                    <img  class="rounded-circle" src="{{ Vite::asset('resources/media/moutaing.jpg')}}" alt="Bootstrap" height="30px" width="30px">
                </a>
            </div>

        </div>
    </div>
</header>


