@extends('layouts.main')
@section('content')    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dokumen Penguji</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                        <tr>
                            <th>ID Permohonan</th>
                            <th>Nama Pemohon</th>
                            <th>Jenis Hewan</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->jenis_hewan}}</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-right">
                                    <a class="btn btn-primary" href="{{ env( 'APP_URL' )}}/view/penguji/{{$item->id}}" >Detail</a>
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