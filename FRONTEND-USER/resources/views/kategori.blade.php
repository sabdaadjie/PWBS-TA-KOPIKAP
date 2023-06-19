@extends('tamplate')

@section('title_tamplate')
<title>Kategori</title>
@endsection

@section('body_tamplate')
<section class="section_gap_top">

	<body id="category">

		<!-- category start -->
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-5">
					<div class="sidebar-categories">
						<div class="head">Browse Categories</div>
						<ul class="main-categories">
							<li class="main-nav-list"><a data-toggle="collapse" href="#Mouse" aria-expanded="false" aria-controls="fruitsVegetable"><span class="lnr lnr-arrow-right"></span>Mouse<span class="number">(53)</span></a>
								<ul class="collapse" id="Mouse" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
									<li class="main-nav-list child"><a href="#">Kabel<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Wirelles<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Gaming<span class="number">(17)</span></a></li>
								</ul>
							</li>
							<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span class="lnr lnr-arrow-right"></span>Laptop<span class="number">(53)</span></a>
								<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
									<li class="main-nav-list child"><a href="#">Asus<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Acer<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Lenovo<span class="number">(17)</span></a></li>
									<li class="main-nav-list child"><a href="#">Hp<span class="number">(01)</span></a></li>
									<li class="main-nav-list child"><a href="#">MSI<span class="number">(11)</span></a></li>
									<li class="main-nav-list child"><a href="#">DELL<span class="number">(11)</span></a></li>
								</ul>
							</li>

							<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span class="lnr lnr-arrow-right"></span>Monitor<span class="number">(53)</span></a>
								<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
									<li class="main-nav-list child"><a href="#">Samsung<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">LG<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Acer<span class="number">(17)</span></a></li>
									<li class="main-nav-list child"><a href="#">MSI<span class="number">(01)</span></a></li>
									<li class="main-nav-list child"><a href="#">XIAOMI<span class="number">(11)</span></a></li>
								</ul>
							</li>
							<li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span class="lnr lnr-arrow-right"></span>Printer<span class="number">(53)</span></a>
								<ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
									<li class="main-nav-list child"><a href="#">Canon<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Epson<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Brother<span class="number">(17)</span></a></li>
									<li class="main-nav-list child"><a href="#">Fuji Xerox<span class="number">(01)</span></a></li>
									<li class="main-nav-list child"><a href="#">Thermal<span class="number">(11)</span></a></li>
								</ul>
							</li>
							<li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span class="lnr lnr-arrow-right"></span>Lcd Projector <span class="number">(24)</span></a>
								<ul class="collapse" id="beverages" data-toggle="collapse" aria-expanded="false" aria-controls="beverages">
									<li class="main-nav-list child"><a href="#">ACER<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Epson<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Ben-Q<span class="number">(17)</span></a></li>
									<li class="main-nav-list child"><a href="#">Infocus<span class="number">(01)</span></a></li>
								</ul>
							</li>
							<li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" aria-expanded="false" aria-controls="homeClean"><span class="lnr lnr-arrow-right"></span>Motherboard<span class="number">(53)</span></a>
								<ul class="collapse" id="homeClean" data-toggle="collapse" aria-expanded="false" aria-controls="homeClean">
									<li class="main-nav-list child"><a href="#">Asus<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Bulldozer<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Colorfull<span class="number">(17)</span></a></li>
									<li class="main-nav-list child"><a href="#">Ecs<span class="number">(01)</span></a></li>
									<li class="main-nav-list child"><a href="#">Msi<span class="number">(11)</span></a></li>
									<li class="main-nav-list child"><a href="#">Gigabyte<span class="number">(11)</span></a></li>
									<li class="main-nav-list child"><a href="#">Varro<span class="number">(11)</span></a></li>
								</ul>
							</li>
							<li class="main-nav-list"><a data-toggle="collapse" href="#officeProduct" aria-expanded="false" aria-controls="officeProduct"><span class="lnr lnr-arrow-right"></span>Processor<span class="number">(77)</span></a>
								<ul class="collapse" id="officeProduct" data-toggle="collapse" aria-expanded="false" aria-controls="officeProduct">
									<li class="main-nav-list child"><a href="#">Intel<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Amd<span class="number">(09)</span></a></li>
								</ul>
							</li>
							<li class="main-nav-list"><a data-toggle="collapse" href="#beauttyProduct" aria-expanded="false" aria-controls="beauttyProduct"><span class="lnr lnr-arrow-right"></span>Ups & Satbilizer<span class="number">(65)</span></a>
								<ul class="collapse" id="beauttyProduct" data-toggle="collapse" aria-expanded="false" aria-controls="beauttyProduct">
									<li class="main-nav-list child"><a href="#">UPS<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Stabilizer<span class="number">(09)</span></a></li>
								</ul>
							</li>
							<li class="main-nav-list"><a data-toggle="collapse" href="#healthProduct" aria-expanded="false" aria-controls="healthProduct"><span class="lnr lnr-arrow-right"></span>Cassing<span class="number">(29)</span></a>
								<ul class="collapse" id="healthProduct" data-toggle="collapse" aria-expanded="false" aria-controls="healthProduct">
									<li class="main-nav-list child"><a href="#">Aero Cool<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Simbada<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Spc<span class="number">(17)</span></a></li>
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
					<!-- Start Best Seller -->
					<section class="lattest-product-area pb-40 category-list">
						<div class="row">
							<!-- single product -->
							<?php $count = 0; ?>
							@foreach ($result1->tampilasus as $output)
							<?php if ($count == 8) break; ?>
							<div class="col-lg-4 col-md-6">
								<div class="single-product">
									<img class="img-fluid" src="img/product/p1.jpg" alt="">
									<div class="product-details">
										<h6>{{ $output->Nama_Produk }}</h6>
										<div class="price">
											<h6>{{ $output->Harga }}</h6>
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
							<?php $count++; ?>
							@endforeach
							<!-- single product -->
						</div>

					</section>
					<!-- End Best Seller -->
				</div>
			</div>
		</div>
</section>
@endsection