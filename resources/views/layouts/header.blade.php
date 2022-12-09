<!-- Header Section -->
<header id="header" class="single-page-header header d-flex align-items-center">
    <div class="container container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <h1><span>Fe</span>jlesztő<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{route('services.index')}}">Services</a></li>
                <li><a href="{{route('projects.index')}}">Projects</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Projects</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="project-details.html">Project Details</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{route('about-us.index')}}">About</a></li>
                <!-- <li><a href="packages.html">Pricing</a></li> -->
                <li><a href="{{route('blogs.index')}}">Blogs</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li class="dropdown"><a href="#"><span>All Pages</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <!-- <li><a href="login.html">Login</a></li> -->
                        <!-- <li><a href="register.html">Signup</a></li> -->
                        <li><a href="{{route('faqs.index')}}">FAQs</a></li>
                        <li><a href="{{route('teams.index')}}">Team</a></li>
                        <!-- <li><a href="{{route('blogs.index')}}">Blogs</a></li> -->
                        <!-- <li><a href="blogs-details.html">Blog Details</a></li> -->
                        <!-- <li><a href="coming-soon.html">Coming Soon</a></li> -->
                        <li><a href="{{route('terms.index')}}">Terms & Conditions</a></li>
                        <li><a href="{{route('policies.index')}}">Privacy Policy</a></li>
                        @guest
                        @if (Route::has('register'))
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <!-- <li><a href="sample.html">Sample Page</a></li> -->
                    </ul>
                </li>
                <li><a href="{{route('contact-us.index')}}" class="main-button">Contact</a></li>
            </ul>
        </nav><!-- navbar-->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
<!-- End Header -->