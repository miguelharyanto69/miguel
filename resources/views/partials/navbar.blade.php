<!-- <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
  <img src="img/logo.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="text-white text-xl font-semibold " href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="text-white text-xl font-semibold " href="/news">News</a>
      </li>
    <li class="nav-item">
        <a class="text-white text-xl font-semibold }}" href="/movies">Movies</a>
    </li>
    <li class="nav-item">
        <a class="text-white text-xl font-semibold '' }}" href="/community">Community</a>
    </li>
    <li class="nav-item">
        <a class="text-white text-xl font-semibold  }}" href="/signin">Sign in</a>
    </li>
    </ul>
  </div>
  </div>
</nav>

<style>
    .navbar{
        height: 110px;
        background-image: url('img/navbar-bg.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
  
    }

    .text-white text-xl font-semibold{
        font-size: 20px;
        margin-left: 20px; 
    }
</style> -->

<nav style="
  background-image:url('img/navbar-bg.png');
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
  height:110px;
" class="w-full px-14 flex items-center justify-between absolute top-0 left-0">
    <a href="/" class="cursor-pointer">
       <img src="{{ url('img/logo.png') }}">
  </a>
  <ul class="flex items-center gap-x-9">
      <li class="nav-item">
        <a class="text-white text-xl font-semibold" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="text-white text-xl font-semibold" href="/news">News</a>
      </li>
    <li class="nav-item">
        <a class="text-white text-xl font-semibold" href="/movies">Movies</a>
    </li>
    <li class="nav-item">
        <a class="text-white text-xl font-semibold" href="/community">Community</a>
    </li>
    <li class="nav-item">
        <a class="text-white text-xl font-semibold " href="/signin">Sign in</a>
    </li>
  </ul>
  </nav>