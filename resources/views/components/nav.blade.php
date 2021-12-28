 
    <!-- <link rel="stylesheet" href="nav.css" /> -->
    <link href="<?php echo url('/'); ?>/css/nav.css" rel="stylesheet">

    <header class="fixed">
      <div id="brand"><a href="/">EntreprenGamify</a></div>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/">Products</a></li>
          <li><a href="/">About</a></li>

          @if (Route::has('login'))
                        <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                            @auth
                            <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                            @else
                            <li id="login"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                <li id="signup"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                @endif
                            @endauth
                        </div>
                    @endif
          <!-- <li id="login"><a href="/login" >Login</a></li>
          <li id="signup"><a href="/signup">Signup</a></li> -->
        </ul>
      </nav>
      <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
          <li><a href="/home">Home</a></li>
          <li><a href="/products">Products</a></li>
          <li><a href="/about">About</a></li>
          @if (Route::has('login'))
                        <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                            @auth
                            <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                            @else
                            <li id="login"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                <li id="signup"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                @endif
                            @endauth
                        </div>
                    @endif
          <!-- <li id="login"><a href="/login" >Login</a></li>
          <li id="signup"><a href="/signup">Signup</a></li> -->
        </ul>
      </div>
    </header>
    <!-- <script src="nav.js"></script> -->
    <script src="<?php echo url('/'); ?>/js/nav.js"></script>
