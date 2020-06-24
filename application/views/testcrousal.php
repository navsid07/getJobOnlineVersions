<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<style>
   
   h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

</style>


 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        autoPlay:true
    });
});
</script>

<script type="text/javascript">
   $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

<div class="container">
  <h2>Our  Partners/ Our Clients</h2>

   <section class="customer-logos slider">
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
      <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>
   
<h2><a href="http://www.webcoderskull.com" target="_blank">http://www.webcoderskull.com</a></h2>
</div>

   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider1" class="owl-carousel">

                  
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>
                      <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>
                      <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>
                      <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>

                      <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>
                      <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>
                      <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>
                    </div>
                 </div>
              </div>
           </div>
