@extends('layouts.main')

@section('content')
    <div class="elementor">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <!-- Carousel wrapper -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-section-boxed">
                    <div class="elementor-container elementor-column-gap-default">
                        <div id="carouselBasicExample" class="carousel slide carousel-fade"
                             data-mdb-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button
                                    type="button"
                                    data-mdb-target="#carouselBasicExample"
                                    data-mdb-slide-to="0"
                                    class="active"
                                    aria-current="true"
                                    aria-label="Slide 1"
                                ></button>
                                <button
                                    type="button"
                                    data-mdb-target="#carouselBasicExample"
                                    data-mdb-slide-to="1"
                                    aria-label="Slide 2"
                                ></button>
                                <button
                                    type="button"
                                    data-mdb-target="#carouselBasicExample"
                                    data-mdb-slide-to="2"
                                    aria-label="Slide 3"
                                ></button>
                            </div>

                            <!-- Inner -->
                            <div class="carousel-inner">
                                <!-- Single item -->
                                <div
                                    class="carousel-item active ranna-slider-content-layout1 center">
                                    <img
                                        src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-9-1240x578.jpg"
                                        class="d-block w-100" alt="Sunset Over the City"/>
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="item-content">
                                                    <span class="sub-title"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/breakfast/"
                                                            rel="tag">Breakfast</a></span>
                                            <h2 class="item-title"><a
                                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/">Kale
                                                    Quinoa and Avocado Salad with</a></h2>
                                            <div>
                                                <ul class="avg item-rating">
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li><span>0<span> / 5</span></span></li>
                                                </ul>
                                            </div>
                                            <p class="text-black">The doner is a Turkish creation of meat, often
                                                lamb, but not
                                                necessarily so, that is seasoned, stacked in a cone shape, and
                                                cooked slowly</p>
                                            <div class="post-meta">
                                                <ul class="entry-meta">
                                                    <li class="author-meta"><i class="fa fa-user"
                                                                               aria-hidden="true"></i>by
                                                    </li>
                                                    <li class="rt-cook-time"><i class="fa fa-clock-o"></i>55
                                                        Mins
                                                    </li>
                                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/#respond">0</a>
                                                    </li>
                                                    <li class="single-meta"><a href="#" data-toggle="modal"
                                                                               data-target="#rt-like-check798"
                                                                               class="like-recipe not-looged-in"><i
                                                                class="fa fa-heart-o"></i><span>5</span>
                                                            Like</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item ranna-slider-content-layout1 center">
                                    <img
                                        src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-1240x578.jpg"
                                        class="d-block w-100" alt="Canyon at Nigh"/>
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="item-content">
                                                    <span class="sub-title"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/rezala/"
                                                            rel="tag">Rezala</a></span>
                                            <h2 class="item-title"><a
                                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/sultan-dines-kacchi-recipes-sultan-kacchi-recipes/">Sultan
                                                    Dines Kacchi Recipes Sultan Kacchi</a></h2>
                                            <div>
                                                <ul class="avg item-rating">
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li><span>0<span> / 5</span></span></li>
                                                </ul>
                                            </div>
                                            <p class="text-black">The doner is a Turkish creation of meat, often
                                                lamb, but not
                                                necessarily so, that is seasoned, stacked in a cone shape, and
                                                cooked slowly</p>
                                            <div class="post-meta">
                                                <ul class="entry-meta">
                                                    <li class="author-meta"><i class="fa fa-user"
                                                                               aria-hidden="true"></i>by
                                                    </li>
                                                    <li class="rt-cook-time"><i class="fa fa-clock-o"></i>55
                                                        Mins
                                                    </li>
                                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/sultan-dines-kacchi-recipes-sultan-kacchi-recipes/#respond">0</a>
                                                    </li>
                                                    <li class="single-meta"><a href="#" data-toggle="modal"
                                                                               data-target="#rt-like-check2432"
                                                                               class="like-recipe not-looged-in"><i
                                                                class="fa fa-heart-o"></i><span>4</span>
                                                            Like</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item ranna-slider-content-layout1 center">
                                    <img
                                        src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/ranna-wordpress-theme-radiustheme.com-4-1240x578.jpg"
                                        class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="item-content">
                                                    <span class="sub-title"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pasta/"
                                                            rel="tag">Pasta</a></span>
                                            <h2 class="item-title"><a
                                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/">Spiced
                                                    Pork and Pasta</a></h2>
                                            <div>
                                                <ul class="avg item-rating">
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li class="single-item star-empty"><i
                                                            class="fa fa-star"></i></li>
                                                    <li><span>0<span> / 5</span></span></li>
                                                </ul>
                                            </div>
                                            <p class="text-black">The doner is a Turkish creation of meat, often lamb,
                                                but not
                                                necessarily so, that is seasoned, stacked in a cone shape, and
                                                cooked slowly</p>
                                            <div class="post-meta">
                                                <ul class="entry-meta">
                                                    <li class="author-meta"><i class="fa fa-user"
                                                                               aria-hidden="true"></i>by
                                                    </li>
                                                    <li class="rt-cook-time"><i class="fa fa-clock-o"></i>55
                                                        Mins
                                                    </li>
                                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/#respond">0</a>
                                                    </li>
                                                    <li class="single-meta"><a href="#" data-toggle="modal"
                                                                               data-target="#rt-like-check2576"
                                                                               class="like-recipe not-looged-in"><i
                                                                class="fa fa-heart-o"></i><span>6</span>
                                                            Like</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Inner -->

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button"
                                    data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </section>
                <!-- Carousel wrapper -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-section-stretched elementor-section-boxed">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-column elementor-col-100 elementor-top-column elementor-element">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-065cb61 elementor-widget elementor-widget-rt-recipe-grid"
                                            data-id="065cb61" data-element_type="widget"
                                            data-widget_type="rt-recipe-grid.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="product-box-layout1 post-grid-default post-grid-style1">
                                                    <div class="row auto-clear">
                                                        <div class="col-lg-4 col-md-4 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/sultan-dines-kacchi-recipes-sultan-kacchi-recipes/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-9-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/rezala/"
                                                                                rel="tag">Rezala</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/sultan-dines-kacchi-recipes-sultan-kacchi-recipes/">Sultan
                                                                            Dines Kacchi Recipes Sultan Kacchi
                                                                            Recipes</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check2432"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>4</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/ranna-wordpress-theme-radiustheme.com-4-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/breakfast/"
                                                                                rel="tag">Breakfast</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/">Kale
                                                                            Quinoa and Avocado Salad with Lemon
                                                                            Dijon</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check798"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>5</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/lemon-dijon-vina-igrette-kale-quinoa-and-avocado-salad-with-copy/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-11-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/salad/"
                                                                                rel="tag">Salad</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/lemon-dijon-vina-igrette-kale-quinoa-and-avocado-salad-with-copy/">Lemon
                                                                            Dijon Vina igrette Kale Quinoa, and
                                                                            Avocado</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check2425"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>4</span>
                                                                                Like</a></li>
                                                                    </ul>
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
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-546a070 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="546a070" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                    style="width: 1254px; left: 0px;">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-a0f8459"
                                data-id="a0f8459" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-acfdcd1 elementor-widget elementor-widget-rt-title"
                                            data-id="acfdcd1" data-element_type="widget"
                                            data-widget_type="rt-title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sec-title style1 left barshow">
                                                    <div class="sec-title-holder">
                                                        <h2 class="rtin-title">Trending Recipes<span
                                                                class="title-bar"></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-e0b7eaf elementor-widget elementor-widget-rt-recipe-single"
                                            data-id="e0b7eaf" data-element_type="widget"
                                            data-widget_type="rt-recipe-single.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="post-single-default product-box-layout1 post-single-style1 center">
                                                    <div class="row auto-clear">
                                                        <div class="col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/lemon-dijon-vina-igrette-kale-quinoa-and-avocado-salad-with-copy/">
                                                                        <img width="1240" height="578"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-11-1240x578.jpg"
                                                                             class="attachment-ranna-size1 size-ranna-size1 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>

                                                                <div class="item-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/salad/"
                                                                                rel="tag">Salad</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/lemon-dijon-vina-igrette-kale-quinoa-and-avocado-salad-with-copy/">Lemon
                                                                            Dijon Vina igrette Kale Quinoa,
                                                                            and</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone shape, and
                                                                        cooked slowly on a vertical rotisserie.
                                                                        As
                                                                        the outer layers of the meat cooks, it’s
                                                                        shaved off and served in a pita or other
                                                                        flatbread with vegetables</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-1a62286 elementor-widget elementor-widget-rt-recipe-grid"
                                            data-id="1a62286" data-element_type="widget"
                                            data-widget_type="rt-recipe-grid.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="product-box-layout1 post-grid-default post-grid-style1">
                                                    <div class="row auto-clear">
                                                        <div class="col-lg-6 col-md-6 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/sultan-dines-kacchi-recipes-sultan-kacchi-recipes/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-9-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/rezala/"
                                                                                rel="tag">Rezala</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/sultan-dines-kacchi-recipes-sultan-kacchi-recipes/">Sultan
                                                                            Dines Kacchi Recipes</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone shape,</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check2432"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>4</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">
                                                                        <img class="wp-post-image"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/themes/ranna/assets/img/noimage_530X338.jpg"
                                                                             alt="Nashville-Style Hot Chicken Sandwich">
                                                                    </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/"
                                                                                rel="tag">Dinner</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">Nashville-Style
                                                                            Hot Chicken Sandwich</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>Crispy Nashville-style hot chicken
                                                                        sandwich
                                                                        with a juicy and tender center. Served
                                                                        with
                                                                        homemade creamy coleslaw, mayo, and
                                                                        bread
                                                                        and butter pickle</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by <a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/author/sarakessell/?type=ranna_recipe"
                                                                                title="Posts by Sara Kessell"
                                                                                rel="author">Sara Kessell</a>
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check2669"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>0</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/ranna-wordpress-theme-radiustheme.com-4-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/breakfast/"
                                                                                rel="tag">Breakfast</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/">Kale
                                                                            Quinoa and Avocado</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone shape,</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check798"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>5</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/apple-salad-with-lemon-rice-and-cooked-vegetables/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/ranna_wordpress_theme_radiustheme.com_1-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/lunch/"
                                                                                rel="tag">Lunch</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/apple-salad-with-lemon-rice-and-cooked-vegetables/">Apple
                                                                            Salad with Lemon</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone shape,</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check774"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>1</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pasta/"
                                                                                rel="tag">Pasta</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/">Spiced
                                                                            Pork and Pasta</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is
                                                                        seasoned, stacked in a cone shape,</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by
                                                                        </li>
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check2576"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>6</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-2 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">
                                                                        <img class="wp-post-image"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/themes/ranna/assets/img/noimage_530X338.jpg"
                                                                             alt="Nashville-Style Hot Chicken Sandwich">
                                                                    </a>
                                                                </div>
                                                                <div class="item-content rtin-content">
                                                                        <span class="sub-title"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/"
                                                                                rel="tag">Dinner</a></span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">Nashville-Style
                                                                            Hot Chicken Sandwich</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>Crispy Nashville-style hot chicken
                                                                        sandwich
                                                                        with a juicy and tender center. Served
                                                                        with
                                                                        homemade creamy coleslaw, mayo, and
                                                                        bread
                                                                        and butter pickle</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="author-meta"><i
                                                                                class="fa fa-user"
                                                                                aria-hidden="true"></i>by <a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/author/sarakessell/?type=ranna_recipe"
                                                                                title="Posts by Sara Kessell"
                                                                                rel="author">Sara Kessell</a>
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check2669"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>0</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-1f234b7 elementor-widget elementor-widget-image"
                                            data-id="1f234b7" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <img loading="lazy" width="690" height="104"
                                                         src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/figure1.jpg"
                                                         class="attachment-large size-large" alt=""
                                                         srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/figure1.jpg 690w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/figure1-300x45.jpg 300w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/figure1-600x90.jpg 600w"
                                                         sizes="(max-width: 690px) 100vw, 690px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7186207"
                                data-id="7186207" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-30aa392 elementor-widget elementor-widget-rt-title"
                                            data-id="30aa392" data-element_type="widget"
                                            data-widget_type="rt-title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sec-title style1 left barshow">
                                                    <div class="sec-title-holder">
                                                        <h2 class="rtin-title">About Me<span
                                                                class="title-bar"></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-74d9405 elementor-widget elementor-widget-rt-About-info"
                                            data-id="74d9405" data-element_type="widget"
                                            data-widget_type="rt-About-info.default">
                                            <div class="elementor-widget-container">
                                                <div class="about-info-text about-info-style1">
                                                    <div class="content-wrap">
                                                        <img width="250" height="250"
                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/11/about-you_250x250.jpg"
                                                             class="attachment-full size-full" alt=""
                                                             loading="lazy"
                                                             srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/11/about-you_250x250.jpg 250w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/11/about-you_250x250-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/11/about-you_250x250-100x100.jpg 100w"
                                                             sizes="(max-width: 250px) 100vw, 250px">
                                                        <div class="about-content">
                                                            <div class="rtin-content"><p><img loading="lazy"
                                                                                              class="aligncenter size-full wp-image-84"
                                                                                              src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/signature.png"
                                                                                              alt="" width="175"
                                                                                              height="23"></p>
                                                                <p>Fusce mauris auctor ollicituder teary iner
                                                                    hendrerit risusey aeenean rauctor mauris
                                                                    pibus
                                                                    doloer.</p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-59bca63 elementor-widget elementor-widget-rt-title"
                                            data-id="59bca63" data-element_type="widget"
                                            data-widget_type="rt-title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sec-title style1 left barshow">
                                                    <div class="sec-title-holder">
                                                        <h2 class="rtin-title">Subscribe &amp; Follow<span
                                                                class="title-bar"></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-88e0177 elementor-widget elementor-widget-wp-widget-apsc_widget"
                                            data-id="88e0177" data-element_type="widget"
                                            data-widget_type="wp-widget-apsc_widget.default">
                                            <div class="elementor-widget-container">
                                                <div class="apsc-icons-wrapper clearfix apsc-theme-4 ">
                                                    <div class="apsc-each-profile">
                                                        <a class="apsc-facebook-icon clearfix"
                                                           href="https://facebook.com/" target="_blank">
                                                            <div class="apsc-inner-block">
                                                                    <span class="social-icon"><i
                                                                            class="fab fa-facebook-f apsc-facebook"></i><span
                                                                            class="media-name">Facebook</span></span>
                                                                <span class="apsc-count">0</span><span
                                                                    class="apsc-media-type">Fans</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="apsc-each-profile">
                                                        <a class="apsc-twitter-icon clearfix"
                                                           href="https://twitter.com/" target="_blank">
                                                            <div class="apsc-inner-block">
                                                                    <span class="social-icon"><i
                                                                            class="fab fa-twitter apsc-twitter"></i><span
                                                                            class="media-name">Twitter</span></span>
                                                                <span class="apsc-count">0</span><span
                                                                    class="apsc-media-type">Followers</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="apsc-each-profile">
                                                        <a class="apsc-instagram-icon clearfix"
                                                           href="https://instagram.com/" target="_blank">
                                                            <div class="apsc-inner-block">
                                                                    <span class="social-icon"><i
                                                                            class="apsc-instagram fab fa-instagram"></i><span
                                                                            class="media-name">Instagram</span></span>
                                                                <span class="apsc-count">0</span><span
                                                                    class="apsc-media-type">Followers</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="apsc-each-profile">
                                                        <a class="apsc-youtube-icon clearfix" href=""
                                                           target="_blank">
                                                            <div class="apsc-inner-block">
                                                                    <span class="social-icon"><i
                                                                            class="apsc-youtube fab fa-youtube"></i><span
                                                                            class="media-name">Youtube</span></span>
                                                                <span class="apsc-count">0</span><span
                                                                    class="apsc-media-type">Subscriber</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="apsc-each-profile">
                                                        <a class="apsc-soundcloud-icon clearfix"
                                                           href="https://soundcloud.com/" target="_blank">
                                                            <div class="apsc-inner-block">
                                                                    <span class="social-icon"><i
                                                                            class="apsc-soundcloud fab fa-soundcloud"></i><span
                                                                            class="media-name">Soundcloud</span></span>
                                                                <span class="apsc-count"></span><span
                                                                    class="apsc-media-type">Followers</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="apsc-each-profile">

                                                        <a class="apsc-dribble-icon clearfix"
                                                           href="https://dribbble.com/" target="_blank">
                                                            <div class="apsc-inner-block">
                                                                    <span class="social-icon"><i
                                                                            class="apsc-dribbble fab fa-dribbble"></i><span
                                                                            class="media-name">dribble</span></span>
                                                                <span class="apsc-count"></span><span
                                                                    class="apsc-media-type">Followers</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-5601e4f element-sidebar-title elementor-widget elementor-widget-wp-widget-rt-recent-recipe"
                                            data-id="5601e4f" data-element_type="widget"
                                            data-widget_type="wp-widget-rt-recent-recipe.default">
                                            <div class="elementor-widget-container">
                                                <h3>Latest Recipes</h3>
                                                <div class="widget-latest">
                                                    <ul class="block-list">

                                                        <li class="single-item">
                                                            <div class="item-img">
                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/"
                                                                   title="Nashville-Style Hot Chicken Sandwich"
                                                                   class="rt-wid-post-img">
                                                                    <img class="rt-lazy"
                                                                         src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/themes/ranna/assets/img/noimage_150X150.jpg"
                                                                         alt="Nashville-Style Hot Chicken Sandwich">
                                                                </a>
                                                                <div class="count-number">1</div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-ctg"><span class="styles"><span
                                                                            class="ctg-name"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/"
                                                                                rel="tag">Dinner</a></span></span>
                                                                </div>

                                                                <h4 class="item-title"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">Nashville-Style
                                                                        Hot Chicken Sandwich</a></h4>
                                                                <div class="posted-date"><i
                                                                        class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>
                                                                    June 10, 2022
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="single-item">
                                                            <div class="item-img">
                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/"
                                                                   title="Spiced Pork and Pasta"
                                                                   class="rt-wid-post-img">
                                                                    <img loading="lazy" width="150" height="150"
                                                                         src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-150x150.jpg"
                                                                         class="media-object wp-post-image"
                                                                         alt=""
                                                                         srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-300x300.jpg 300w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-100x100.jpg 100w"
                                                                         sizes="(max-width: 150px) 100vw, 150px">
                                                                </a>
                                                                <div class="count-number">2</div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-ctg"><span class="styles"><span
                                                                            class="ctg-name"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pasta/"
                                                                                rel="tag">Pasta</a></span></span>
                                                                </div>

                                                                <h4 class="item-title"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/">Spiced
                                                                        Pork and Pasta</a></h4>
                                                                <div class="posted-date"><i
                                                                        class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>
                                                                    June 23, 2020
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="single-item">
                                                            <div class="item-img">
                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/pumpkin-cheesecake-with-gingersnapcrust/"
                                                                   title="Pumpkin Cheese cake With Gingersnap Crust"
                                                                   class="rt-wid-post-img">
                                                                    <img width="150" height="150"
                                                                         src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-150x150.jpg"
                                                                         class="media-object wp-post-image"
                                                                         alt=""
                                                                         loading="lazy"
                                                                         srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-300x300.jpg 300w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-100x100.jpg 100w"
                                                                         sizes="(max-width: 150px) 100vw, 150px">
                                                                </a>
                                                                <div class="count-number">3</div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-ctg"><span class="styles"><span
                                                                            class="ctg-name"><a
                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/drink/"
                                                                                rel="tag">Drink</a></span></span>
                                                                </div>

                                                                <h4 class="item-title"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/pumpkin-cheesecake-with-gingersnapcrust/">Pumpkin
                                                                        Cheese cake With Gingersnap Crust</a>
                                                                </h4>
                                                                <div class="posted-date"><i
                                                                        class="fa fa-clock-o"
                                                                        aria-hidden="true"></i>
                                                                    June 22, 2020
                                                                </div>
                                                            </div>
                                                        </li>


                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-9421991 elementor-widget elementor-widget-image"
                                            data-id="9421991" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <img loading="lazy" width="370" height="442"
                                                         src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/figure2.jpg"
                                                         class="attachment-full size-full" alt=""
                                                         srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/figure2.jpg 370w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/figure2-251x300.jpg 251w"
                                                         sizes="(max-width: 370px) 100vw, 370px"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-318b9c4 element-sidebar-title elementor-widget elementor-widget-wp-widget-categories"
                                            data-id="318b9c4" data-element_type="widget"
                                            data-widget_type="wp-widget-categories.default">
                                            <div class="elementor-widget-container">
                                                <h3>Recipe Categories</h3>
                                                <ul>
                                                    <li class="cat-item cat-item-27"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/breakfast/">Breakfast</a>
                                                        (3)
                                                    </li>
                                                    <li class="cat-item cat-item-22"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/">Dinner</a>
                                                        (4)
                                                    </li>
                                                    <li class="cat-item cat-item-29"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/drink/">Drink</a>
                                                        (3)
                                                    </li>
                                                    <li class="cat-item cat-item-38"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/lunch/">Lunch</a>
                                                        (2)
                                                    </li>
                                                    <li class="cat-item cat-item-77"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pasta/">Pasta</a>
                                                        (1)
                                                    </li>
                                                    <li class="cat-item cat-item-78"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pizza/">Pizza</a>
                                                        (1)
                                                    </li>
                                                    <li class="cat-item cat-item-76"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/rezala/">Rezala</a>
                                                        (3)
                                                    </li>
                                                    <li class="cat-item cat-item-21"><a
                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/salad/">Salad</a>
                                                        (3)
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-a7dde40 element-sidebar-title elementor-widget elementor-widget-wp-widget-mc4wp_form_widget"
                                            data-id="a7dde40" data-element_type="widget"
                                            data-widget_type="wp-widget-mc4wp_form_widget.default">
                                            <div class="elementor-widget-container">
                                                <script>(function () {
                                                        window.mc4wp = window.mc4wp || {
                                                            listeners: [],
                                                            forms: {
                                                                on: function (evt, cb) {
                                                                    window.mc4wp.listeners.push(
                                                                        {
                                                                            event: evt,
                                                                            callback: cb
                                                                        }
                                                                    );
                                                                }
                                                            }
                                                        }
                                                    })();
                                                </script>
                                                <!-- Mailchimp for WordPress v4.8.8 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-125"
                                                      method="post" data-id="125"
                                                      data-name="GET LATEST UPDATES">
                                                    <div class="mc4wp-form-fields">
                                                        <div class="widget-newsletter-subscribe">
                                                            <div class="original">
                                                                <h3>Get Lastest Updates</h3>
                                                                <p>Newsletter Subscribe</p>
                                                                <div class="form-group">
                                                                    <input type="email"
                                                                           placeholder="your e-mail address"
                                                                           class="form-control" name="email"
                                                                           data-error="E-mail field is required"
                                                                           required="">
                                                                </div>
                                                                <div class="form-group mb-none">
                                                                    <button type="submit" class="item-btn">
                                                                        SUBSCRIBE
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="original-2">
                                                                <input type="email"
                                                                       placeholder="your e-mail address"
                                                                       class="form-control" name="email"
                                                                       data-error="E-mail field is required"
                                                                       required="">
                                                                <button type="submit" class="item-btn">SUBSCRIBE
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label style="display: none !important;">Leave this field
                                                        empty
                                                        if you're human: <input type="text"
                                                                                name="_mc4wp_honeypot"
                                                                                value="" tabindex="-1"
                                                                                autocomplete="off"></label><input
                                                        type="hidden" name="_mc4wp_timestamp"
                                                        value="1665261877"><input type="hidden"
                                                                                  name="_mc4wp_form_id"
                                                                                  value="125"><input
                                                        type="hidden" name="_mc4wp_form_element_id"
                                                        value="mc4wp-form-1">
                                                    <div class="mc4wp-response"></div>
                                                </form><!-- / Mailchimp for WordPress Plugin -->        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b78b24d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="b78b24d" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ec1be0"
                                data-id="1ec1be0" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-74a2bf5 elementor-widget elementor-widget-rt-title"
                                            data-id="74a2bf5" data-element_type="widget"
                                            data-widget_type="rt-title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sec-title style1 left barshow">
                                                    <div class="sec-title-holder">
                                                        <h2 class="rtin-title">Editor's Choice<span
                                                                class="title-bar"></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-04266ba elementor-widget elementor-widget-rt-recipe-box"
                                            data-id="04266ba" data-element_type="widget"
                                            data-widget_type="rt-recipe-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="post-box-default post-box-style1 center">
                                                    <div class="row auto-clear">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/lemon-dijon-vina-igrette-kale-quinoa-and-avocado-salad-with-copy/">
                                                                        <img width="370" height="400"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-11-370x400.jpg"
                                                                             class="attachment-ranna-size12 size-ranna-size12 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="rtin-content">
                                                                    <h3 class="rtin-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/lemon-dijon-vina-igrette-kale-quinoa-and-avocado-salad-with-copy/">Lemon
                                                                            Dijon Vina igrette Kale Quinoa,</a>
                                                                    </h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="post-meta">
                                                                        <ul>
                                                                            <li class="rt-cook-time"><i
                                                                                    class="fa fa-clock-o"></i>55
                                                                                Mins
                                                                            </li>
                                                                            <li class="author-meta"><i
                                                                                    class="fa fa-user"
                                                                                    aria-hidden="true"></i>by
                                                                            </li>

                                                                            <li class="single-meta"><a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#rt-like-check2425"
                                                                                                       class="like-recipe not-looged-in"><i
                                                                                        class="fa fa-heart-o"></i><span>4</span>
                                                                                    Like</a></li>

                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">
                                                                        <img class="wp-post-image"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/themes/ranna/assets/img/noimage_400X476.jpg"
                                                                             alt="Nashville-Style Hot Chicken Sandwich">
                                                                    </a>
                                                                </div>
                                                                <div class="rtin-content">
                                                                    <h3 class="rtin-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">Nashville-Style
                                                                            Hot Chicken Sandwich</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="post-meta">
                                                                        <ul>
                                                                            <li class="author-meta"><i
                                                                                    class="fa fa-user"
                                                                                    aria-hidden="true"></i>by <a
                                                                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/author/sarakessell/?type=ranna_recipe"
                                                                                    title="Posts by Sara Kessell"
                                                                                    rel="author">Sara
                                                                                    Kessell</a>
                                                                            </li>

                                                                            <li class="single-meta"><a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#rt-like-check2669"
                                                                                                       class="like-recipe not-looged-in"><i
                                                                                        class="fa fa-heart-o"></i><span>0</span>
                                                                                    Like</a></li>

                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                            <div class="rtin-single-post">
                                                                <div class="rtin-img">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/apple-salad-with-lemon-rice-and-cooked-vegetables/">
                                                                        <img width="370" height="400"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/ranna_wordpress_theme_radiustheme.com_1-370x400.jpg"
                                                                             class="attachment-ranna-size12 size-ranna-size12 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </div>
                                                                <div class="rtin-content">
                                                                    <h3 class="rtin-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/apple-salad-with-lemon-rice-and-cooked-vegetables/">Apple
                                                                            Salad with Lemon rice and</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="post-meta">
                                                                        <ul>
                                                                            <li class="rt-cook-time"><i
                                                                                    class="fa fa-clock-o"></i>55
                                                                                Mins
                                                                            </li>
                                                                            <li class="author-meta"><i
                                                                                    class="fa fa-user"
                                                                                    aria-hidden="true"></i>by
                                                                            </li>

                                                                            <li class="single-meta"><a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#rt-like-check774"
                                                                                                       class="like-recipe not-looged-in"><i
                                                                                        class="fa fa-heart-o"></i><span>1</span>
                                                                                    Like</a></li>

                                                                        </ul>
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
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-ffd6d28 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="ffd6d28" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                    style="width: 1254px; left: 0px;">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-5e7b9b7"
                                data-id="5e7b9b7" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-897d38d elementor-widget elementor-widget-rt-title"
                                            data-id="897d38d" data-element_type="widget"
                                            data-widget_type="rt-title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sec-title style1 left barshow">
                                                    <div class="sec-title-holder">
                                                        <h2 class="rtin-title">Popular Recipes<span
                                                                class="title-bar"></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-f337257 elementor-widget elementor-widget-rt-recipe-list"
                                            data-id="f337257" data-element_type="widget"
                                            data-widget_type="rt-recipe-list.default">
                                            <div class="elementor-widget-container">
                                                <div class="post-list-default post-list-style1 left">
                                                    <div class="row auto-clear">
                                                        <div
                                                            class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="product-box-layout3">
                                                                <figure class="item-figure">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/ranna-wordpress-theme-radiustheme.com-4-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </figure>
                                                                <div class="item-content">
                                                                        <span class="sub-title"><span class="sub-title"><a
                                                                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/breakfast/"
                                                                                    rel="tag">Breakfast</a></span> </span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/kale-quinoa-and-avocado-salad-with-lemon-dijon-vuna/">Kale
                                                                            Quinoa and Avocado Salad with Lemon
                                                                            Dijon
                                                                            vuna</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li><span
                                                                                class="meta-views meta-item "> <span
                                                                                    class="meta-views meta-item very-high"><i
                                                                                        class="fa fa-eye"
                                                                                        aria-hidden="true"></i> 1,509 </span> </span>
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check798"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>5</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="product-box-layout3">
                                                                <figure class="item-figure">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">
                                                                        <img class="wp-post-image"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/themes/ranna/assets/img/noimage_530X338.jpg"
                                                                             alt="Nashville-Style Hot Chicken Sandwich">
                                                                    </a>
                                                                </figure>
                                                                <div class="item-content">
                                                                        <span class="sub-title"><span class="sub-title"><a
                                                                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/"
                                                                                    rel="tag">Dinner</a></span> </span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">Nashville-Style
                                                                            Hot Chicken Sandwich</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>Crispy Nashville-style hot chicken
                                                                        sandwich
                                                                        with a juicy and tender center. Served
                                                                        with
                                                                        homemade creamy coleslaw,</p>
                                                                    <ul class="entry-meta">
                                                                        <li><span
                                                                                class="meta-views meta-item "> <span
                                                                                    class="meta-views meta-item rising"><i
                                                                                        class="fa fa-eye"
                                                                                        aria-hidden="true"></i> 51 </span> </span>
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check2669"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>0</span>
                                                                                Like</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="product-box-layout3">
                                                                <figure class="item-figure">
                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/apple-salad-with-lemon-rice-and-cooked-vegetables/">
                                                                        <img width="530" height="338"
                                                                             src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/ranna_wordpress_theme_radiustheme.com_1-530x338.jpg"
                                                                             class="attachment-ranna-size6 size-ranna-size6 wp-post-image"
                                                                             alt="" loading="lazy"> </a>
                                                                </figure>
                                                                <div class="item-content">
                                                                        <span class="sub-title"><span class="sub-title"><a
                                                                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/lunch/"
                                                                                    rel="tag">Lunch</a></span> </span>
                                                                    <h3 class="item-title"><a
                                                                            href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/apple-salad-with-lemon-rice-and-cooked-vegetables/">Apple
                                                                            Salad with Lemon rice and cooked
                                                                            vegetables</a></h3>
                                                                    <div>
                                                                        <ul class="avg item-rating">
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li class="single-item star-empty">
                                                                                <i
                                                                                    class="fa fa-star"></i></li>
                                                                            <li><span>0<span> / 5</span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>The doner is a Turkish creation of meat,
                                                                        often lamb, but not necessarily so, that
                                                                        is</p>
                                                                    <ul class="entry-meta">
                                                                        <li class="rt-cook-time"><i
                                                                                class="fa fa-clock-o"></i>55
                                                                            Mins
                                                                        </li>
                                                                        <li><span
                                                                                class="meta-views meta-item "> <span
                                                                                    class="meta-views meta-item high"><i
                                                                                        class="fa fa-eye"
                                                                                        aria-hidden="true"></i> 547 </span> </span>
                                                                        </li>
                                                                        <li class="single-meta"><a href="#"
                                                                                                   data-toggle="modal"
                                                                                                   data-target="#rt-like-check774"
                                                                                                   class="like-recipe not-looged-in"><i
                                                                                    class="fa fa-heart-o"></i><span>1</span>
                                                                                Like</a></li>
                                                                    </ul>
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
                            <div
                                class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e2eb3be"
                                data-id="e2eb3be" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-8318348 elementor-widget elementor-widget-rt-title"
                                            data-id="8318348" data-element_type="widget"
                                            data-widget_type="rt-title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sec-title style1 left barshow">
                                                    <div class="sec-title-holder">
                                                        <h2 class="rtin-title">Featured Article<span
                                                                class="title-bar"></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-69f057c element-sidebar-title elementor-widget elementor-widget-wp-widget-tag_cloud"
                                            data-id="69f057c" data-element_type="widget"
                                            data-widget_type="wp-widget-tag_cloud.default">
                                            <div class="elementor-widget-container">
                                                <h3>Popular Tag</h3>
                                                <div class="tagcloud"><a
                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/rn_recipe_tag/burger/"
                                                        class="tag-cloud-link tag-link-17 tag-link-position-1"
                                                        style="font-size: 10.52pt;"
                                                        aria-label="burger (2 items)">burger</a>
                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/rn_recipe_tag/cake/"
                                                       class="tag-cloud-link tag-link-30 tag-link-position-2"
                                                       style="font-size: 10.52pt;"
                                                       aria-label="cake (2 items)">cake</a>
                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/rn_recipe_tag/dinner/"
                                                       class="tag-cloud-link tag-link-18 tag-link-position-3"
                                                       style="font-size: 22pt;"
                                                       aria-label="dinner (19 items)">dinner</a>
                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/rn_recipe_tag/lunch/"
                                                       class="tag-cloud-link tag-link-74 tag-link-position-4"
                                                       style="font-size: 8pt;"
                                                       aria-label="lunch (1 item)">lunch</a>
                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/rn_recipe_tag/night/"
                                                       class="tag-cloud-link tag-link-19 tag-link-position-5"
                                                       style="font-size: 20.32pt;"
                                                       aria-label="night (14 items)">night</a>
                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/rn_recipe_tag/pizza/"
                                                       class="tag-cloud-link tag-link-31 tag-link-position-6"
                                                       style="font-size: 8pt;"
                                                       aria-label="pizza (1 item)">pizza</a>
                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/rn_recipe_tag/salad/"
                                                       class="tag-cloud-link tag-link-20 tag-link-position-7"
                                                       style="font-size: 21.44pt;"
                                                       aria-label="salad (17 items)">salad</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
