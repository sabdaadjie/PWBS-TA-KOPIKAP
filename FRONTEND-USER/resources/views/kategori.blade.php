@extends('tamplate')

@section('title_tamplate')
<title>Kategori</title>
@endsection

@section('body_tamplate')
<section class="section_gap_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Browse Categories</div>
                    <ul class="main-categories">
                        <li class="main-nav-list"><a data-toggle="collapse" href="#Mouse" aria-expanded="false" aria-controls="Mouse"><span class="lnr lnr-arrow-right"></span>Mouse</a>
                            <ul class="collapse" id="Mouse" data-toggle="collapse" aria-expanded="false" aria-controls="Mouse">
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Kabel')">Kabel</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Wirelles')">Wirelles</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Gaming')">Gaming</a></li>
                            </ul>
                        </li>
                        <li class="main-nav-list">
                            <a data-toggle="collapse" href="#laptops" aria-expanded="false" aria-controls="laptops">
                                <span class="lnr lnr-arrow-right"></span>Laptop</span>
                            </a>
                            <ul class="collapse" id="laptops" data-toggle="collapse" aria-expanded="false" aria-controls="laptops">
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Asus')">Asus</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Acer')">Acer</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Lenovo')">Lenovo</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Hp')">Hp</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('MSI')">MSI</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('Apple')">Apple</a></li>
                            </ul>
                        </li>
                        <li class="main-nav-list">
                            <a data-toggle="collapse" href="#monitor" aria-expanded="false" aria-controls="monitor">
                                <span class="lnr lnr-arrow-right"></span>Monitor</span>
                            </a>
                            <ul class="collapse" id="monitor" data-toggle="collapse" aria-expanded="false" aria-controls="monitor">
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('MSamsung')">Samsung</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('MAcer')">Acer</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('MLG')">LG</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('MXiaomi')">Xiaomi</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('MMSI')">MSI</a></li>
                                <li class="main-nav-list child"><a href="#" onclick="showCategory('MSPC')">SPC</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
					<!-- Start Filter Bar -->
					<div class="filter-bar d-flex flex-wrap align-items-center">
						<div class="sorting">
							<select>
								<option value="1">Default sorting</option>
								<option value="1">Default sorting</option>
								<option value="1">Default sorting</option>
							</select>
						</div>
						<div class="sorting mr-auto">
							<select>
								<option value="1">Show 12</option>
								<option value="1">Show 12</option>
								<option value="1">Show 12</option>
							</select>
						</div>
						<div class="pagination">
							<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
							<a href="#" class="active">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
							<a href="#">6</a>
							<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- End Filter Bar -->
                <div id="categoryContent"></div>
            </div>
        </div>
    </div>
</section>

<script>
    function showCategory(category) {
        // Menghapus konten kategori sebelumnya
        document.getElementById("categoryContent").innerHTML = "";

        // Menampilkan konten kategori sesuai yang dipilih
        switch (category) {
            case "Kabel":
                document.getElementById("categoryContent").innerHTML = ``;
                break;
            case "Wirelles":
                document.getElementById("categoryContent").innerHTML = "Konten Wirelles";
                break;
            case "Gaming":
                document.getElementById("categoryContent").innerHTML = "Konten Gaming";
                break;
            case "Asus":
                document.getElementById("categoryContent").innerHTML = `
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @php $count = 0; @endphp
                            @foreach ($result1->tampilasus as $output)
                                @php if ($count == 40) break; @endphp
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        <img class="img-fluid" src="/img/product/p1.jpg" alt="" />
                                        <div class="product-details">
                                            <div class="price">
                                                <br>
                                                <small class="l-through">Spesifikasi :</small>
                                            </div>
                                            <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                                            <div class="prd-bottom">
                                                <a href="" class="social-info">
                                                    <span class="fa fa-whatsapp"></span>
                                                    <p class="hover-text">bagikan</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endforeach
                        </div>
                    </section>
                `;
                break;
            case "Acer":
                document.getElementById("categoryContent").innerHTML = `
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @php $count = 0; @endphp
                            @foreach ($result2->tampilacer as $output)
                                @php if ($count == 40) break; @endphp
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        <img class="img-fluid" src="/img/product/p1.jpg" alt="" />
                                        <div class="product-details">
                                            <div class="price">
                                                <br>
                                                <small class="l-through">Spesifikasi :</small>
                                            </div>
                                            <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                                            <div class="prd-bottom">
                                                <a href="" class="social-info">
                                                    <span class="fa fa-whatsapp"></span>
                                                    <p class="hover-text">bagikan</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endforeach
                        </div>
                    </section>
                `;
                break;
            case "Lenovo":
                document.getElementById("categoryContent").innerHTML = `
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @php $count = 0; @endphp
                            @foreach ($result3->tampillenovo as $output)
                                @php if ($count == 40) break; @endphp
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        <img class="img-fluid" src="/img/product/p1.jpg" alt="" />
                                        <div class="product-details">
                                            <div class="price">
                                                <br>
                                                <small class="l-through">Spesifikasi :</small>
                                            </div>
                                            <small>{{ Illuminate\Support\Str::limit($output->Spesifikasi, 100) }}</small>
                                            <div class="prd-bottom">
                                                <a href="" class="social-info">
                                                    <span class="fa fa-whatsapp"></span>
                                                    <p class="hover-text">bagikan</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endforeach
                        </div>
                    </section>
                `;
                break;
            case "Hp":
                document.getElementById("categoryContent").innerHTML = "Konten Hp";
                break;
            case "MSI":
                document.getElementById("categoryContent").innerHTML = "Konten MSI";
                break;
            case "Apple":
                document.getElementById("categoryContent").innerHTML = "Konten Apple";
                break;
            // Tambahkan case untuk kategori lainnya di sini

            default:
                break;
        }
    }
</script>
@endsection
