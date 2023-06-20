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
                        <p>Temukan Laptop Pilihan Kamu</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Tampil Laptop -->
                <?php $count = 0; ?>
                @foreach ($result2->tampillaptop as $output)
                <?php if ($count == 8) break; ?>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">
                        <img class="img-fluid" src="{{$output->Foto_Produk}}" alt="" />
                        </a>
                        <div class="product-details">
                            <h6><a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">{{ $output->Nama_Produk}}</h6>
                            <div class="price">
                                <h5 class="text-warning">{{$output->Harga}}</h5>
                            <small class="l-through">Kategori : {{$output->Nama_Kategori}}</small>
                                <br>
                                <small class="l-through">Spesifikasi :</small>
                            </div>
                            <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                            <div class="prd-bottom">
                                <a href="" class="social-info">
                                    <!-- <span class="fa fa-whatsapp"></span>
                                    <p class="hover-text">bagikan</p> -->
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
                            Temukan Monitor Pilihan Kamu
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count = 0; ?>
                @foreach ($result3->tampilmonitor as $output)
                <?php if ($count == 8) break; ?>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">
                        <!-- <img class="img-fluid" src="{{ $output->Foto_Produk }}" alt="" /> -->
                        <img class="img-fluid" src="{{$output->Foto_Produk}}">
                        </a>
                        <div class="product-details">
                            <h6><a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">{{ $output->Nama_Produk}}</h6>
                            <div class="price">
                            <h5 class="text-warning">{{$output->Harga}}</h5>
                            <small class="l-through">Kategori : {{$output->Nama_Kategori}}</small>
                                <br>
                                <small class="l-through">Spesifikasi :</small>
                            </div>
                            <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                            <div class="prd-bottom">
                                <a href="" class="social-info">
                                    <!-- <span class="fa fa-whatsapp"></span>
                                    <p class="hover-text">bagikan</p> -->
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
</section>
<!-- end product Area -->

<section class="section_gap_top">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 ">
                <div class="categories_post">
                    <img src="img/banner/11.jpg" alt="post">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="img/banner/12.jpg" alt="post">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="img/banner/13.jpg" alt="post">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->

<!-- Semua Produk -->
<!-- Semua Produk -->
<section class="section_gap_top container">
    <div class="section-title text-center">
        <h1>Semua Produk</h1>
    </div>
    <div id="productList" class="row section_gap_top">
        <!-- single product -->
        <?php $count = 0; ?>
        @foreach ($result1->tampilproduk as $output)
            <?php if ($count == 12) break; ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">
                        <img class="img-fluid" src="{{$output->Foto_Produk}}" alt="" />
                    </a>
                    <div class="product-details">
                        <h6><a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">{{ $output->Nama_Produk}}</h6>
                        <div class="price">
                        <h5 class="text-warning">{{$output->Harga}}</h5>
                            <small class="l-through">Kategori : {{$output->Kategori}}</small>
                            <br>
                            <small class="l-through">Spesifikasi :</small>
                        </div>
                        <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                        <div class="prd-bottom">
                            <a href="" class="social-info">
                                <!-- <span class="fa fa-whatsapp"></span>
                                <p class="hover-text">bagikan</p> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $count++; ?>
        @endforeach
    </div>

    <!-- Tombol Load More -->
    <div class="text-center">
        <button id="loadMoreBtn" class="btn btn-primary">Load More</button>
    </div>
</section>

<script>
    // Variabel untuk melacak jumlah produk yang telah dimuat
    let loadedProducts = <?php echo $count; ?>;

    // Fungsi untuk memuat produk selanjutnya
    function loadMoreProducts() {
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        loadMoreBtn.disabled = true;
        loadMoreBtn.textContent = 'Loading...';

        // Lakukan pemanggilan Ajax untuk memuat data produk selanjutnya dari server
        // Pastikan untuk mengirim parameter yang dibutuhkan seperti offset, limit, dll.
        // Misalnya, Anda dapat menggunakan jQuery.ajax atau Fetch API untuk melakukan permintaan Ajax ke server.
        // Setelah menerima respons dari server, tambahkan data produk baru ke dalam div #productList.
        // Di sini, saya hanya menggunakan timeout palsu untuk mensimulasikan pemanggilan Ajax.
        setTimeout(function() {
            const productList = document.getElementById('productList');
            // Di sini, saya hanya menambahkan produk simulasi baru ke dalam daftar.
            // Anda harus menggantinya dengan logika yang sesuai untuk menambahkan produk baru dari respons server.
            const newProductsHTML = `
        <?php $count = 0; ?>
            
        @foreach ($result1->tampilproduk as $output)
        <?php if ($count == 40) break; ?>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">
                        <img class="img-fluid" src="{{$output->Foto_Produk}}" alt="" />
                    </a>
                    <div class="product-details">
                        <h6><a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">{{ $output->Nama_Produk}}</h6>
                        <div class="price">
                        <h5 class="text-warning">{{$output->Harga}}</h5>
                            <small class="l-through">Kategori : {{$output->Kategori}}</small>
                            <br>
                            <small class="l-through">Spesifikasi :</small>
                        </div>
                        <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                        <div class="prd-bottom">
                            <a href="" class="social-info">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $count++; ?>
         
@endforeach
            `;

            productList.innerHTML += newProductsHTML;

            loadedProducts++; // Perbarui jumlah produk yang telah dimuat

            loadMoreBtn.disabled = false;
            loadMoreBtn.textContent = 'Load More';

            // Cek apakah sudah mencapai batas maksimum produk yang ingin ditampilkan
            if (loadedProducts >= 12) {
                loadMoreBtn.style.display = 'none'; // Sembunyikan tombol "Load More" jika telah mencapai batas
            }
        }, 1000); // Timeout simulasi pemanggilan Ajax (1 detik)
    }

    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        loadMoreBtn.addEventListener('click', loadMoreProducts);
    });
</script>
@endsection





<script>
    function gotoDetail(kode) {
        location.href = '{{ url('/detail') }}/' + kode;
    }
</script>