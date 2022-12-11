<div class="row gy-4">
    @foreach ($teams as $team)
    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
            <img src="{{"http://fejleszto-tech.com/" . $team->image}}" class="img-fluid" alt="">
            <div class="social">
                @foreach ($team->contact_adds as $social)
                <a href="{{$social->url}}"><i class="{{"bi bi-" . $social->media}}"></i></a>
                @endforeach
            </div>
            <h4>{{$team->user->name}}</h4>
            <span>{{$team->career}}</span>
        </div>
    </div>
    @endforeach

    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
            <img src="assets/images/team/team-2.jpg" class="img-fluid" alt="">
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
            </div>
            <h4>Sani Awesome</h4>
            <span>Social Media</span>
        </div>
    </div><!-- End Team Member -->

    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
            <img src="assets/images/team/team-3.jpg" class="img-fluid" alt="">
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
            </div>
            <h4>Andrio Willi</h4>
            <span>Content Writer</span>
        </div>
    </div><!-- End Team Member -->

    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
            <img src="assets/images/team/team-4.jpg" class="img-fluid" alt="">
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
            </div>
            <h4>Afa Jonson</h4>
            <span>Business Manager</span>
        </div>
    </div><!-- End Team Member -->
</div>