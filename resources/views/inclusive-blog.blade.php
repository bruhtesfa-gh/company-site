<div class="row gy-4">
    @foreach ($blogs as $blog)
    <div class="col-lg-4">
        <article>
            <div class="post-img">
                <img src="{{"http://fejleszto-tech.com/" . $blog->image}}" alt="blog image" class="img-fluid">
            </div>
            <p class="post-category">{{$blog->title}}</p>
            <h2 class="title">
                <a href="{{route('blogs.show' , $blog->id)}}">{{$blog->subtitle}}</a>
            </h2>
            <div class="d-flex align-items-center">
                <div class="post-meta">
                    <p class="post-author">{{$blog->post_man}}</p>
                    <p class="post-date">
                        <time
                            datetime="{{$blog->created_at->format('Y-m-d')}}">{{$blog->created_at->format('M d, Y')}}</time>
                    </p>
                </div>
            </div>
        </article>
    </div>
    @endforeach
    <!-- End post list item -->

    {{-- <div class="col-lg-4">
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
    </div><!-- End post list item --> --}}

</div>