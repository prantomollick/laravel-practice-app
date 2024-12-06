@extends('site.layout')
@section('content')
<!-- # intro
================================================== -->
<section id="intro" class="s-intro">

    <div class="s-intro__bg"></div>

    <div class="row s-intro__content">
        <div class="column xl-12">

            <div class="s-intro__pretitle">Welcome to</div>
            <h1 class="s-intro__title">Maillard</h1>

            <p class="s-intro__desc lead">
            Allow us to lead you on a culinary journey, 
            exploring a myriad of flavors and introducing 
            you to new and exciting tastes. 
            </p>

        </div>                
    </div> <!-- s-intro__content -->     
    
    <div class="s-intro__scroll-down">
        <a href="#about" class="smoothscroll">
            <span class="scroll-text u-screen-reader-text">Scroll Down</span>
            <div class="scroll-icon">
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
            </div>
        </a>
    </div> <!-- s-intro__scroll-down -->

</section> <!-- end s-intro -->


<!-- # about
================================================== -->
<section id="about" class="s-about">

    <div class="row s-about__content">
        <div class="column xl-12 s-about__content-grid grid-block">    
            
            <div class="s-about__content-header section-header">
                <h2 class="text-display-title with-line">Our Story</h2>                        
                <div class="s-about__content-header-inner">
                    <p class="text-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ullam nobis ex ea laborum vitae, consequatur quae vel alias voluptate dolores, dolor ab at ratione.
                    </p>
                    
                    <div class="s-about__content-media">
                        <img class="s-about__media-big" 
                                src="images/home-about-img.jpg" 
                                srcset="images/home-about-img.jpg 1x, images/home-about-img@2x.jpg 2x" alt="">
                        <img class="s-about__media-small" 
                                src="images/home-about-img-small.jpg" 
                                srcset="images/home-about-img-small.jpg 1x, home-about-img-small@2x.jpg 2x" alt="">
                    </div>
                </div>
            </div> <!-- end s-about__content-header -->      
            
            <div class="s-about__content-main">

                <p class="attention-getter">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas explicabo 
                id debitis cupiditate cumque, error quia! Debitis cupiditate ipsa nihil labore,
                earum atque dolor quos saepe vero inventore, odit nam deleniti accusantium 
                omnis mollitia consequatur harum incidunt.
                </p>                        
                <p class="attention-getter">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                consequat. Duis aute irure dolor in reprehenderit. Ut enim ad minim     
                </p>
                <p class="attention-getter">
                Commodi recusandae labore sit. Perspiciatis omnis dolor dolores fuga iusto, 
                recusandae animi nisi consequuntur exercitationem id maxime earum pariatur 
                voluptas. Porro non quos quae tempora fuga quis sequi minus sed sint debitis 
                reiciendis, nostrum natus suscipit iusto odio.
                </p>                                            

                <div class="s-about__content-btn">
                    <a href="about.html" class="btn btn--stroke btn--medium u-fullwidth">Discover More</a>
                </div>

            </div> <!-- end s-about-content-main -->  

        </div> <!-- end s-about__content-grid -->
    </div> <!--end s-about__content -->            
    
</section> <!-- end s-about -->   


