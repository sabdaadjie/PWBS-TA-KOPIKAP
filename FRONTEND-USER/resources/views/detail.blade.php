@extends('tamplate')

@section('title_tamplate')
<title>Detail</title>
@endsection

@section('body_tamplate')

<body>
	<section class="section_gap_top container">
		<!--================Single Product Area =================-->
		<div class="product_image_area">
			<div class="container">
				<div class="row s_product_inner">
					@foreach ($result->tampildetailproduk as $output)
					<div class="col-lg-6">
						<div class="s_Product_carousel">
							<div class="single-prd-item">
								<img class="img-fluiddetail" src="{{$output->Foto_Produk}}" alt="">
							</div>
							<div class="single-prd-item">
								<img class="img-fluiddetail" src="{{$output->Foto_Produk}}" alt="">
							</div>
							<div class="single-prd-item">
								<img class="img-fluiddetail" src="{{$output->Foto_Produk}}" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="s_product_text">
							<h3>{{ $output->Nama_Produk }}</h3>
							<h2>{{ $output->Harga }}</h2>
							<ul class="list">
								<li><a class="active" href="#"><span>Category</span> : {{ $output->Kategori }}</a></li>
								<li><a href="#"><span>Availibility</span> : In Stock</a></li>
							</ul>
							<p>{{ $output->Spesifikasi }}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!--================End Single Product Area =================-->
	</section>
	@endsection