<div id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($projects as $key => $item)
                    <li data-filter="{{'.filter-' . str_replace(" " , "-" , strtolower($key)) }}">{{$key}}</li>
                    @endforeach
                </ul><!-- End Portfolio Filters -->
            </div>

            <div class="row gy-4 portfolio-container">
                @foreach ($projects as $key => $subProjects)
                @foreach ($subProjects as $pro)
                <div
                    class="col-xl-4 col-md-6 portfolio-item {{'filter-' . str_replace(" " , "-" , strtolower($pro->category)) }}">
                    <div class="portfolio-wrap">
                        <a href="{{"http://fejleszto-tech.com/" . $pro->image1}}" data-gallery="portfolio-gallery-app"
                            class="glightbox">
                            <img src="{{"http://fejleszto-tech.com/" . $pro->image1}}" class="img-project" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="project-details.html" title="More Details">{{$pro->title}}</a></h4>
                            <div class="project-deatils-aside">
                                <div class="portfolio-details">
                                    <ul>
                                        <li><strong>Category</strong> <span>{{$pro->category}}</span></li>
                                        <li><strong>Client</strong> <span>{{$pro->client}}</span></li>
                                        <li><strong>Project date</strong> <span>{{$pro->end_date}}</span></li>
                                        <li><strong>Project URL</strong> <a
                                                href="{{$pro->link == null ? '#' : $pro->link}}">{{$pro->link == null ? 'Private Project' : $pro->link}}</a>
                                        </li>
                                    </ul>
                                </div>
                                @foreach ($pro->testimonials as $item)
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        {{$item->testimony}}
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <div>
                                        <img src="{{"http://fejleszto-tech.com/" . $item->image}}"
                                            class="testimonial-img" alt="testimony image">
                                        <h3>{{$item->name}}</h3>
                                        <h4>{{$item->career}}</h4>
                                    </div>
                                </div>
                                @endforeach

                                <div class="project-btn"><a href="{{route('projects.show' , $pro->id)}}"
                                        class="fill-btn">View
                                        Project</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</div>