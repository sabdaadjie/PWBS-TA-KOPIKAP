@extends('home',[
    'title' => 'Manage Data',
    'pageTitle' =>'Manage Data',
])

@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="notify"></div>

<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-modal">
          Tambah Data
        </button>
    </div>
        <div class="card-body">
            <div class="table-responsive">    
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Spesifikasi</th>
                            <th>Foto Produk</th>
                            <th>Link Foto</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="create-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="create-modalLabel">Create Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="createForm">
        <div class="form-group">
            <label for="n">Nama</label>
            <input type="" required="" id="n" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="e">Harga</label>
            <input type="" required="" id="e" name="harga" class="form-control">
        </div>
        <div class="form-group">
            <label for="p">Stok</label>
            <input type="stok" required="" id="p" name="stok" class="form-control">
        </div>
        <div class="form-group">
            <label for="p">Spesifikasi</label>
            <input type="spesifikasi" required="" id="p" name="spesifikasi" class="form-control">
        </div>
        <div class="form-group">
            <label for="p">Foto Produk</label>
            <input type="foto" required="" id="p" name="foto" class="form-control">
        </div>
        <div class="form-group">
            <label for="p">Link Foto</label>
            <input type="link" required="" id="p" name="link" class="form-control">
        </div>
        <div class="form-group">
            <label for="p">Kategori</label>
            <input type="kategori" required="" id="p" name="kategori" class="form-control">
        </div>
        <div class="form-group">
            <label for="p">Merk</label>
            <input type="merk" required="" id="p" name="merk" class="form-control">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-store">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Create -->

<!-- Modal Edit -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm">
            <div class="form-group">
                <label for="n">Nama</label>
                <input type="" required="" id="n" name="Nama_Produk" class="form-control">
            </div>
            <div class="form-group">
                <label for="e">Harga</label>
                <input type="" required="" id="e" name="Harga" class="form-control">
            </div>
            <div class="form-group">
                <label for="p">Stok</label>
                <input type="stok" required="" id="p" name="Stok_Produk" class="form-control">
            </div>
            <div class="form-group">
                <label for="p">Spesifikasi</label>
                <input type="spesifikasi" required="" id="p" name="Spesifikasi" class="form-control">
            </div>
            <div class="form-group">
                <label for="p">Foto Produk</label>
                <input type="foto" required="" id="p" name="Foto_Produk" class="form-control">
            </div>
            <div class="form-group">
                <label for="p">Kategori</label>
                <input type="kategori" required="" id="p" name="Kategori_Produk" class="form-control">
            </div>
            <div class="form-group">
                <label for="p">Merk</label>
                <input type="merk" required="" id="p" name="Merek" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit -->

<!-- Destroy Modal -->
<div class="modal fade" id="destroy-modal" tabindex="-1" role="dialog" aria-labelledby="destroy-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destroy-modalLabel">Yakin Hapus ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger btn-destroy">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- Destroy Modal -->

@stop

@push('js')
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>

<script type="text/javascript">

  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('/vw_produk') }}",
        columns: [
            {data: 'DT_RowIndex' , name: 'Id_Produk'},
            {data: 'nama', name: 'Nama_Produk'},
            {data: 'harga', name: 'Harga'},
            {data: 'stok', name: 'Stok_Produk'},
            {data: 'spesifikasi', name: 'Spesifikasi'},
            {data: 'foto', name: 'Foto_Produk'},
            {data: 'kategori', name: 'Kategori_Produk'},
            {data: 'merk', name: 'Merek'},
            
        ]
    });
  });


    // Reset Form
        function resetForm(){
            $("[name='Nama_Produk']").val("")
        }
    //

    // Create 

    $("#createForm").on("submit",function(e){
        e.preventDefault()

        $.ajax({
            url: "/vw_produk",
            method: "POST",
            data: $(this).serialize(),
            success:function(){
                $("#create-modal").modal("hide")
                $('.data-table').DataTable().ajax.reload();
                flash("success","Data berhasil ditambah")
                resetForm()
            }
        })
    })

    // Create

    // Edit & Update
    $('body').on("click",".btn-edit",function(){
        var id = $(this).attr("Id_Produk")
        
        $.ajax({
            url: "/vw_produk"+id+"/edit",
            method: "GET",
            success:function(response){
                $("#edit-modal").modal("show")
                $("#Id_Produk").val(response.Id_Produk)
                $("#Nama_Produk").val(response.Nama_Produk)
                $("#Harga").val(response.Harga)
                $("#Stok_Produk").val(response.Stok_Produk)
                $("#Spesifikasi").val(response.Spesifikasi)
                $("#Foto_Produk").val(response.Foto_Produk)
                $("#Kategori").val(response.Kategori)
                $("#Merek").val(response.Merek)
            }
        })
    });

    $("#editForm").on("submit",function(e){
        e.preventDefault()
        var id = $("#Id_Produk").val()

        $.ajax({
            url: "/vw_produk"+id,
            method: "PATCH",
            data: $(this).serialize(),
            success:function(){
                $('.data-table').DataTable().ajax.reload();
                $("#edit-modal").modal("hide")
                flash("success","Data berhasil diupdate")
            }
        })
    })
    //Edit & Update

    $('body').on("click",".btn-delete",function(){
        var id = $(this).attr("Id_Produk")
        $(".btn-destroy").attr("Id_Produk",id)
        $("#destroy-modal").modal("show")
    });

    $(".btn-destroy").on("click",function(){
        var id = $(this).attr("Id_Produk")

        $.ajax({
            url: "/vw_produk"+id,
            method: "DELETE",
            success:function(){
                $("#destroy-modal").modal("hide")
                $('.data-table').DataTable().ajax.reload();
                flash('success','Data berhasil dihapus')
            }
        });
    })

    function flash(type,message){
        $(".notify").html(`<div class="alert alert-`+type+` alert-dismissible fade show" role="alert">
                              `+message+`
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>`)
    }

</script>
@endpush