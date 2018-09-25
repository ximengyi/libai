<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--/reviews-->
<div id="review" class="reviews agile-1">
    <div class="test-monials" id="testimonials">
        <h3 class="tittle">Testimonials</h3>

            <!--//screen-gallery-->
            <div class="sreen-gallery-cursual">
                <!-- required-js-files-->
                <link href="css/owl.carousel.css" rel="stylesheet">
                <script src="js/owl.carousel.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            items : 1,
                            lazyLoad : true,
                            autoPlay : true,
                            navigation : false,
                            navigationText :  false,
                            pagination : true,
                        });
                    });
                </script>
                <!--//required-js-files-->
                <div id="owl-demo" class="owl-carousel">
                    <div class="item-owl">
                        <div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <p><img src="images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="images/right-quotes.png" alt=""></p>
                            <img src="images/t3.jpg" class="img-responsive" alt=""/>
                            <h5>Henry</h5>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <p> <img src="images/left-quotes.png" alt="">Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<img src="images/right-quotes.png" alt=""></p>
                            <img src="images/t2.jpg" class="img-responsive" alt=""/>
                            <h5>Smith</h5>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <p><img src="images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="images/right-quotes.png" alt=""></p>
                            <img src="images/t1.jpg" class="img-responsive" alt=""/>
                            <h5>Steave</h5>
                        </div>
                    </div>
                </div>
                <!--//screen-gallery-->
            </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!--//reviews-->