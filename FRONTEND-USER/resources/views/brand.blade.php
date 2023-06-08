@extends('tamplate')

@section('title_tamplate')
<title>Home</title>
@endsection

@section('body_tamplate')

<!-- Banner Promo -->
<section class="section_gap_top">
    <div class="container">
        <!-- Carousel wrapper -->
        <div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselMaterialStyle" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselMaterialStyle" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselMaterialStyle" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner rounded-5 shadow-4-strong">
                <!-- Single item -->
                <div class="carousel-item active">
                    <img src="/img/banner/2.jpg" class="d-block w-100" alt="Sunset Over the City" />
                    <!-- <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                  Nulla vitae elit libero, a pharetra augue mollis interdum.
                </p>
              </div> -->
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="/img/banner/3.jpg" class="d-block w-100" alt="Canyon at Nigh" />
                    <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div> -->
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="/img/banner/1.jpg" class="d-block w-100" alt="Cliff Above a Stormy Sea" />
                    <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>
                  Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur.
                </p>
              </div> -->
                </div>
            </div>
            <!-- Inner -->
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMaterialStyle" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMaterialStyle" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- End Banner promo -->

<!-- Crads slider Produk terbaru -->
<section class="section_gap_top bg rounded-2">
    <div class="container">
        <div class="col-xl-12">
            <h1 class="section-title text-center">Produk Terbaru</h1>
        </div>
        <div id="carouselFourColumn" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselFourColumn" data-slide-to="0" class="active"></li>
                <li data-target="#carouselFourColumn" data-slide-to="1"></li>
                <li data-target="#carouselFourColumn" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 p-1">
                            <div class="card">
                                <img src="https://via.placeholder.com/300x250" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Product Description</p>
                                    <a href="#" class="btn btn-outline-success w-100">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselFourColumn" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselFourColumn" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- end crads slider produk terbaru -->
<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>LAPTOP</h1>
                        <p>Temukan Laptop Pilihan mu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count = 0; ?>
                @foreach ($result1->TampilLaptop as $output)
                <?php if ($count == 12) break; ?>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="/img/product/p1.jpg" alt="" />
                        <div class="product-details">
                            <h6>{{ $output->Nama_Produk}}</h6>
                            <div class="price">
                                <small class="l-through">Spesifikasi :</small>
                                <!-- <small class="l-through">{{ $output->Nama_Kategori}}</small> -->
                            </div>
                            <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                            <div class="prd-bottom">
                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count++; ?>
                @endforeach
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>MONITOR</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="/img/product/p6.jpg" alt="" />
                        <div class="product-details">
                            <h6>{{ $output->Nama_Produk}}</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end product Area -->

<section class="section_gap_top">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 ">
                <div class="categories_post">
                    <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->

<!-- Semua Produk -->
<section class="section_gap_top container">
    <div class="section-title text-center">
        <h1>Semua Produk</h1>
    </div>
    <div class="row section_gap_top">
       

        <!-- single product -->
        @foreach ($result2->TampilAsus as $output)
        
        <div class="col-lg-3 col-md-6">
            <div class="single-product">
                <img class="img-fluid" src="/img/product/p1.jpg" alt="" />
                <div class="product-details">
                    <h6>{{ $output->Nama_Produk}}</h6>
                    <div class="price">
                        <h6>$150.00</h6>
                        <h6 class="l-through">$210.00</h6>
                    </div>
                    <div class="prd-bottom">
                        <a href="" class="social-info">
                            <span class="ti-bag"></span>
                            <p class="hover-text">add to bag</p>
                        </a>
                        <a href="" class="social-info">
                            <span class="lnr lnr-heart"></span>
                            <p class="hover-text">Wishlist</p>
                        </a>
                        <a href="" class="social-info">
                            <span class="lnr lnr-sync"></span>
                            <p class="hover-text">compare</p>
                        </a>
                        <a href="" class="social-info">
                            <span class="lnr lnr-move"></span>
                            <p class="hover-text">view more</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    </div>
    </div>
</section>
@endsection