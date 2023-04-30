@extends('layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Permohonan</h4>
            </div><!--end card-header-->
            <div class="card-body">  
                <div class="row">
                    <div class="col-lg-12">
                        <form name="form-parsley" action="{{env('APP_URL')}}/permohonan" method="post">
                            @csrf
                            <input type="hidden" name="workflow_id" id="workflow_id" value="1">
                            <div class="form-group row">
                                <label for="hewan" class="col-sm-2 col-form-label text-right">Jenis Hewan</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="jenis_hewan" id="hewan"> 
                                </div>
                                @error('hewan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Contoh UJI/Jenis_sampel -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jenis_sampel">Contoh Uji/Jenis Sampel</label>
                                            <input type="text" class="form-control" id="jenis_sampel" name="jenis_sampel" required>
                                        </div>
                                    </div>      
                                    <div class="card-body">
                                        <div class="jenis_uji">
                                            <div class="row" data-index="0">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="jenis_lab-0">Jenis Pelayanan</label>
                                                        <select type="text" class="form-control" id="jenis_lab-0" name="jenis_lab[]" onchange="getJenisUji(0)">
                                                            <option value selected disabled>=== PILIH JENIS PELAYANAN ===</option>
                                                                <option value="kesmavet">Kesmavet</option>
                                                                <option value="veteriner">Veteriner</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="jenis_pengujian-0">Jenis Pengujian</label>
                                                        <select type="text" class="form-control" id="jenis_pengujian-0" name="jenis_pengujian[]" onchange="getPrice(0)">
                                                             
                                                        </select>
                                                    </div>
                                                </div>
    
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="jumlah_contoh">Jumlah Contoh Uji</label>
                                                        <input type="text" onkeyup="totalHarga(0)" class="form-control input-jumlah_contoh" id="jumlah_contoh-0" name="jumlah_contoh[]">
                                                    </div>
                                                </div>
    
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="harga_satuan">Harga Satuan</label>
                                                        <input type="text" class="form-control input-harga_satuan" id="harga_satuan-0" name="harga_satuan[]" readonly="readonly">
                                                    </div>
                                                </div>
    
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="total_harga">Total Harga</label>
                                                        <input type="text" class="form-control input-total_harga" id="total_harga-0" name="total_harga[]" readonly="readonly">
                                        
                                                    </div>
                                                </div> 
                                                <input type="hidden" value = "0" id="status" name="status" >    
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                    <div style="float: right">
                                        <div class="form-group row">
                                            <label for="jumlah_seluruhya" class="col-sm-6 col-form-label text-right">Jumlah Seluruhnya</label>
                                            <div class="col-sm-4">
                                                <input class="form-control"  type="text" id="jumlah_seluruhnya" name="jumlah_seluruhnya" readonly="readonly">
                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2" style="float:right">
                                        <div class="form-group">
                                            <span class="btn btn-primary add-btn">Tambah</span>
                                        </div>
                                    </div>                                           
                                </div><!--end card-->
                            </div><!--end col-->
                            <!-- END contoh UJI     -->
                            <button style="float:right; margin-right:30px;" type="submit" class="btn btn-danger btn-lg">Simpan</button>
                        </form>
                    </div>
                </div>                                                                      
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

@endsection

@section('script')
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

    $(".add-btn").click(function(){
        let key = uuidv4();
        $(".jenis_uji").append(
            `<div class="row row-sample-${key} align-items-center">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="jenis_lab-${key}">Jenis Pelayanan</label>
                        <select type="text" class="form-control" id="jenis_lab-${key}" name="jenis_lab[]" onchange="getJenisUji('${key}')">
                            <option value selected disabled>=== PILIH JENIS PELAYANAN ===</option>
                                <option value="kesmavet">Kesmavet</option>
                                <option value="veteriner">Veteriner</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="jenis_pengujian-${key}">Jenis Pengujian</label>
                        <select type="text" class="form-control" id="jenis_pengujian-${key}" name="jenis_pengujian[]" onchange="getPrice('${key}')">
                            <option value selected disabled>=== PILIH JENIS PENGUJIAN ===</option>
                            @foreach($data_harga as $data)
                                <option value="{{$data->id}}">{{$data->jenis_pengujian}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="jumlah_contoh-${key}">Jumlah Contoh Uji</label>
                        <input type="text" onkeyup=totalHarga('${key}') class="form-control input-jumlah_contoh" id="jumlah_contoh-${key}" name="jumlah_contoh[]">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="harga_satuan-${key}">Harga Satuan</label>
                        <input type="text" class="form-control input-harga_satuan" id="harga_satuan-${key}" name="harga_satuan[]" readonly="readonly">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="total_harga-${key}">Total Harga</label>
                        <input type="text" class="form-control input-total_harga" id="total_harga-${key}" name="total_harga[]" readonly="readonly">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-danger" onclick="removeRow('${key}')">Remove</button>
                    </div>
                </div>
            </div>`
        );   
    });

    function uuidv4() {
        return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
            (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        );
    }

    function removeRow(key){
        if(key !== 0){
            $(`.row-sample-${key}`).remove();
        }
        totalHarga();
    } 

    function totalHarga(key){
        const jumlah = $(`#jumlah_contoh-${key}`).val();
        const harga = $(`#harga_satuan-${key}`).val();
        
        //format rupiah  
        $(`#harga_satuan-${key}`).val(harga);
        // $(`#harga_satuan_formatted-${key}`).val(harga));
        
        let total = parseFloat(jumlah * harga);
        
        if(total === NaN || total === undefined){
            total = 0
        }
        
        // let sum_total = harga
        $(`#total_harga-${key}`).val(total);
        // $(`#total_harga_formatted-${key}`).val(total));
        
        //summary
        let sum_total = 0;
        $('input[name="total_harga[]"]').each( function() {
            sum_total += parseInt(this.value);
        });

        $('#jumlah_seluruhnya').val(sum_total);
        // $(`#jumlah_seluruhnya_formatted-${key}`).val(formatRupiah(sum_total));
    }

    function getPrice(key){
        let id = $(`#jenis_pengujian-${key}`).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            type: "GET",
            url: "{{url('/daftar_harga/select')}}",
            data: {id},
            cache: false,
            success: function(data)
            {
                $(`#harga_satuan-${key}`).val(data.tarif);
            } 
        });
    }

    function getJenisUji(key){
        let id_lab = $(`#jenis_lab-${key}`).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            type: "GET",
            url: "{{url('/jenis_pelayanan/select')}}",
            data: {id_lab},
            cache: false,
            success: function(data)
            {
                $(`#jenis_pengujian-${key}`).html(data);
            } 
        });
    }


    // $('#jenis_pengujian').on('change',function(){
    //     var id=$(this).val();

    //     console.log({ id })
    //     $.ajax
    //         ({
    //             headers: {
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             },
    //             type: "GET",
    //             url: "{{url('/daftar_harga/select')}}",
    //             data: {id},
    //             cache: false,
    //             success: function(data)
    //             {
    //                 $('#harga_satuan').val(data.tarif);
    //             } 
    //         });
    // });
        
    </script>
@endsection