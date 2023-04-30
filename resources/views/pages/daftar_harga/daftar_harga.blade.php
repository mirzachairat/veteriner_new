@extends('layouts.main')
@section('content')
    <ul class="list-unstyled topbar-nav mb-0">    
        <li class="creat-btn">
            <div class="nav-link">
                <a class=" btn btn-sm btn-soft-primary" href="{{env('APP_URL')}}/view/form" role="button"><i class="fas fa-plus mr-2"></i>Tambah Permohonan</a>
            </div>                                
        </li>
    </ul>        
    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tabel Daftar Harga</h4>
                                    <p class="text-muted mb-0">Add <code>.table-bordered</code> for
                                        borders on all sides of the table and cells.
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Lab</th>
                                                <th>Jenis Pengujian</th>
                                                <th>Satuan</th>
                                                <th>Tarif</th>
                                                <th>Lama Pengujian</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($data as $key => $item)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->jenis_lab}}</td>
                                                <td>{{$item->jenis_pengujian}}</td>
                                                <td>{{$item->satuan}}</td>
                                                <td>{{formatRupiah($item->tarif)}}</td>
                                                <td>{{$item->lama_pengujian}}</td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/view/form/{{$item->id}}" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="{{env('APP_URL')}}/harga/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach    
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
@endsection