@extends('layout.template',[
    'title' => 'Manage Data',
    'pageTitle' =>'Data Produk',
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
                            <th>Aksi</th>
                            <th>Id Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok Produk</th>
                            <th>Spesifikasi</th>
                            <th>Foto Produk</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($result->tampilproduk as $output)
                          <tr>
                            <td class="border-solid border-2 border-teal-600 bg-transparent text-center px-2.5">
                              <button id="btn_ubah" class="btn btn-primary btn-circle btn-sm"
                                  onclick=""><i class="fa-solid fa-pen-to-square"></i></button>
                              <button id="btn_hapus" class="btn btn-danger btn-circle btn-sm"
                              onclick=""><i class="fas fa-trash"></i></button>
                            </td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent text-center px-2.5">
                                {{ $output->Id_Produk }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Nama_Produk }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Harga }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Stok_Produk }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Spesifikasi }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Foto_Produk }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Kategori }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Merek }}</td>
                          </tr>
                      @endforeach
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

@endpush

<script>
  // hilangkan pesan error
  document.querySelector("#err_Id_Produk").style.display = 'none'
  document.querySelector("#err_Nama_Produk").style.display = 'none'



  // fungsi "btn_simpan"
  const save = () => {

      // Ternary Computer
      const Id_Produk = document.querySelector("#txt_Id_Produk").value === "" ? 
      // hasil jika kondisi benar
      [
          // tampilkan error merek
          document.querySelector("#err_Id_Produk").style.display = 'unset',
          // Ubah class "txt_merek"
          document.querySelector("#txt_Id_Produk").className = "w-full border-2 border-transparent border-b-rose-500 focus:outline-none rounded",
          // set error = 0
          err_Id_Produk = 1
      ]
      :
      // Hasil Jika salah
      [
          // Sembunyikan err
          document.querySelector("#err_Id_Produk").style.display = 'none',

          document.querySelector("#txt_Id_Produk").className = "w-full border-2 border-transparent border-b-sky-500 focus:outline-none focus:ring focus:border-rose-600 rounded",
          // set error = 0
          err_Id_Produk = 0
      ]

      const Nama_Produk = document.querySelector("#txt_Nama_Produk").value === "" ? 
      // hasil jika kondisi benar
      [
          // tampilkan error nama
          document.querySelector("#err_Nama_Produk").style.display = 'unset',
          // Ubah class "txt_nama"
          document.querySelector("#txt_Nama_Produk").className = "w-full border-2 border-transparent border-b-rose-500 focus:outline-none rounded",
          // set error = 0
          err_Nama_Produk = 1
      ]
      :
      // Hasil Jika salah
      [
          // Sembunyikan err_nama
          document.querySelector("#err_Nama_Produk").style.display = 'none',

          document.querySelector("#txt_Nama_Produk").className = "w-full border-2 border-transparent border-b-sky-500 focus:outline-none focus:ring focus:border-rose-600 rounded",
          // set error = 0
          err_Nama_Produk = 0
      ]

  
      // jika seluruh komponen sudah diisi
      const check = (Id_Produk[2] === 0 && Nama_Produk[2] === 0) ?
      // proses simpan data (panggil fungsi saveData)
          saveDataMerek(document.querySelector("#txt_Id_Produk").value, document.querySelector("#txt_Nama_Produk").value)
      : 
      ""
  }

  // buat fungsi save data (Metode async/await)
  const saveDataMerek = async(Id_Produk, Nama_Produk) => {
      // Collecting data
      let data = {
          "Id_Produk" : Id_Produk,
          "Nama_Produk" : Nama_Produk,
          
      }
      // proses kirim data
      try {
          // kirim data ke controller
          // await fetch(url,atribut)
          let response = await fetch("{{url('/insert')}}",{
              method: "POST",
              headers: {
                  'Content-type':'application/json',
                  'X-CSRF-Token': document.querySelector('meta[name="_token"]').content
              },
              body:JSON.stringify(data)
          })
          // baca hasil dari controller
          let result = await response.json()
          alert(result.pesan)

      } catch (error) {
          alert("Data Gagal Dikirim !")
      }
  }

  // fungsi untuk link hapus data
  function gotoDelete(Id_Produk) {
                if (confirm("ID MEREK : " + Id_Produk + " Ingin Dihapus ?") === true) {
                    // panggil fungsi "deleteData"
                    deleteDataMerek(Id_Produk)
                }
                // else {
                //     alert("Tombol Cencel")
                // }
            }

            function deleteDataMerek(Id_Produk) {
                const url = '{{ url('/delete') }}/' + Id_Produk;


                // proses async (fetch)
                fetch(url, {
                        method: "DELETE",
                        headers: {
                            'X-CSRF-Token': document.querySelector('meta[name="_token"]').content
                        }
                        // body: JSON.stringify(data)
                    })
                    // .then((response) => response.json())
                    // .then(alert("Data Gagal Dikirim !"))

                    // ini untuk membaca respon dari fetch
                    .then((respons) => respons.json())

                    // yang ini untuk menampilkan hasil dari then sebelumnya
                    .then((result) => {
                        alert(result.pesan)
                        document.querySelector("#btn_refresh").click()
                    }) // kurung kurawal {} menandakan adanya lebih dari satu proses

                    // jika terjadi error dari pada saat fetch data
                    .catch((error) => alert("Data gagal dikirim"))
            }
</script>