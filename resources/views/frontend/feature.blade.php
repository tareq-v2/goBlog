@extends('frontend.master')
@section('content')
<div class="row">
    <div class="col-md-5 col-sm-8 mb-5">
        <form action="#" method="post" id="search-form"
            class="d-flex align-items-center bg-color position-relative">
            <input type="search" name="search" class="form-control bg-transparent h-100"
                placeholder="Search Here">
            <button type="submit"
                class="search__btn border-0 bg-transparent px-3 py-3 position-absolute"><i
                    class="fas fa-search search__icon text-white"></i></button>
        </form>
    </div>
    <div class="col-lg-12 mb-5">
        <div class="category bg-color">
            <div class="row">
                <div class="col-lg-5 category__detail">
                    <h1 class="h1">Art And Photography</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.html"
                                    class="breadcrumb-link hover-color transition-400ms">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categore</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h3 class="h3">More Categores:</h3>
                    <div class="category__items text-capitalize">
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">non
                            quiens</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">adicing
                            enim</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">quis
                            consect</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">aute
                            non</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">labois
                            except</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">labore
                            nulla</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">non
                            quiens</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">adicing
                            enim</a>
                        <a href="#"
                            class="category__link hover-color transition-400ms d-inline-block p-2">adicing
                            enim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <!-- Blog -->
        <article class="card bg-transparent border-0 mb-6">
            <a href="single-blog.html" class="d-inline-block">
                <img src="assets/images/blog1.png" alt="blog1" class="w-100">
            </a>
            <div class="card-body p-0">
                <a href="single-blog.html" class="d-inline-block">
                    <h2 class="h2">Id reprehrenderit mollit in tempor naid incididunt cupidatat
                        consectetura</h2>
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
                <img src="assets/images/blog2.png" alt="blog2" class="w-100">
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
                <img src="assets/images/blog3.png" alt="blog3" class="w-100">
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
        <!-- Blog -->
        <article class="card bg-transparent border-0 mb-6">
            <a href="single-blog.html" class="d-inline-block">
                <img src="assets/images/sideBigB1.png" alt="sideBigB1" class="w-100">
            </a>
            <div class="card-body p-0">
                <a href="single-blog.html" class="d-inline-block">
                    <h2 class="h2">Occaecat ut elit voluptate on nisi est nisi euro occaecat</h2>
                </a>
                <ul class="blog-meta list-unstyled my-4">
                    <li class="meta-list mr-4 d-inline-block text-white"><i
                            class="fas fa-clock icon"></i>24 APRIL, 2016</li>
                    <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                            href="category.html"
                            class="blog__category hover-color transition-400ms text-white">Photography</a>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt leo
                    mi, viverra urna. Arcu risus, condimentum ut vulputate cursus porttitor turpis in.
                    Diam
                    egestas nec</p>
                <a href="single-blog.html"
                    class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                    More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
            </div>
        </article>
        <article class="card bg-transparent border-0 mb-6">
            <a href="single-blog.html" class="d-inline-block">
                <img src="assets/images/sideBigB2.png" alt="sideBigB2" class="w-100">
            </a>
            <div class="card-body p-0">
                <a href="single-blog.html" class="d-inline-block">
                    <h2 class="h2">Exercitation ipsuam magndea enim cillum nulla utborses</h2>
                </a>
                <ul class="blog-meta list-unstyled my-4">
                    <li class="meta-list mr-4 d-inline-block text-white"><i
                            class="fas fa-clock icon"></i>24 APRIL, 2016</li>
                    <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                            href="category.html"
                            class="blog__category hover-color transition-400ms text-white">Photography</a>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt leo
                    mi, viverra urna. Arcu risus, condimentum ut vulputate cursus porttitor turpis in.
                    Diam
                    egestas nec</p>
                <a href="single-blog.html"
                    class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                    More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
            </div>
        </article>
        <article class="card bg-transparent border-0 mb-6">
            <a href="single-blog.html" class="d-inline-block">
                <img src="assets/images/sideBigB3.png" alt="sideBigB3" class="w-100">
            </a>
            <div class="card-body p-0">
                <a href="single-blog.html" class="d-inline-block">
                    <h2 class="h2">Consequat exercitation nova labore fugiat sint exercita.</h2>
                </a>
                <ul class="blog-meta list-unstyled my-4">
                    <li class="meta-list mr-4 d-inline-block text-white"><i
                            class="fas fa-clock icon"></i>24 APRIL, 2016</li>
                    <li class="meta-list mr-4 d-inline-block"><i class="fas fa-list-alt icon"></i><a
                            href="category.html"
                            class="blog__category hover-color transition-400ms text-white">Photography</a>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt leo
                    mi, viverra urna. Arcu risus, condimentum ut vulputate cursus porttitor turpis in.
                    Diam
                    egestas nec</p>
                <a href="single-blog.html"
                    class="theme-btn hover-color transition-400ms text-white d-inline-flex align-items-center">Read
                    More<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></a>
            </div>
        </article>
        <!-- /Blog -->
    </div>
</div>
@endsection
