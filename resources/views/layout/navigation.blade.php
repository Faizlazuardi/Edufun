<nav class="bg-light navbar navbar-expand-lg navbar-light">
    <div class="d-flex justify-content-between px-5 container-fluid">
        <a class="navbar-brand" href={{ route('home') }}>
            <img src={{ asset('LogoBrand.jpg') }} alt="" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item fw-bold">
                    <a class="nav-link active" aria-current="page" href={{ route('home') }}>Home</a>
                </li>
                <li class="nav-item dropdown">
                    <p class="nav-link dropdown-toggle fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </p>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href={{ route('filterByCategory',$category->id) }}>{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href={{ route('writers') }}>Writer</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href={{ route('aboutUs') }}>About Us</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href={{ route('popular') }}>Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
