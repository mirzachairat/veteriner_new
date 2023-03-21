@extends('layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">INPUT PERMOHONAN PENERIMA</h4>
                <p class="text-muted mb-0">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                </p>
            </div><!--end card-header-->
            <div class="card-body">  
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{env('APP_URL')}}/penyelia/update" method="POST">
                            @csrf
                            @foreach($data_detail as $item)    
                            <div class="form-group row">
                                <label for="hewan" class="col-sm-2 col-form-label text-right">Jenis Hewan</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="hidden" value="{{$item->jenis_hewan}}"name="jenis_hewan[]" id="hewan-0">
                                    <input class="form-control" type="text" value="{{$item->jenis_hewan}}"name="jenis_hewan_formatted[]" id="hewan-0" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_epi" class="col-sm-2 col-form-label text-right">Nomor EPI</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="hidden" value="{{$item->no_epi}}"name="no_epi[]" id="no_epi-0">
                                    <input class="form-control" type="text" value="{{$item->no_epi}}"name="no_epi_formatted[]" id="no_epi-0" disabled>
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
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="nilai">Ha/Hi Al</label>
                                                        <input type="text" class="form-control input-nilai" id="nilai-0" name="nilai[]">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="diagnosa">Diagnosa</label>
                                                        <input type="text" class="form-control input-diagnosa" id="diagnosa-0" name="diagnosa[]">
                                                    </div>
                                                </div>

                                                <input type="hidden" value = "2" id="status_delete" name="status_delete" >                                            
                                                <input type="hidden" value = "3" id="status" name="status" >                                            
                                                <input type="hidden" value = "4" id="workflow_id" name="workflow_id" >                                            
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                    @endforeach
                                </div><!--end card-->
                            </div><!--end col-->
                            <!-- END contoh UJI     -->
                            @endforeach
                            <div class="form-group mb-0">
                                <label for="saran">Saran</label>
                                <textarea class="form-control" id="saran" name="saran"rows="3"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <label for="kesimpulan">Kesimpulan</label>
                                <textarea class="form-control" id="kesimpulan" name="kesimpulan" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <label for="catatan">Catatan</label>
                                <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                            </div>
                            <button style="float:left" type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>                                                                      
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

@endsection
