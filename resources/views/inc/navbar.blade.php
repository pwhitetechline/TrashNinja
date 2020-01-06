<nav class="navbar navbar-expand-md navbar-light navbar-custom">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/tn-logo-02.png') }}" class="img-fluid logo" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoggler" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbartoggler">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'about' ? 'active' : '' }}" href="{{ route('about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::route()->getName() === 'contact' ? 'active' : '' }}" href="{{ route('contact')}}">Contact</a>
        </li>       
      </ul>
    </div>
  </nav>