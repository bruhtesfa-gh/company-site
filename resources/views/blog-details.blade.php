@extends('layouts.main')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Blog Details</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="/">Home</a></li>
                                <li>{{$blog->subtitle}}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/blogs-details.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <section class="single-page">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="title">
                        <a href="blog-details.html">{{$blog->subtitle}}</a>
                    </h2>
                    <div class="d-flex align-items-center details-post-data">
                        <div class="post-meta d-flex">
                            <p class="post-author">{{$blog->post_man}}</p>
                            <p class="post-sperator"> - </p>
                            <p class="post-date">
                                <time datetime="2022-01-01">{{$blog->created_at->format('M d, Y')}}</time>
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="col-lg-12">
                        <img src="{{"http://127.0.0.1:8000/" . $blog->image}}" class="img-fluid mb-4" alt="">
                    </div>
                    <p>
                        {{$blog->discription}}
                    </p>


                    <div class="d-flex justify-content-between mt-20">
                        <a href="{{ ($blog->id - 1) > 0 ? route('blogs.show' , $blog->id - 1) : "#"}}"
                            data-text="Send Message" class="fill-btn">Previos Post</a>
                        <a href="{{ ($blog->id + 1) <= $max_post ? route('blogs.show' , $blog->id + 1) : "#"}}"
                            data-text="Send Message" class="fill-btn">Next Post</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidbar">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <hr />
                        <h3>Top Posts</h3>
                        <ul>
                            @foreach ($latests as $latest_blog)
                            <li>
                                <a href="{{route('blogs.show' , $latest_blog->id)}}">
                                    <i class="bi bi bi-arrow-right-square-fill"></i> {{$latest_blog->subtitle}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- - - - - - - - -  Recent Blog Posts Section - - - - - - - -  -->
    {{-- <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Most Recent Posts</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="assets/images/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>
                        <p class="post-category">Domain & Hosting</p>
                        <h2 class="title">
                            <a href="blog-details.html">How to host website on any hosting provider?</a>
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
                            <a href="blog-details.html">How to create add on google adwords?</a>
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
                            <a href="blog-details.html">What is digital marketing and why is important?</a>
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

            </div><!-- End recent posts list -->

        </div>
    </section> --}}
    <!-- End Recent Blog Posts Section -->

</main>
@endsection