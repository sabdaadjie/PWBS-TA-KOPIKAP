@extends('layout.template',[
    'title' => 'Manage Data',
    'pageTitle' =>'Data Merk',
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
                            <th>Id Merek</th>
                            <th>Nama Merek</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($result->tampilmerek as $output)
                          <tr>
                            <td class="border-solid border-2 border-teal-600 bg-transparent text-center px-2.5">
                              <button id="btn-edit" class="btn btn-primary btn-circle btn-sm"
                              ><i class="fa-solid fa-pen-to-square"></i></button>
                              <button id="btn_hapus" class="btn btn-danger btn-circle btn-sm"
                              onclick="gotoDelete('{{ $output->Id_Merek }}')"><i class="fas fa-trash"></i></button>
                            </td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent text-center px-2.5">
                                {{ $output->Id_Merek }}</td>
                              <td class="border-solid border-2 border-teal-600 bg-transparent px-2.5">
                                {{ $output->Nama_Merek }}</td>                    
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
            <label for="n">Id Merk</label>
            <input type="" required="" id="txt_Id_Merek" name="Id_Merek" class="form-control">
        </div>
        <div class="form-group">
            <label for="e">Nama Merk</label>
            <input type="" required="" id="txt_Nama_Merek" name="Nama_Merek" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-store" onclick="save()">Simpan</button>
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
            <label for="name">Id Merek</label>
            <input type="" required="" id="id" name="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Nama Merek</label>
            <input type="" required="" id="name" name="name" class="form-control">
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
  document.querySelector("#err_Id_Merek").style.display = 'none'
  document.querySelector("#err_Nama_Merek").style.display = 'none'



  // fungsi "btn_simpan"
  const save = () => {

      // Ternary Computer
      const Id_Merek = document.querySelector("#txt_Id_Merek").value === "" ? 
      // hasil jika kondisi benar
      [
          // tampilkan error merek
          document.querySelector("#err_Id_Merek").style.display = 'unset',
          // Ubah class "txt_merek"
          document.querySelector("#txt_Id_Merek").className = "w-full border-2 border-transparent border-b-rose-500 focus:outline-none rounded",
          // set error = 0
          err_Id_Merek = 1
      ]
      :
      // Hasil Jika salah
      [
          // Sembunyikan err
          document.querySelector("#err_Id_Merek").style.display = 'none',

          document.querySelector("#txt_Id_Merek").className = "w-full border-2 border-transparent border-b-sky-500 focus:outline-none focus:ring focus:border-rose-600 rounded",
          // set error = 0
          err_Id_Merek = 0
      ]

      const Nama_Merek = document.querySelector("#txt_Nama_Merek").value === "" ? 
      // hasil jika kondisi benar
      [
          // tampilkan error nama
          document.querySelector("#err_Nama_Merek").style.display = 'unset',
          // Ubah class "txt_nama"
          document.querySelector("#txt_Nama_Merek").className = "w-full border-2 border-transparent border-b-rose-500 focus:outline-none rounded",
          // set error = 0
          err_Nama_Merek = 1
      ]
      :
      // Hasil Jika salah
      [
          // Sembunyikan err_nama
          document.querySelector("#err_Nama_Merek").style.display = 'none',

          document.querySelector("#txt_Nama_Merek").className = "w-full border-2 border-transparent border-b-sky-500 focus:outline-none focus:ring focus:border-rose-600 rounded",
          // set error = 0
          err_Nama_Merek = 0
      ]

  
      // jika seluruh komponen sudah diisi
      const check = (Id_Merek[2] === 0 && Nama_Merek[2] === 0) ?
      // proses simpan data (panggil fungsi saveData)
          saveDataMerek(document.querySelector("#txt_Id_Merek").value, document.querySelector("#txt_Nama_Merek").value)
      : 
      ""
  }

  // buat fungsi save data (Metode async/await)
  const saveDataMerek = async(Id_Merek, Nama_Merek) => {
      // Collecting data
      let data = {
          "Id_Merek" : Id_Merek,
          "Nama_Merek" : Nama_Merek,
          
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
  function gotoDelete(Id_Merek) {
                if (confirm("ID MEREK : " + Id_Merek + " Ingin Dihapus ?") === true) {
                    // panggil fungsi "deleteData"
                    deleteDataMerek(Id_Merek)
                }
                // else {
                //     alert("Tombol Cencel")
                // }
            }

            function deleteDataMerek(Id_Merek) {
                const url = '{{ url('/delete') }}/' + Id_Merek;


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

   // Edit & Update
   $('body').on("click",".btn-edit",function(){
        var id = $(this).attr("Id_Merek")
        
        $.ajax({
            url: "/vw_merk"+id+"/edit",
            method: "GET",
            success:function(response){
                $("#edit-modal").modal("show")
                $("#id").val(response.Id_Merek)
                $("#name").val(response.Nama_Merek)
            }
        })
    });

    $("#editForm").on("submit",function(e){
        e.preventDefault()
        var id = $("#id").val()

        $.ajax({
            url: "/vw_merek"+id,
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
</script>