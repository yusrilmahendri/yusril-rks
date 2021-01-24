@extends('layouts.master')

@section('content')

 
 <!-- tabel -->
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                <div class="panel-heading">
              <h3 class="panel-title">Data Karyawan</h3>
           <div class="right">
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i>
     </button>
   </div>
 </div>


<!-- insert data user -->        
<div class="panel-body">
  <table class="table table-striped">
      <thead>
        <tr>
           <th>NAMA</th>
           <th>EMAIL</th>
           <th>NO TELP</th>
           <th>JENIS KELAMIN</th>
           <th>TINDAKAN</th>
        </tr>
    </thead>
 
  <tbody>
     
        <tr>
           <td><a href="/karyawan/profile">Yusril Mahendri</td>
           <td>yusrilmahendri@gmail.com</td>
           <td>08956602942579</td>
           <td>laki laki</td>
           <td><a href="/karyawan/edit"class="btn btn-warning sm">Edit</a>
           <a href="#" class="btn btn-danger btn-sm delete">Delete</a></td>
        </tr>

         <tr>
           <td><a href="/karyawan/profile">Yusril Mahendri</td>
           <td>yusrilmahendri@gmail.com</td>
           <td>08956602942579</td>
           <td>laki laki</td>
           <td><a href="/karyawan/edit"class="btn btn-warning sm">Edit</a>
           <a href="/karyawan" class="btn btn-danger btn-sm delete">Delete</a></td>
        </tr> 

         <tr>
           <td><a href="/karyawan/profile">Mahendri</td>
           <td>mahendri@gmail.com</td>
           <td>08956602942579</td>
           <td>laki laki</td>
           <td><a href="/karyawan/edit"class="btn btn-warning sm">Edit</a>
           <a href="/karyawan" class="btn btn-danger btn-sm delete">Delete</a></td>
        </tr>

         <tr>
           <td><a href="/karyawan/profile">Yusril</td>
           <td>yusril@gmail.com</td>
           <td>08956602942579</td>
           <td>laki laki</td>
           <td><a href="/karyawan/edit"class="btn btn-warning sm">Edit</a>
           <a href="/karyawan" class="btn btn-danger btn-sm delete">Delete</a></td>
        </tr>

         <tr>
           <td><a href="/karyawan/profile">Yusril Mahendri</td>
           <td>yusrilmahendri@gmail.com</td>
           <td>08956602942579</td>
           <td>laki laki</td>
           <td><a href="/karyawan/edit"class="btn btn-warning sm">Edit</a>
           <a href="/karyawan" class="btn btn-danger btn-sm delete">Delete</a></td>
        </tr>

                     </tbody>
                  </table>
                </div>
              </div>
           </div>
        </div>
      </div>    
    </div>   
  </div>


<!-- daftar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">DAFTARKAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
              </button>
          </div>
       

<div class="modal-body">
    <form action="/karyawan" method="POST">
        
          <div class="form-group">
             <label for="nama">Nama</label> 
                 <input type="text" name="nama" class="form-control" placeholder="nama" aria-describedby="nama">
                   <small id="nama" class="form-text text-muted">We'll never share your nama with anyone else.</small>
           </div>

<div class="form-group">
   <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="password">
</div>
   
<div class="form-group">
    <label for="email">Email</label>
      <input type="email" placeholder="Email" class="form-control" id="email" name="email">
</div>

<div class="form-group">
   <label for="no_telp">No telp</label>
       <input type="text" placeholder="No telp" class="form-control" id=" no_telp" name="no_telp">
</div>

<label for="jenis_kelamin"> Pilih Jenis Kelamin</label>
   <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
      <option value="male">laki-laki</option>
        <option value="pemale">perempuan</option>
   </select>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="/karyawan" class="btn btn-primary">Submit</a>
   </div>
</form>
               </div>
            </div>
          </div>
       </div>
    </div>
  </div>  
@stop


@section('footer')
  <script type="text/javascript">
          $('.delete').click(function() {
               var karyawan_id = $(this).attr('karyawan-id');
                  swal({
                     title: "YAKIN ?",
                      text: "Mau di hapus data karyawan ini dengan id"+karyawan_id +  "??",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true, })

            .then((willDelete) => {
                    if (willDelete) { window.location = "/karyawan/"+karyawan_id+"/delete";} 
       });
    });
   </script>
@stop



  