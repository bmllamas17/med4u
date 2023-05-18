 <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2><img src="{{ asset('dilg.png') }}" alt="" width="70"></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              @auth
                <li class="nav-item">
                  <a class="nav-link" href="/about-us">Manage LGUs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about-us">Reports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about-us">{{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-secondary">Logout</button>
                  </form>
                </li>
              @else
                <li class="nav-item">
                  <a class="nav-link" href="/about-us">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/lgu-reports">Infographic Reports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact-us">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/register">Sign up</a>
                </li>
          
              @endauth


            </ul>
          </div>
        </div>
      </nav>
    </header>