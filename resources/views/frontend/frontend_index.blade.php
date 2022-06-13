@extends('frontend.master')
@section('content')
    <div class="row">
        <div class="col-lg-7">
            <!-- Blog -->
            <article class="card bg-transparent border-0 mb-6">
                <a href="single-blog.html" class="d-inline-block">
                    <img src="{{ asset('assets/') }}/images/blog1.png" alt="blog1" class="w-100">
                </a>
                <div class="card-body p-0">
                    <a href="single-blog.html" class="d-inline-block">
                        <h2 class="h2">Id reprehrenderit mollit in tempor naid incididunt cupidatat
                            consectetura</h2>
                    </a>
                    <ul class="blog-meta list-unstyled my-4 my-4">
                        <li class="meta-list mr-4 d-inline-block text-white"><i
                                class="fas fa-clock icon"></i>24 APRIL, 2016</li>
                        <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                                href="category.html"
                                class="blog__category hover-color transition-400ms text-white">Photography</a>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt
                        leo mi, viverra urna. Arcu velit risus, condimentum ut vulputate cursus porttitor
                        turpis in. Diam egestas nec massa, habitasse. Tincidt dui.</p>
                    <a href="single-blog.html"
                        class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                        More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
                </div>
            </article>
            <article class="card bg-transparent border-0 mb-6">
                <a href="single-blog.html" class="d-inline-block">
                    <img src="{{ asset('assets/') }}/images/blog2.png" alt="blog2" class="w-100">
                </a>
                <div class="card-body p-0">
                    <a href="single-blog.html" class="d-inline-block">
                        <h2 class="h2">excepteur ado Do minim duis laborum Fugiat ea labore qui veniam
                            labore</h2>
                    </a>
                    <ul class="blog-meta list-unstyled my-4">
                        <li class="meta-list mr-4 d-inline-block text-white"><i
                                class="fas fa-clock icon"></i>24 APRIL, 2016</li>
                        <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                                href="category.html"
                                class="blog__category hover-color transition-400ms text-white">Photography</a>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt
                        leo mi, viverra urna. Arcu velit risus, condimentum ut vulputate cursus porttitor
                        turpis in. Diam egestas nec massa, habitasse. Tincidt dui.</p>
                    <a href="single-blog.html"
                        class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                        More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
                </div>
            </article>
            <article class="card bg-transparent border-0 mb-6">
                <a href="single-blog.html" class="d-inline-block">
                    <img src="{{ asset('assets/') }}/images/blog3.png" alt="blog3" class="w-100">
                </a>
                <div class="card-body p-0">
                    <a href="single-blog.html" class="d-inline-block">
                        <h2 class="h2">Aliquip excepteur cilludm irure laboris sint ea qui ex amet id. Ex
                            nulla etno</h2>
                    </a>
                    <ul class="blog-meta list-unstyled my-4">
                        <li class="meta-list mr-4 d-inline-block text-white"><i
                                class="fas fa-clock icon"></i>24 APRIL, 2016</li>
                        <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                                href="category.html"
                                class="blog__category hover-color transition-400ms text-white">Photography</a>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt
                        leo mi, viverra urna. Arcu velit risus, condimentum ut vulputate cursus porttitor
                        turpis in. Diam egestas nec massa, habitasse. Tincidt dui.</p>
                    <a href="single-blog.html"
                        class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                        More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
                </div>
            </article>
            <!-- /Blog -->
        </div>
        <div class="col-lg-5">
            <!-- About Card -->
            <div class="card bg-transparent border-0 text-center mb-6">
                <a href="about.html" class="d-inline-block">
                    <img src="{{ asset('assets/') }}/images/smallProfile.png" alt="smallProfile"
                        class="card-img rounded-circle">
                </a>
                <div class="card-body">
                    <a href="about.html" class="d-inline-block">
                        <h2 class="h2 border-b text-capitalize mb-4">About Me</h2>
                    </a>
                    <p>Lorem ipsum dolor sit coectetur adiing elit. Tincidunfywjt leo mi,
                        viearra urna. Arcu ve isus, condimentum ut vulpate cursus por turpis.</p>
                    <ul class="list-group list-group-horizontal justify-content-center">
                        <li class="list-group-item bg-transparent border-0 p-0"><a
                                href="https://www.facebook.com/"
                                class="list-group-link hover-color transition-400ms text-white"
                                target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-group-item bg-transparent border-0 p-0"><a
                                href="https://dribbble.com/"
                                class="list-group-link hover-color transition-400ms text-white"
                                target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        <li class="list-group-item bg-transparent border-0 p-0"><a
                                href="https://www.behance.net/"
                                class="list-group-link hover-color transition-400ms text-white"
                                target="_blank"><i class="fab fa-behance"></i></a></li>
                        <li class="list-group-item bg-transparent border-0 p-0"><a
                                href="https://www.linkedin.com/"
                                class="list-group-link hover-color transition-400ms text-white"
                                target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /About Card -->
            <!-- Subscribe Card -->
            <div class="card Subscribe text-center mb-6 bg-color border-0">
                <div class="card-body p-0">
                    <h2 class="h2 border-b text-capitalize d-inline-block mb-4">Subscribe Blog</h2>
                    <p>Lorem ipsum dolor sit coectetur elit. Tincidu nfywjt leo mi, urna.
                        Arcu ve isus, condimentum ut vulpate cursus por.</p>
                    <form action="#" method="post" id="subscribe-form"
                        class="d-flex flex-column align-items-center mt-3">
                        <input class="form-control bg-transparent pl-4 pr-4" type="email" name="email"
                            placeholder="Your Email Adress" required>
                        <button type="submit"
                            class="theme-btn hover-color transition-400ms border-0 theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Subscribe
                            Now<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></button>
                    </form>
                </div>
            </div>
            <!-- /Subscribe Card -->
            <div class="text-center mb-3">
                <h2 class="h2 border-b text-capitalize d-inline-block mb-4">Featured Posts</h2>
            </div>
            <!-- Blog -->
            <article class="card bg-transparent border-0 mb-6">
                <a href="single-blog.html" class="d-inline-block">
                    <img src="{{ asset('assets/') }}/images/sideB2.png" alt="sideB2" class="w-100">
                </a>
                <div class="card-body p-0">
                    <a href="single-blog.html" class="d-inline-block">
                        <h2 class="h2">excepteur ado Do minimal duis laborum Fugiat ea</h2>
                    </a>
                    <ul class="blog-meta list-unstyled my-4">
                        <li class="meta-list mr-4 d-inline-block text-white"><i
                                class="fas fa-clock icon"></i>24
                            APRIL, 2016</li>
                        <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                                href="category.html"
                                class="blog__category hover-color transition-400ms text-white">Photography</a>
                        </li>
                    </ul>
                    <a href="single-blog.html"
                        class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                        More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
                </div>
            </article>
            <article class="card bg-transparent border-0 mb-6">
                <a href="single-blog.html" class="d-inline-block">
                    <img src="{{ asset('assets/') }}/images/sideB3.png" alt="sideB3" class="w-100">
                </a>
                <div class="card-body p-0">
                    <a href="single-blog.html" class="d-inline-block">
                        <h2 class="h2">excepteur ado Do minimal duis laborum Fugiat ea</h2>
                    </a>
                    <ul class="blog-meta list-unstyled my-4">
                        <li class="meta-list mr-4 d-inline-block text-white"><i
                                class="fas fa-clock icon"></i>24
                            APRIL, 2016</li>
                        <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                                href="category.html"
                                class="blog__category hover-color transition-400ms text-white">Photography</a>
                        </li>
                    </ul>
                    <a href="single-blog.html"
                        class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                        More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
                </div>
            </article>
            <article class="card bg-transparent border-0 mb-6">
                <a href="single-blog.html" class="d-inline-block">
                    <img src="{{ asset('assets/') }}/images/sideB1.png" alt="sideB1" class="w-100">
                </a>
                <div class="card-body p-0">
                    <a href="single-blog.html" class="d-inline-block">
                        <h2 class="h2">excepteur ado Do minimal duis laborum Fugiat ea</h2>
                    </a>
                    <ul class="blog-meta list-unstyled my-4">
                        <li class="meta-list mr-4 d-inline-block text-white"><i
                                class="fas fa-clock icon"></i>24
                            APRIL, 2016</li>
                        <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                                href="category.html"
                                class="blog__category hover-color transition-400ms text-white">Photography</a>
                        </li>
                    </ul>
                    <a href="single-blog.html"
                        class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                        More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
                </div>
            </article>
            <!-- /Blog -->
        </div>
    </div>
@endsection