<!-- # menu block
================================================== -->
<section class="s-menublock">

    <div class="row s-menublock__top">    
        <div class="column xl-8 lg-12">

            <div class="s-menublock__content-header section-header">
                <h2 class="text-display-title with-line">Our Signature Dishes</h2>
                <p class="attention-getter">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis 
                aperiam est, laborum iure, delectus rerum impedit nisi, ducimus in excepturi 
                fugit nulla expedita vitae delectus rerum impedit laborum iure voluptate.
                </p>                  
            </div> <!-- end s-menublock__content-header --> 

        </div>
    </div> <!-- end s-menublock__top --> 

    <div class="row">
        <div class="column xl-12 menublock__slider-nav">
            <a href="menu.html" class="menu-link">Explore All Menu</a>

            <div class="menublock-buttons">
                <div class="menublock-btn-prev">
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z" fill-rule="nonzero"/></svg>
                </div>
                <div class="menublock-btn-next">
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                </div>
            </div>
        </div> <!-- end s-menublock__slider-nav -->
    </div>

    <div class="row s-menublock__slider-wrap">
        <div class="column xl-12">                     

            <div class="swiper-container s-menublock__slider">    
                <div class="swiper-wrapper">

                    <div class="s-menublock__slide swiper-slide">    
                        <div class="menublock-item">
                            <div class="menublock-item__thumb">
                                <img src="images/menu/steak.jpg" 
                                        srcset="images/menu/steak.jpg 1x, images/menu/steak@2x.jpg 2x" alt="">
                            </div>
                            <div class="menublock-item__text">
                                <h5>Grilled Sirloin Steak</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur.</p>
                            </div>
                            <div class="menublock-item__price-wrap">
                                <div class="menublock-item__price">
                                    <span>$</span>18
                                </div>
                            </div>
                        </div> <!-- end menublock-item -->
                    </div> <!-- end s-menublock__slide -->

                    <div class="s-menublock__slide swiper-slide">    
                        <div class="menublock-item">
                            <div class="menublock-item__thumb">
                                <img src="images/menu/pasta.jpg" 
                                        srcset="images/menu/pasta.jpg 1x, images/menu/pasta@2x.jpg 2x" alt="">
                            </div>
                            <div class="menublock-item__text">
                                <h5>Marinara Fettucine</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur.</p>
                            </div>
                            <div class="menublock-item__price-wrap">
                                <div class="menublock-item__price">
                                    <span>$</span>15
                                </div>
                            </div>
                        </div> <!-- end menublock-item -->
                    </div> <!-- end s-menublock__slide -->

                    <div class="s-menublock__slide swiper-slide">    
                        <div class="menublock-item">
                            <div class="menublock-item__thumb">
                                <img src="images/menu/toast.jpg" 
                                        srcset="images/menu/toast.jpg 1x, images/menu/toast@2x.jpg 2x" alt="">
                            </div>
                            <div class="menublock-item__text">
                                <h5>Egg Salad Avocado Toast</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur.</p>
                            </div>
                            <div class="menublock-item__price-wrap">
                                <div class="menublock-item__price">
                                    <span>$</span>10
                                </div>
                            </div>
                        </div> <!-- end menublock-item -->
                    </div> <!-- end s-menublock__slide -->

                    <div class="s-menublock__slide swiper-slide">    
                        <div class="menublock-item">
                            <div class="menublock-item__thumb">
                                <img src="images/menu/icecream.jpg" 
                                        srcset="images/menu/icecream.jpg 1x, images/menu/icecream@2x.jpg 2x" alt="">
                            </div>
                            <div class="menublock-item__text">
                                <h5>Vanilla Ice Cream</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur.</p>
                            </div>
                            <div class="menublock-item__price-wrap">
                                <div class="menublock-item__price">
                                    <span>$</span>4
                                </div>
                            </div>
                        </div> <!-- end menublock-item -->
                    </div> <!-- end s-menublock__slide -->

                    <div class="s-menublock__slide swiper-slide">    
                        <div class="menublock-item">
                            <div class="menublock-item__thumb">
                                <img src="images/menu/yogurt.jpg" 
                                        srcset="images/menu/yogurt.jpg 1x, images/menu/yogurt@2x.jpg 2x" alt="">
                            </div>
                            <div class="menublock-item__text">
                                <h5>Yogurt With Strawberries</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur.</p>
                            </div>
                            <div class="menublock-item__price-wrap">
                                <div class="menublock-item__price">
                                    <span>$</span>4
                                </div>
                            </div>
                        </div> <!-- end menublock-item -->
                    </div> <!-- end s-menublock__slide -->

                </div> <!-- end swiper-wrapper -->                      
            </div> <!-- end s-menublock__slider -->

        </div>
    </div> <!-- s-menublock__slider-wrap -->

</section> <!-- end s-menublock -->     


