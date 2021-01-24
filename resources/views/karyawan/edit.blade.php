@extends('layouts.master') @if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{ session("sukses") }}
</div>
@endif @section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Karyawan</h3>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- enctype ini untuk file gambar maksud ea bebas inputan format -->
                                        <form action="/karyawan" method="POST">
                                              
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="nama depan" aria-describedby="nama" value="yusril mahendri" />
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                name="password"
                                                placeholder="password"
                                                value="1234"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" placeholder="Email" class="form-control" name="email" value="yusrilmahendri@gmail.com" />
                                        </div>

                                        <div class="form-group">
                                            <label for="no_telp">No Telp</label>
                                            <input type="text" placeholder="No Telp" class="form-control" id="no_telp" name="no_telp" value="0896502123" />
                                        </div>

                                        <div class="form-group">
                                            <label for="jenis_kelamin">
                                                Pilih Jenis Kelamin</label>
                                            <select
                                                class="form-control"
                                                name="jenis_kelamin">
                                                <option
                                                    value="male">laki laki
                                                </option>
                                                <option value="pemale">perempuan</option>
                                            </select>
                                        </div>

                                          <div class="form-group">
                                            <label for="no_telp">IMAGE</label>
                                                <input type="file" class="form-control" name="avatar">
                                         </div> 

                                        <!--
   <div class="form-group">
     <label for="no_telp">IMAGE</label>
                                            <input type="file" class="form-control" name="avatar">
                                        </div> -->

                                
                                            <a href="/karyawan" class="btn btn-warning">Update</a>
                                        
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @stop @section('content')
                <h1>Edit Data Karyawan</h1>
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{ session("sukses") }}
                </div>
                @endif @endsection @section('footer')
                <script type="text/javascript"></script>
                @endsection
            </div>
        </div>
    </div>
</div>