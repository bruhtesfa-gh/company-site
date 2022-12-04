@extends('layouts.app')

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
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <article>
                                <div class="post-img">
                                    <img src="assets/images/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>
                                <p class="post-category">Domain & Hosting</p>
                                <h2 class="title">
                                    <a href="blogs-details.html">How to host website on any hosting provider?</a>
                                </h2>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author">William Bla</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Feb 1, 2022</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-4">
                            <article>
                                <div class="post-img">
                                    <img src="assets/images/blog/blog-2.jpg" alt="" class="img-fluid">
                                </div>
                                <p class="post-category">Advertisement</p>
                                <h2 class="title">
                                    <a href="blogs-details.html">How to create add on google adwords?</a>
                                </h2>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author">Jobi Ret</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Oct 5, 2022</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-4">
                            <article>
                                <div class="post-img">
                                    <img src="assets/images/blog/blog-3.jpg" alt="" class="img-fluid">
                                </div>
                                <p class="post-category">Marketing</p>
                                <h2 class="title">
                                    <a href="blogs-details.html">What is digital marketing and why is important?</a>
                                </h2>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author">Main Dow</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Dec 22, 2022</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-4">
                            <article>
                                <div class="post-img">
                                    <img src="assets/images/blog/blog-4.jpg" alt="" class="img-fluid">
                                </div>
                                <p class="post-category">Mobile Phone</p>
                                <h2 class="title">
                                    <a href="blogs-details.html">WhyThe Iphone 20 is most selling phone in the
                                        world?</a>
                                </h2>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author">Main Dow</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jan 22, 2022</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-4">
                            <article>
                                <div class="post-img">
                                    <img src="assets/images/blog/blog-5.jpg" alt="" class="img-fluid">
                                </div>
                                <p class="post-category">Social Media</p>
                                <h2 class="title">
                                    <a href="blogs-details.html">How to you can learn any skill from youtube?</a>
                                </h2>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author">Main Dow</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">October 22, 2022</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-4">
                            <article>
                                <div class="post-img">
                                    <img src="assets/images/blog/blog-6.jpg" alt="" class="img-fluid">
                                </div>
                                <p class="post-category">Jobs</p>
                                <h2 class="title">
                                    <a href="blogs-details.html">How to get job in 30 days? Know 30 Tips</a>
                                </h2>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author">Main Dow</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Dec 29, 2022</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                    </div><!-- End recent posts list -->

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