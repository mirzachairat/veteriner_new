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
                        <form action="{{env('APP_URL')}}/user/tambah" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label text-right">Nama</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="" name="" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label text-right">Email</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" id="email" name="email" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label text-right">Password</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="password" id="password" name="password" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select type="text" class="form-control" id="jabatan" name="jabatan">
                                            <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            
                            <button style="float:left" type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>                                                                      
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

@endsection
