@extends('layouts.main')
@section('content')
<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">INPUT DAFTAR HARGA</h4>
                <p class="text-muted mb-0">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                </p>
            </div><!--end card-header-->
            <div class="card-body">  
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{env('APP_URL')}}/tambah/harga" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right" for="jenis_lab-0">Jenis Lab</label>
                                <div class="col-sm-6">
                                    <select type="text" class="form-control" id="jenis_lab-0" name="jenis_lab">
                                        <option value selected disabled>=== PILIH JENIS ===</option>
                                        <option value="Kesmavet">Keswan(kesehatan hewan)</option>
                                        <option value="Veteriner">Kesmavet(Kesehatan Masyarakat Veteriner)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_pengujian" class="col-sm-2 col-form-label text-right">Jenis Pengujian</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="jenis_pengujian" name="jenis_pengujian">
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="satuan" class="col-sm-2 col-form-label text-right">Satuan</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="satuan" name="satuan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tarif" class="col-sm-2 col-form-label text-right">Tarif</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="tarif" name="tarif">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lama_pengujian" class="col-sm-2 col-form-label text-right">Lama Pengujian</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="lama_pengujian" name="lama_pengujian">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button class="btn btn-danger">Close</button>
                        </form>
                    </div>
                </div>                                                                      
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
@endsection

<script type="text/javascript">
    function formatRupiah(angka, prefix = 'Rp. '){
        var	number_string = angka.toString(),
        sisa 	= number_string.length % 3,
        rupiah 	= number_string.substr(0, sisa),
        ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        if(prefix){
            rupiah = prefix + rupiah
        }

        return rupiah
    }
</script>