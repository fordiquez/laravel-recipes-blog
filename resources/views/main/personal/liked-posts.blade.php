@extends('layouts.main')

@section('content')
    <section class="blog-grid-page-wrap padding-top-80 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-sm-6 col-12">
                                <div class="blog-box-layout1">
                                    <div class="item-figure">
                                        <a href="">
                                            <img src="{{ url('storage/' . $post->preview_image) }}" alt="Preview image" title="Preview image">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 December, 2018</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                        </ul>
                                        <h3 class="item-title">
                                            <a href="single-blog.html">{{ $post->title }}</a>
                                        </h3>
                                        <p>Rmply dummy text of the printing and typesettingindu
                                            stry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                        </p>
                                        <form action="{{ route('main.personal.dislike-post', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="item-btn">
                                                Dislike<i class="flaticon-next"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <ul class="pagination-layout1">
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">LATEST BLOG</h3>
                        </div>
                        <div class="widget-blog-post">
                            <ul class="block-list">
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/product/latest1.jpg" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-post-date"><a href="#"><i class="fas fa-clock"></i>15 Dec, 2018</a></div>
                                        <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                Mozzarella Oelette</a></h4>
                                        <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                John Martin</a></div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/product/latest2.jpg" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-post-date"><a href="#"><i class="fas fa-clock"></i>15 Dec, 2018</a></div>
                                        <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                Mozzarella Oelette</a></h4>
                                        <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                John Martin</a></div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/product/latest3.jpg" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-post-date"><a href="#"><i class="fas fa-clock"></i>15 Dec, 2018</a></div>
                                        <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                Mozzarella Oelette</a></h4>
                                        <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                John Martin</a></div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/product/latest4.jpg" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-post-date"><a href="#"><i class="fas fa-clock"></i>15 Dec, 2018</a></div>
                                        <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                Mozzarella Oelette</a></h4>
                                        <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                John Martin</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
                        </div>
                        <div class="widget-follow-us">
                            <ul>
                                <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i>LIKE ME ON</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-twitter"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-instagram"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-youtube"></i>Subscribe</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-ad">
                            <a href="#"><img src="img/figure/figure6.jpg" alt="Ad" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">CATEGORIES</h3>
                        </div>
                        <div class="widget-categories">
                            <ul>
                                <li>
                                    <a href="#">BreakFast
                                        <span>25</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Lunch
                                        <span>15</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Pasta
                                        <span>22</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Dinner
                                        <span>18</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Dessert
                                        <span>36</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Drinks
                                        <span>12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Fruits
                                        <span>05</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-newsletter-subscribe">
                            <h3>GET LATEST UPDATES</h3>
                            <p>Newsletter Subscribe</p>
                            <form class="newsletter-subscribe-form">
                                <div class="form-group">
                                    <input type="text" placeholder="your e-mail address" class="form-control" name="email"
                                           data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group mb-none">
                                    <button type="submit" class="item-btn">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">INSTAGRAM</h3>
                        </div>
                        <div class="widget-instagram">
                            <ul>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure9.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure10.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure11.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure12.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure13.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure14.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure15.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure16.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-box">
                                        <img src="img/social-figure/social-figure17.jpg" alt="Social Figure" class="img-fluid">
                                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">POPULAR TAGS</h3>
                        </div>
                        <div class="widget-tag">
                            <ul>
                                <li>
                                    <a href="#">DESERT</a>
                                </li>
                                <li>
                                    <a href="#">CAKE</a>
                                </li>
                                <li>
                                    <a href="#">BREAKFAST</a>
                                </li>
                                <li>
                                    <a href="#">BURGER</a>
                                </li>
                                <li>
                                    <a href="#">DINNER</a>
                                </li>
                                <li>
                                    <a href="#">PIZZA</a>
                                </li>
                                <li>
                                    <a href="#">SEA FOOD</a>
                                </li>
                                <li>
                                    <a href="#">SALAD</a>
                                </li>
                                <li>
                                    <a href="#">JUICE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
