<div class="row">
            <div class="col-lg-12">
                <form>
                    @foreach ($result->tampildetailproduk as $output)
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kodeuser" id="lbl_kodeuser">Kode User</label>
                                <input class="form-control" type="text" name="txt_kodeuser" id="txt_kodeuser"
                                    maxlength="8" value="{{ $output->Nama_Produk }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_nama" id="lbl_nama">Nama</label>
                                <input class="form-control" type="text" name="txt_nama" id="txt_nama" maxlength="50"
                                    value="{{ $output->Spesifikasi }}" placeholder="" readonly/>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
</div>