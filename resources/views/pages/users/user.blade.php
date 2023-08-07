@extends('layouts.main')
@section('content')    
    <div class="col-lg-12">
        <ul class="list-unstyled topbar-nav mb-0">    
            <li class="creat-btn">
                <div class="nav-link">
                    <a class=" btn btn-sm btn-soft-primary" href="{{env('APP_URL')}}/form" role="button"><i class="fas fa-plus mr-2"></i>Tambah User</a>
                </div>                                
            </li>
        </ul>      
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tabel User</h4>
                <p class="text-muted mb-0">Add <code>.table-bordered</code> for
                    borders on all sides of the table and cells.
                </p>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabel User</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAMA</th>
                                        <th>NO HP</th>
                                        <th>INSTANSI/PERUSAHAAN</th>
                                        <th>JABATAN</th>
                                        <th>ALAMAT</th>
                                        <th>EMAIL</th>
                                        <th>TYPE JABATAN</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->no_hp}}</td>
                                            <td>{{$item->instansi}}</td>
                                            <td>{{$item->nama_jabatan}}</td>
                                            <td>{{$item->alamat}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
@endsection
@section('script')
@endsection