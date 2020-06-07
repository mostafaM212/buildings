@extends('layouts.app')
@section('title')
    كل العقارات
@endsection
@section('header')
    {{Html::style('admin/cus/buall.css')}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
@endsection
@section('content')
    @if($bus->count > 0)
        <div class="container">
            <div class="container">
                <h3 class="h3">shopping Demo-1 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">20%</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Blouse</a></h3>
                                <div class="price">$16.00
                                    <span>$20.00</span>
                                </div>
                                <a class="add-to-cart" href="">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">50%</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                                <div class="price">$5.00
                                    <span>$10.00</span>
                                </div>
                                <a class="add-to-cart" href="">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">50%</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                                <div class="price">$5.00
                                    <span>$10.00</span>
                                </div>
                                <a class="add-to-cart" href="">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-7.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-8.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">50%</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                                <div class="price">$5.00
                                    <span>$10.00</span>
                                </div>
                                <a class="add-to-cart" href="">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>


            <div class="container">
                <h3 class="h3">shopping Demo-2 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-1.jpeg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-2.jpeg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a class="add-to-cart" href="">Add to cart</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                <span class="price">$599.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-3.jpeg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-4.jpeg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a class="add-to-cart" href="">Add to cart</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                                <span class="price">$699.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-5.jpeg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-6.jpeg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a class="add-to-cart" href="">Add to cart</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                <span class="price">$599.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-7.jpeg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-8.jpeg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a class="add-to-cart" href="">Add to cart</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                <span class="price">$599.99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h3 class="h3">shopping Demo-3 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid3">
                            <div class="product-image3">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                <div class="price">
                                    $63.50
                                    <span>$75.00</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star disable"></li>
                                    <li class="fa fa-star disable"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid3">
                            <div class="product-image3">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                <div class="price">
                                    $43.50
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid3">
                            <div class="product-image3">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                <div class="price">
                                    $63.50
                                    <span>$75.00</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star disable"></li>
                                    <li class="fa fa-star disable"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid3">
                            <div class="product-image3">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-7.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-8.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                <div class="price">
                                    $63.50
                                    <span>$75.00</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star disable"></li>
                                    <li class="fa fa-star disable"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h3 class="h3">shopping Demo-4 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid4">
                            <div class="product-image4">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                                <span class="product-discount-label">-10%</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Black Top</a></h3>
                                <div class="price">
                                    $14.40
                                    <span>$16.00</span>
                                </div>
                                <a class="add-to-cart" href="">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid4">
                            <div class="product-image4">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-discount-label">-12%</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Blue Shirt</a></h3>
                                <div class="price">
                                    $17.60
                                    <span>$20.00</span>
                                </div>
                                <a class="add-to-cart" href="">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid4">
                            <div class="product-image4">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                                <span class="product-discount-label">-10%</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Black Top</a></h3>
                                <div class="price">
                                    $14.40
                                    <span>$16.00</span>
                                </div>
                                <a class="add-to-cart" href="">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid4">
                            <div class="product-image4">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-7.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-8.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                                <span class="product-discount-label">-10%</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Black Top</a></h3>
                                <div class="price">
                                    $14.40
                                    <span>$16.00</span>
                                </div>
                                <a class="add-to-cart" href="">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h3 class="h3">shopping Demo-5 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid5">
                            <div class="product-image5">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                                <div class="price">$11.00 - $15.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid5">
                            <div class="product-image5">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Shirt</a></h3>
                                <div class="price">$10.00 - $12.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid5">
                            <div class="product-image5">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                                <div class="price">$11.00 - $15.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid5">
                            <div class="product-image5">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-7.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-8.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                                <div class="price">$11.00 - $15.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h3 class="h3">shopping Demo-6 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid6">
                            <div class="product-image6">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-1.jpg">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price">$11.00
                                    <span>$14.00</span>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid6">
                            <div class="product-image6">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-2.jpg">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Red Top</a></h3>
                                <div class="price">$8.00
                                    <span>$12.00</span>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid6">
                            <div class="product-image6">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-3.jpg">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price">$11.00
                                    <span>$14.00</span>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid6">
                            <div class="product-image6">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-4.jpg">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price">$11.00
                                    <span>$14.00</span>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h3 class="h3">shopping Demo-7 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid7">
                            <div class="product-image7">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                                <div class="price">$15.00
                                    <span>$20.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid7">
                            <div class="product-image7">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's White Shirt</a></h3>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                                <div class="price">$15.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid7">
                            <div class="product-image7">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                                <div class="price">$15.00
                                    <span>$20.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid7">
                            <div class="product-image7">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-7.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-8.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                                <div class="price">$15.00
                                    <span>$20.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h3 class="h3">shopping Demo-8 </h3>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid8">
                            <div class="product-image8">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                                <span class="product-discount-label">-20%</span>
                            </div>
                            <div class="product-content">
                                <div class="price">£ 8.00
                                    <span>£ 10.00</span>
                                </div>
                                <span class="product-shipping">Free Shipping</span>
                                <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                                <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid8">
                            <div class="product-image8">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                                <span class="product-discount-label">-30%</span>
                            </div>
                            <div class="product-content">
                                <div class="price">£ 7.00
                                    <span>£ 10.00</span>
                                </div>
                                <span class="product-shipping">Free Shipping</span>
                                <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid8">
                            <div class="product-image8">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                                <span class="product-discount-label">-20%</span>
                            </div>
                            <div class="product-content">
                                <div class="price">£ 8.00
                                    <span>£ 10.00</span>
                                </div>
                                <span class="product-shipping">Free Shipping</span>
                                <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                                <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h3 class="h3">shopping Demo-9 </h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid9">
                            <div class="product-image9">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Top</a></h3>
                                <div class="price"> $12.60 - $40.53</div>
                                <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid9">
                            <div class="product-image9">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-4.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star disable"></li>
                                    <li class="fa fa-star disable"></li>
                                </ul>
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"> $10.20 </div>
                                <a class="add-to-cart" href="">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid9">
                            <div class="product-image9">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-6.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Top</a></h3>
                                <div class="price"> $12.60 - $40.53</div>
                                <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid9">
                            <div class="product-image9">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-7.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-8.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                                <h3 class="title"><a href="#">Women's Top</a></h3>
                                <div class="price"> $12.60 - $40.53</div>
                                <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="clearfix"></div>
    @else
        <div class="container">
            لا يوجد عقارات فى الوقت الحالى
        </div>
@endsection
