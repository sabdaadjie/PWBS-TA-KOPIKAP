@extends('layout.dashboard',[
    'title' => 'Manage Data',
    'pageTitle' =>'Data User',
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
                            <th>Id User</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($result->tampiluser as $output)
                          <tr>
                              <td class="border-solid border-2 border-teal-600 bg-transparent text-center px-2.5">
                                <button id="btn_ubah" class="btn btn-primary btn-circle btn-sm"
                                    onclick=""><i class="fa-solid fa-pen-to-square"></i></button>
                                <button id="btn_hapus" class="btn btn-danger btn-circle btn-sm"
                                onclick=""><i class="fas fa-trash"></i></button>
                              </td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent text-center px-2.5">
                                {{ $output->Id_User }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Nama }}</td>                    
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->email }}</td>                    
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->password }}</td>                    
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->role }}</td>                    
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
            <label for="n">Name</label>
            <input type="" required="" id="n" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="e">Email</label>
            <input type="" required="" id="e" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="p">Password</label>
            <input type="password" required="" id="p" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="r">Role</label>
            <select name="role" id="r" class="form-control">
                <option disabled="">- PILIH ROLE -</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
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
            <label for="name">Name</label>
            <input type="hidden" required="" id="id" name="id" class="form-control">
            <input type="" required="" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="" required="" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="" required="" id="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option disabled="">- PILIH ROLE -</option>
                <option value="#">Admin</option>
                <option value="#">User</option>
            </select>
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

<script>
  // hilangkan pesan error
  document.querySelector("#err_Id_User").style.display = 'none'
  document.querySelector("#err_Nama_User").style.display = 'none'



  // fungsi "btn_simpan"
  const save = () => {

      // Ternary Computer
      const Id_User = document.querySelector("#txt_Id_User").value === "" ? 
      // hasil jika kondisi benar
      [
          // tampilkan error merek
          document.querySelector("#err_Id_User").style.display = 'unset',
          // Ubah class "txt_merek"
          document.querySelector("#txt_Id_User").className = "w-full border-2 border-transparent border-b-rose-500 focus:outline-none rounded",
          // set error = 0
          err_Id_User = 1
      ]
      :
      // Hasil Jika salah
      [
          // Sembunyikan err
          document.querySelector("#err_Id_User").style.display = 'none',

          document.querySelector("#txt_Id_User").className = "w-full border-2 border-transparent border-b-sky-500 focus:outline-none focus:ring focus:border-rose-600 rounded",
          // set error = 0
          err_Id_User = 0
      ]

      const Nama_User = document.querySelector("#txt_Nama_User").value === "" ? 
      // hasil jika kondisi benar
      [
          // tampilkan error nama
          document.querySelector("#err_Nama_User").style.display = 'unset',
          // Ubah class "txt_nama"
          document.querySelector("#txt_Nama_User").className = "w-full border-2 border-transparent border-b-rose-500 focus:outline-none rounded",
          // set error = 0
          err_Nama_User = 1
      ]
      :
      // Hasil Jika salah
      [
          // Sembunyikan err_nama
          document.querySelector("#err_Nama_User").style.display = 'none',

          document.querySelector("#txt_Nama_User").className = "w-full border-2 border-transparent border-b-sky-500 focus:outline-none focus:ring focus:border-rose-600 rounded",
          // set error = 0
          err_Nama_User = 0
      ]

  
      // jika seluruh komponen sudah diisi
      const check = (Id_User[2] === 0 && Nama_User[2] === 0) ?
      // proses simpan data (panggil fungsi saveData)
          saveDataMerek(document.querySelector("#txt_Id_User").value, document.querySelector("#txt_Nama_User").value)
      : 
      ""
  }

  // buat fungsi save data (Metode async/await)
  const saveDataMerek = async(Id_User, Nama_User) => {
      // Collecting data
      let data = {
          "Id_User" : Id_User,
          "Nama_User" : Nama_User,
          
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
  function gotoDelete(Id_User) {
                if (confirm("ID MEREK : " + Id_User + " Ingin Dihapus ?") === true) {
                    // panggil fungsi "deleteData"
                    deleteDataMerek(Id_User)
                }
                // else {
                //     alert("Tombol Cencel")
                // }
            }

            function deleteDataMerek(Id_User) {
                const url = '{{ url('/delete') }}/' + Id_User;


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
@endpush