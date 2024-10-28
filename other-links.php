
    
    <link rel="stylesheet" href="slider-style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" > -->
  

    
    <div class="container slider">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center font-weight-bold head"></h2>
                    <section class="customer-logos slider">
                        <div class="slide"><img src="images/btr-logo.png" alt="logo"></div>
                        <div class="slide"><img src="images/msme.png" alt="logo"></div>
                        <div class="slide"><img class="support" src="images/iti.png" alt="logo"></div>
                        <div class="slide"><img src="images/make.png" alt="logo"></div>
                        <div class="slide"><img src="images/btrseed.png" alt="logo"></div>
                        <div class="slide"><img src="images/assam.jpeg" alt="logo"></div>
                        <div class="slide"><img src="images/75_logo.png" alt="logo"></div>
                        <!-- <div class="slide"><img src="images/uber.png" alt="logo"></div> -->
                        <!-- <div class="slide"><img src="images/youtube.png" alt="logo"></div> -->
                    </section>
            </div>
        </div>
    </div>

    

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
$(document).ready(function(){
    $('.customer-logos.slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 360, // New breakpoint for smaller mobile devices
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });
});
</script>
