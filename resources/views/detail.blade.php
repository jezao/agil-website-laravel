<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content ="width=device-width, initial-social=1">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- Description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with ready home page demos.">
    <!-- Page Title -->
    <title>Builder-Construction | MegaOne HTML5 Template</title>

    @vite('resources/css/app.css')

</head>
<body data-spy="scroll"  data-target="#megaone" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="center">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader End -->

@include('heading')

<!--Banner Start-->
<section class="page-title bg-overlay">
    <div class="container">
        <h2 class="hide-cursor">Projects Detail</h2>
        <ul class="page-breadcrumb link">
            <li><a href="../index-builder-construction.html#home"><span class="icon fas fa-home"></span>Home</a></li>
            <li><i class="las la-angle-double-right"></i><span class="d-inline">Projects Detail </span></li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--About Start-->
<section class="about_content">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="product-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center text-lg-left">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Estate</a></li>
                            <li class="breadcrumb-item"><a href="#">Bungalow</a></li>
                            <li class="breadcrumb-item"><a href="#">03012</a></li>
                        </ol>
                    </nav>
                    <div class="pro-detail-sec row">
                        <div class="col-12">
                            <h4 class="pro-heading text-center text-lg-left">Poinciana, Osceola County</h4>
                            <p class="pro-text text-center text-lg-left">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                        </div>
                    </div>
                    <div class="row product-list product-detail">

                        <div class="col-12 col-lg-6 product-detail-slider">
                            <div class="wrapper">
                                <div class="Gallery swiper-container img-magnifier-container" id="gallery">
                                    <div class="swiper-wrapper myimgs">
                                        <div class="swiper-slide"> <a href="../assets/images/detail-slider1.jpg" data-fancybox="1" title="Zoom In"><img class="myimage" src="../assets/images/detail-slider1.jpg" alt="gallery"/></a></div>
                                        <div class="swiper-slide"> <a href="../assets/images/detail-slider2.jpg" data-fancybox="2" title="Zoom In"><img class="myimage" src="../assets/images/detail-slider2.jpg" alt="thumnails"/></a></div>
                                        <div class="swiper-slide"> <a href="../assets/images/detail-slide3.jpg" data-fancybox="3" title="Zoom In"><img class="myimage" src="../assets/images/detail-slide3.jpg" alt="thumnails"/></a></div>

                                    </div>
                                </div>
                                <div class="Thumbs swiper-container" id="thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img src="../assets/images/detail-slider1.jpg" alt="thumnails"/></div>
                                        <div class="swiper-slide"> <img src="../assets/images/detail-slider2.jpg" alt="thumnails"/></div>
                                        <div class="swiper-slide"> <img src="../assets/images/detail-slide3.jpg" alt="thumnails"/></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 text-center text-lg-left">
                            <div class="product-single-price">
                                <p class="pro-description">Situated within close proximity to the onsite clubhouse this is a prime location land plot with great rental potential. Facilities available to the community residents include an exclusive club house</p>
                            </div>

                            <div class="product-checklist">
                                <ul>
                                    <li><i class="fas fa-check"></i> Powder Room With Wooden + Tiled flooring</li>
                                    <li><i class="fas fa-check"></i> Proper Security System</li>
                                    <li><i class="fas fa-check"></i> Satisfaction 100% Guaranteed</li>
                                </ul>
                            </div>

                            <div class="row product-quantity no-gutters">

                                <div class="col-12 col-lg-4 mb-2">
                                    <button class="btn standard-btn rounded-pill w-100" data-animation-duration="500" data-fancybox data-src="#animatedModal">Project Inquiry</button>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="product-tags-list">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><p class="d-inline">P-ID: <span><a href="#">03012</a></span></p></li>
                                        <li class="breadcrumb-item"><p class="d-inline">Categories: <a href="#">Bungalow</a><span class="comma-separtor">,</span><a href="#">USA</a></p></li>
                                        <li class="breadcrumb-item" aria-current="page"><p class="d-inline">Tags: <a href="#">Real Estate</a><span class="comma-separtor">,</span><a href="#">Housing</a></li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="share-product-details">
                                <ul class="share-product-icons">
                                    <li><p>Share Link:</p></li>
                                    <li><a href="#" class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#" class="linkedin-bg-hvr"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="instagram-bg-hvr"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 mt-4 mb-4">
                            <div class="row no-gutters product-all-details">

                                <ul class="col-12 nav nav-tabs" id="myTab" role="tablist">
                                    <li class="col-4 nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Project Details</a>
                                    </li>
                                    <li class="col-4 nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Additional Details</a>
                                    </li>
                                    <li class="col-4 nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customer Reviews  (2)</a>
                                    </li>
                                </ul>
                                <div class="col-12 tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="home-tab">
                                        <p class="product-tab-description text-center text-lg-left">This substantial land plot is great for investors or those wishing to relocate to Florida. The land plot has planning permission to build a spacious single family home on with private driveway and a double garage for residential use or long term rental.</p>
                                        <p class="product-tab-description text-center text-lg-left">Situated within close proximity to the onsite clubhouse this is a prime location land plot with great rental potential. Facilities available to the community residents include an exclusive club house, fitness centre & a swimming pool, as well as tennis and basketball courts, cycle paths and a lake fronted park.</p>

                                        <div class="google-map" id="map"></div>

                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <ul class="project-addtional-info">
                                                    <li><i class="fas fa-check"></i> <p>05 Bedrooms</p></li>
                                                    <li><i class="fas fa-check"></i> <p>06-Shower Tub Baths</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Powder Room</p></li>
                                                    <li><i class="fas fa-check"></i> <p>4-Car Parking </p></li>
                                                    <li><i class="fas fa-check"></i> <p>2 Big TV Lounge</p></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <ul class="project-addtional-info">
                                                    <li><i class="fas fa-check"></i> <p>Green Lush Lawn</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Wooden Floor</p></li>
                                                    <li><i class="fas fa-check"></i> <p>1-Store Rooms</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Wooden Work</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Wooden + Tiled flooring</p></li>
                                                </ul>
                                            </div>

                                            <div class="col-12 col-lg-4">
                                                <ul class="project-addtional-info">
                                                    <li><i class="fas fa-check"></i> <p>Washrooms with Imported Fitting</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Sitting Area and Bar B Q Area</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Roof Top</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Swimming pool</p></li>
                                                    <li><i class="fas fa-check"></i> <p>Proper Security System</p></li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane fade reviews" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                        <div class="media">
                                            <div class="row no-gutter">
                                                <div class="col-12 col-lg-2 p-0">

                                                    <div class="row no-gutters">
                                                        <div class="col-12 d-flex  justify-content-center">
                                                            <img src="../assets/images/user-1.jpg" alt="Generic placeholder image">
                                                        </div>
                                                        <div class="col-12 d-flex mt-2 justify-content-center">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 col-lg-10 p-0">
                                                    <div class="media-body ">
                                                        <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                        <h5 class="mb-2 text-center text-lg-left">Media heading</h5>
                                                        <p class="text-center text-lg-left">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="row no-gutter">
                                                <div class="col-12 col-lg-2 p-0">

                                                    <div class="row no-gutters">
                                                        <div class="col-12 d-flex  justify-content-center">
                                                            <img src="../assets/images/user-2.jpg" alt="Generic placeholder image">
                                                        </div>
                                                        <div class="col-12 d-flex mt-2 justify-content-center">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 col-lg-10 p-0">
                                                    <div class="media-body ">
                                                        <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                        <h5 class="mb-2 text-center text-lg-left">Media heading</h5>
                                                        <p class="text-center text-lg-left">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row pl-2 pr-2">
                                            <div class="col-12 d-flex mb-4 mt-3">
                                                <h5 class="text-nowrap">Add Review</h5>
                                                <hr class="w-100 ml-5"/>
                                            </div>
                                            <div class="col-12">
                                                <form class="getin_form border-form" id="register">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="text" class="form-control"  placeholder="Name*" required="" id="registerName">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="email" class="form-control" placeholder="Email*" required="" id="registerEmail">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-2 text-center text-lg-left">
                                                            <h5 class="text-nowrap">Your Rating</h5>
                                                        </div>
                                                        <div class="col-12 col-lg-10 text-center text-lg-left">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <!--                                                                            <label for="comment">Your Rating:</label>-->
                                                                <textarea class="form-control textareaclass" rows="5" id="comment" placeholder="Your Review"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-3">
                                                            <div class="form-group d-flex justify-content-center d-lg-block">
                                                                <button class="text-center btn standard-btn rounded-pill">Add Review</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="lastest_arrivals remove-margins">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1>other Projects</h1>
                </div>
                <div class="col-12 gallary-sec ">
                    <div class="lastest_featured_products owl-carousel owl-theme">
                        <!--image-1-->
                        <div class="item">
                            <a href="#">
                                <div class="card">
                                    <div class="image-holder-gallary hover-effects">
                                        <div class="Porject-overlay overlayTop"></div>
                                        <img class="card-img-top" src="../assets/images/gallery-3.png" alt="Card image cap">

                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--image-2-->
                        <div class="item">
                            <a href="#">
                                <div class="card">
                                    <div class="image-holder-gallary hover-effects">
                                        <div class="Porject-overlay overlayTop"></div>
                                        <img class="card-img-top" src="../assets/images/gallery-1.png" alt="Card image cap">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--image-3-->
                        <div class="item">
                            <a href="#">
                                <div class="card">
                                    <div class="image-holder-gallary hover-effects">
                                        <div class="Porject-overlay overlayTop"></div>
                                        <img class="card-img-top" src="../assets/images/gallery-2.png" alt="Card image cap">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--image-4-->
                        <div class="item">
                            <a href="#">
                                <div class="card">
                                    <div class="image-holder-gallary hover-effects">
                                        <div class="Porject-overlay overlayTop"></div>
                                        <img class="card-img-top" src="../assets/images/gallery-3.png" alt="Card image cap">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--image-5-->
                        <div class="item">
                            <a href="#">
                                <div class="card">
                                    <div class="image-holder-gallary hover-effects">
                                        <div class="Porject-overlay overlayTop"></div>
                                        <img class="card-img-top" src="../assets/images/gallery-2.png" alt="Card image cap">
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END LATEST ARRIVALS-->
</section>
<!--About End-->

<!--Footer Start-->
<footer class="footer-sec text-center">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <p class="company-about fadeIn">&copy; 2023 MegaOne. Made With Love By<a href="javascript:void(0);">Themesindustry</a></p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<div class="go-top"><i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>
<!--END SCROLL TOP-->

<!-- JavaScript -->
@vite('resources/js/app.js')


</body>
</html>