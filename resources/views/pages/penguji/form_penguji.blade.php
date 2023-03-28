@extends('layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">APPROVAL PENGUJI</h4>
                <p class="text-muted mb-0">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                </p>
            </div><!--end card-header-->
            <div class="card-body">  
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{env('APP_URL')}}/penguji/update" method="POST">
                            @csrf
                            @foreach($data_detail as $item)
                            
                            <div class="form-group row">
                                <label for="hewan" class="col-sm-2 col-form-label text-right">Jenis Hewan</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="hidden" value="{{$item->jenis_hewan}}"name="jenis_hewan[]" id="hewan-0">
                                    <input class="form-control" type="text" value="{{$item->jenis_hewan}}"name="jenis_hewan_formatted[]" id="hewan-0" disabled>
                                </div>
                            </div>
                            <!-- Contoh UJI/Jenis_sampel -->
                            <div class="col-lg-12">
                                <div class="card">
                                    @foreach($data_sample as $sampel)
                                    <input class="form-control" type="text" id="permohonan_id-0" name="permohonan_id[]" value="{{$sampel->permohonan_id}}" hidden>
                                    <input class="form-control" type="text" id="jenis_sampel_id-0" name="jenis_sampel_id[]" value="{{$sampel->id}}" hidden>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jenis_sampel">Contoh Uji/Jenis Sampel</label>
                                            <input type="hidden" class="form-control" id="jenis_sampel-0" value="{{$sampel->jenis_sampel}}" name="jenis_sampel[]">
                                            <input type="text" class="form-control" id="jenis_sampel_formatted-0" value="{{$sampel->jenis_sampel}}" name="jenis_sampel_formatted[]" disabled>
                                        </div>
                                    </div>         
                                    <div class="card-body">
                                        <div class="jenis_uji">
                                            <div class="row" data-index="0">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="jenis_pengujian-0">Jenis Pengujian</label>
                                                        <select type="text" class="form-control" id="jenis_pengujian-0" name="jenis_pengujian[]">
                                                                <option value="{{$sampel->jenis_pengujian}}">{{$sampel->jenis_harga ? $sampel->jenis_harga->jenis_pengujian : '-'}}</option>
                                                        </select>
                                                    </div>
                                                </div>
    
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="jumlah_contoh">Jumlah Contoh Uji</label>
                                                        <input type="hidden" onkeyup="totalHarga(0)" class="form-control input-jumlah_contoh" id="jumlah_contoh-0" value ="{{$sampel->jumlah_contoh}}" name="jumlah_contoh[]">
                                                        <input type="text" onkeyup="totalHarga(0)" class="form-control input-jumlah_contoh" id="jumlah_contoh_formatted" value ="{{$sampel->jumlah_contoh}}" name="jumlah_contoh_formatted[]" disabled>
                                                    </div>
                                                </div>
    
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="harga_satuan">Harga Satuan</label>
                                                        <input type="hidden" class="form-control input-harga_satuan" id="harga_satuan-0" value="{{$sampel->harga_satuan}}"name="harga_satuan[]">
                                                        <input type="text" class="form-control input-harga_satuan_formatted" id="harga_satuan_formatted-0" value="{{formatRupiah($sampel->harga_satuan)}}"name="harga_satuan_formatted[]" disabled>
                                                        
                                                    </div>
                                                </div>
    
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="total_harga">Total Harga</label>
                                                        <input type="hidden" class="form-control input-total_harga" id="total_harga-0" value="{{$sampel->total_harga}}" name="total_harga[]">
                                                        <input type="text" class="form-control input-total_harga" id="total_harga_formatted-0" value="{{formatRupiah($sampel->total_harga)}}" name="total_harga_formatted[]" disabled>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="bahan_pengawet">Bahan Pengawet</label>
                                                        <input type="hidden" class="form-control input-total_harga" id="bahan_pengawet-0" value="{{$sampel->bahan_pengawet}}" name="bahan_pengawet[]">
                                                        <input type="text" class="form-control input-total_harga" id="bahan_pengawet_formatted-0" value="{{$sampel->bahan_pengawet}}" name="bahan_pengawet_formatted[]" disabled>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="kondisi-0">Kondisi Contoh Uji</label>
                                                        <select type="text" class="form-control" id="kondisi-0" name="kondisi[]">
                                                                <option value="baik">{{$sampel->kondisi}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="kriteria-0">KRITERIA</label>
                                                        <select type="text" class="form-control" id="kriteria-0" name="kriteria[]">
                                                                <option value="memenuhi">{{$sampel->kriteria}}</option>
                                                        </select>
                                                    </div>
                                                </div>  
                                                <input type="hidden" value = "3" id="status_delete" name="status_delete" >                                            
                                                <input type="hidden" value = "4" id="status" name="status" >     
                                                <input type="hidden" value = "5" id="workflow_id" name="workflow_id" >                                      
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                    @endforeach
                                    <div style="float: right">
                                        <div class="form-group row">
                                            <label for="jumlah_seluruhya" class="col-sm-8 col-form-label text-right" >Jumlah Seluruhnya</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="hidden" id="jumlah_seluruhnya" value="{{$item->jumlah}}" name="jumlah_seluruhnya" style="background-color: rgb(243, 236, 236)">
                                                <input class="form-control" type="text" id="jumlah_seluruhnya_formatted" value="{{formatRupiah($item->jumlah)}}" name="jumlah_seluruhnya_formatted" style="background-color: rgb(243, 236, 236) " disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                            <!-- END contoh UJI     -->
                            @endforeach
                            <button style="float:left" type="submit" class="btn btn-primary">Approval</button>
                        </form>
                    </div>
                </div>                                                                      
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

@endsection