<!-- # testimonials
================================================== -->
<section id="testimonials" class="s-testimonials">

    <div class="row s-testimonials__content">
        <div class="column xl-12">

            <h3 class="s-testimonials__title text-center">Hear From Our Clients</h3>

            <div class="swiper-container s-testimonials__slider">    
                <div class="swiper-wrapper">

                    <div class="s-testimonials__slide swiper-slide">
                        <div class="s-testimonials__author">
                            <img src="images/avatars/user-02.jpg" alt="Author image" class="s-testimonials__avatar">
                            <cite class="s-testimonials__cite">
                                John Rockefeller
                                <span>Cleveland, Ohio</span>
                            </cite>
                        </div>
                        <p>
                        Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                        Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                        Laudantium quia consequatur molestias.
                        </p>
                    </div> <!-- end s-testimonials__slide -->
    
                    <div class="s-testimonials__slide swiper-slide">
                        <div class="s-testimonials__author">
                            <img src="images/avatars/user-03.jpg" alt="Author image" class="s-testimonials__avatar">
                            <cite class="s-testimonials__cite">
                                Andrew Carnegie
                                <span>Pittsburgh, Pennsylvania</span>
                            </cite>
                        </div>
                        <p>
                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                        Quasi voluptas eius distinctio. Atque eos maxime.
                        </p>
                    </div> <!-- end s-testimonials__slide -->
    
                    <div class="s-testimonials__slide swiper-slide">
                        <div class="s-testimonials__author">
                            <img src="images/avatars/user-01.jpg" alt="Author image" class="s-testimonials__avatar">
                            <cite class="s-testimonials__cite">
                                John Morgan
                                <span>New York City</span>
                            </cite>
                        </div>
                        <p>
                        Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                        Voluptatem dignissimos ut.
                        </p>
                    </div> <!-- end s-testimonials__slide -->

                    <div class="s-testimonials__slide swiper-slide">
                        <div class="s-testimonials__author">
                            <img src="images/avatars/user-06.jpg" alt="Author image" class="s-testimonials__avatar">
                            <cite class="s-testimonials__cite">
                                Henry Ford
                                <span>Dearborn, Michigan</span>
                            </cite>
                        </div>
                        <p>
                        Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                        quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                        Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                        </p>
                    </div> <!-- end s-testimonials__slide -->

                </div> <!-- end swiper-wrapper -->

                <div class="swiper-pagination"></div>

            </div> <!-- end s-testimonials__slider -->

        </div> <!-- end column -->
    </div> <!-- end s-testimonials__content -->

</section> <!-- end s-testimonials --> 


<!-- # gallery
================================================== -->
<section id="gallery" class="s-gallery">
    <div class="row s-gallery__inner">
        <div class="column xl-12">

            <div class="gallery-items grid-list-items">
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/gallery-01.jpg 1x, 
                                    images/gallery/gallery-01@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item-->
    
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-02.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-02.jpg" 
                            srcset="images/gallery/gallery-02.jpg 1x, 
                                    images/gallery/gallery-02@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-03.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-03.jpg" 
                            srcset="images/gallery/gallery-03.jpg 1x, 
                                    images/gallery/gallery-03@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-04.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-04.jpg" 
                            srcset="images/gallery/gallery-04.jpg 1x, 
                                    images/gallery/gallery-04@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-05.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-05.jpg" 
                            srcset="images/gallery/gallery-05.jpg 1x, 
                                    images/gallery/gallery-05@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-06.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-06.jpg" 
                            srcset="images/gallery/gallery-06.jpg 1x, 
                                    images/gallery/gallery-06@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-07.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-07.jpg" 
                            srcset="images/gallery/gallery-07.jpg 1x, 
                                    images/gallery/gallery-07@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-list-items__item">
                    <a href="images/gallery/large/l-gallery-08.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-08.jpg" 
                            srcset="images/gallery/gallery-08.jpg 1x, 
                                    images/gallery/gallery-08@2x.jpg 2x" alt="">
                    </a>
                </div> <!-- end gallery-items__item -->
            </div> <!-- end grid-list-items -->

        </div>
    </div> <!-- end s-gallery__inner -->
</section> <!-- end s-gallery --> 

@endsection