@extends('layouts.main')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Latest Blogs</h2>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>blogs/news</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/blogs.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <section class="single-page">
        <div class="container" data-aos="fade-up">
            <!-- - - - - - - - -  Recent Blog Posts Section - - - - - - - -  -->
            <div id="recent-posts" class="recent-posts">
                <div class="container" data-aos="fade-up">
                    @include('inclusive-blog')
                    <!-- End recent posts list -->
                </div>
            </div><!-- End Recent Blog Posts Section -->
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <div class="pages">
                <a class="page">1</a>
                <a class="page">2</a>
                <a class="page">3</a>
                <a class="page active">4</a>
                <a class="page">5</a>
                <a class="page">6</a>
                <a class="page">...</a>
                <a class="page">... ...</a>
                <a class="page">100</a>
            </div>
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        <!-- Pagination -->
    </section>
</main>
@endsection