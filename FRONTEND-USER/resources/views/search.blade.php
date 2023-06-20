@extends('tamplate')

@section('title_tamplate')
<title>Search</title>
@endsection

@section('body_tamplate')

<section class="section_gap_top container">
    <div class="section-title text-center">
        <h1>Hasil Pencarian</h1>
    </div>
    <div id="productList" class="row section_gap_top">
        <!-- single product -->

        @foreach ($result->cari as $output)
   
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">
                        <img class="img-fluid" src="/img/product/p1.jpg" alt="" />
                    </a>
                    <div class="product-details">
                        <h6><a href="javascript:void(0);" onclick="gotoDetail('{{ $output->Id_Produk }}')">{{ $output->Nama_Produk}}</h6>
                        <div class="price">
                            <small class="l-through">Kategori : {{$output->Kategori}}</small>
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
        @endforeach
    </div>
</section>
@endsection

<script>
    function gotoDetail(kode) {
        location.href = '{{ url('/detail') }}/' + kode;
    }
</script>