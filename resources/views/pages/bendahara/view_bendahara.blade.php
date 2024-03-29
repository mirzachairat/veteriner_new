@extends('layouts.main')
@section('content')    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tabel Bendahara</h4>
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
                                <td>{{$item->permohonan->id}}</td>
                                <td>{{$item->permohonan->nama}}</td>
                                <td>{{$item->permohonan->jenis_hewan}}</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-right">
                                    <a class="btn btn-primary" href="{{ env( 'APP_URL' )}}/form/bendahara/{{$item->permohonan->id}}" >Detail</a>
                                    <a class="btn btn-primary" href="{{ env( 'APP_URL' )}}/show/invoice/{{$item->permohonan->id}}" >Invoice</a>
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