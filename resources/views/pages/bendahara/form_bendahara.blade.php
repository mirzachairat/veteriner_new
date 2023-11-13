@extends('layouts.main')
@section('content')    
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Invoice</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Love-Banten</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div><!--end col-->
                    <div class="col-auto align-self-center">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                            <span class="" id="Select_date">Jan 11</span>
                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i data-feather="download" class="align-self-center icon-xs"></i>
                        </a>
                    </div><!--end col-->  
                </div><!--end row-->                                                              
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body invoice-head"> 
                    <div class="row">
                        <h1>INVOICE</h1> 
                    </div><!--end row-->     
                </div><!--end card-body-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            @foreach($users as $item)
                            <div class="">
                                <h6 class="mb-0"><b>Nomor Epi :{{$item->no_epi}}</b></h6>
                                <h6 class="mb-0"><b>Jenis Sampel :{{$item->jenis_hewan}}</b></h6>
                            </div>
                            @endforeach
                        </div><!--end col--> 
                        <div class="col-md-3">                                            
                            <div class="float-left">
                                <address class="font-13">
                                    <strong class="font-14">Billed To :</strong><br>
                                    @foreach($users as $item)
                                        {{$item->nama}}<br>
                                        alamat: {{$item->user->alamat}}<br>
                                        <abbr title="Phone">P:</abbr> {{$item->user->no_hp}}
                                    @endforeach
                                </address>
                            </div>
                        </div><!--end col--> 
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive project-invoice">
                                <table class="table table-bordered mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Jenis Pengujian</th>
                                            <th>Total Sampel</th>
                                            <th>Harga Satuan</th> 
                                            <th>Total Harga</th>
                                        </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr>
                                            <td>{{$item->jenis_sampel}}</td>
                                            <td>{{$item->jumlah_contoh}}</td>
                                            <td>{{formatRupiah($item->harga_satuan)}}</td>
                                            <td>{{formatRupiah($item->total_harga)}}</td>
                                        </tr><!--end tr-->
                                        @endforeach
                                        <tr>                                                        
                                            <td colspan="2" class="border-0"></td>
                                            <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                            <td class="border-0 font-14 text-dark"><b>{{formatRupiah($item->permohonan->jumlah)}}</b></td>
                                        </tr><!--end tr-->
                                        <tr class="bg-black text-white">
                                            <th colspan="2" class="border-0"></th>                                                        
                                            <td class="border-0 font-14"><b>Total</b></td>
                                            <td class="border-0 font-14"><b>{{formatRupiah($item->permohonan->jumlah)}}</b></td>
                                        </tr><!--end tr-->
                                    </tbody>
                                </table><!--end table-->
                            </div>  <!--end /div-->                                          
                        </div>  <!--end col-->                                      
                    </div><!--end row-->

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h5 class="mt-4">Terms And Condition :</h5>
                            <ul class="pl-3">
                                <li><small class="font-12">Lakukan pembayaran terlebih dahulu untuk mendapatkan sertifikat </small></li>
                                <li><small class="font-12">sertifikat dapat di download di halaman detail permohonan setelah pembayaran dilakukan</small ></li>
                            </ul>
                        </div> <!--end col-->                                       
                        <div class="col-lg-6 align-self-end">
                            <div class="float-right" style="width: 30%;">
                                <small>Managemen</small>
                                <img src="" alt="" class="mt-2 mb-1" height="26">
                                <p class="border-top">Signature</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                    <hr>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                            <div class="text-center"><small class="font-12">Terima kasih banyak telah mempercayai kami</small></div>
                        </div><!--end col-->
                        <div class="col-lg-12 col-xl-4">
                            <div class="float-right d-print-none">
                                <a href="javascript:window.print()" class="btn btn-soft-info btn-sm">Print</a>
                                <a href="#" class="btn btn-soft-danger btn-sm">Cancel</a>
                                <a href="javascript:history.back()" class="btn btn-soft-primary btn-sm">Back</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
    <div class="card">
        {{-- @foreach($files as $item)
            <img src="{{$item}}" alt="">
        @endforeach --}}
    </div>
</div><!-- container -->
@endsection