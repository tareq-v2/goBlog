<!-- Navbar -->
<nav class="navbar custom-navbar navbar-expand-md sticky-top">
    <!-- Brand Logo -->
    <a class="navbar-brand" href="{{ route('root') }}">
        <img src="{{ asset('uploads/generalSettings') }}/{{ generalsettings()->logo }}" alt="logo" class="w-100">
    </a>
    <!-- /Brand Logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('root') }}"
                    class="nav-link hover-color transition-400ms text-white">Home</a></li>
            <li class="nav-item"><a href="{{ route('about') }}"
                    class="nav-link hover-color transition-400ms text-white">About</a>
            </li>
            <li class="nav-item"><a href="{{ route('feature') }}"
                    class="nav-link hover-color transition-400ms text-white">Feature</a>
            </li>
            <li class="nav-item"><a href="{{ route('contact') }}"
                    class="nav-link hover-color transition-400ms text-white">Contact</a>
            </li>
            <li class="nav-item"><a href="{{ route('privacy') }}"
                    class="nav-link hover-color transition-400ms text-white">Privecy
                    Policy</a></li>
            <li class="nav-item">
                <div class="select-wrapper nav-select-wrapper position-relative">
                    <select class="custom-select rounded-0 bg-transparent text-white border-white mt-3"
                        id="inputGroupSelect01">
                        <option value="1" selected class="bg-color">English</option>
                        <option value="2" class="bg-color">French</option>
                        <option value="3" class="bg-color">Bangla</option>
                    </select>
                </div>
            </li>
        </ul>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item bg-transparent border-0 p-0"><a href="https://www.facebook.com/"
                    class="list-group-link hover-color transition-400ms text-white" target="_blank"><i
                        class="fab fa-facebook-f"></i></a></li>
            <li class="list-group-item bg-transparent border-0 p-0"><a href="https://dribbble.com/"
                    class="list-group-link hover-color transition-400ms text-white" target="_blank"><i
                        class="fab fa-dribbble"></i></a></li>
            <li class="list-group-item bg-transparent border-0 p-0"><a href="https://www.behance.net/"
                    class="list-group-link hover-color transition-400ms text-white" target="_blank"><i
                        class="fab fa-behance"></i></a></li>
            <li class="list-group-item bg-transparent border-0 p-0"><a href="https://www.linkedin.com/"
                    class="list-group-link hover-color transition-400ms text-white" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </div>
</nav>
<!-- /Navbar -->
