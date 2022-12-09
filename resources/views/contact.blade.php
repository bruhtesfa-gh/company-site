@extends('layouts.main')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Contact 24/7</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/contact.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <div class="single-page">
        <!-- Start Contact Section -->
        <div id="contact" class="contact-section section">
            @include('inclusive-contact-us')
        </div>
        <!-- End Contact Section -->
    </div>
    <div class="container mb-5">
        <div class="map-area">
            <div class="map-content">
                <div class="map-canvas" id="contact-map"></div>
            </div>
        </div>
    </div>

</main>
@endsection

@push('js')
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkgUgM_8LYsqEIEvgBI8u7BdH2k4cZ8QU&callback=initMap&v=weekly"
    async>
</script>

<script>
    $(document).ready(function () {
        initMap();
    });
    let map , infoWindow;
    function initMap() {
        let center = { lat: 11.594584275310048, lng: 37.388413181713794 };
        map = new google.maps.Map(document.getElementById("contact-map"), {
            center: center,
            zoom: 15,
            scrollwheel: false,
        });
        let marker = new google.maps.Marker({
            position: center,
            map: map,
            draggable: false
        });
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(
        browserHasGeolocation
          ? "Error: The Geolocation service failed."
          : "Error: Your browser doesn't support geolocation."
      );
      infoWindow.open(map);
    }
</script>
@endpush