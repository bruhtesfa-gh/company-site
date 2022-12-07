@extends('layouts.main')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Sample Page</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Sample Page</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/common-page.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <section class="single-page">
        <div class="container" data-aos="fade-up">
            <h1>Sub Heading h1</h1>
            <h2>Sub Heading h2</h2>
            <h3>Sub Heading h3</h3>
            <h4>Sub Heading h4</h4>
            <h5>Sub Heading h5</h5>
            <h6>Sub Heading h6</h6>
            <hr />
            <p>
                Simple Paragraph
            </p>
            <hr />
            <button type="submit" data-text="Send Message" class="fill-btn">Fill Button</button>
            <hr />
            <div class="search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fa fa-search"></i></button>
                </form>
            </div>
            <hr />
            <ul>
                <li><i class="bi bi bi-arrow-right-square-fill"></i> listing items</li>
                <li><i class="bi bi bi-arrow-right-square-fill"></i> listing items</li>
                <li><i class="bi bi bi-arrow-right-square-fill"></i> listing items</li>
                <li><i class="bi bi bi-arrow-right-square-fill"></i> listing items</li>
                <li><i class="bi bi bi-arrow-right-square-fill"></i> listing items</li>
            </ul>

            <p></p>

            <p>
                Large paragraphs ................. Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
                ratione sint. Sit quaerat ipsum dolorem.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Xonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a
                odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum
                dolorem.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Xonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
            </p>

        </div>
    </section>

</main>
@endsection