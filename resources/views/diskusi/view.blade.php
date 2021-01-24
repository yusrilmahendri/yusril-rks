@extends('layouts.master') @section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">iot</h3>
                            <p class="panel-subtitle">yusrill mahendri <br> 10-1-2021</p>
                        </div>

                        <div class="panel-body">
                            apa itu iot ? 
                            <hr>


                            <div class="btn-group">
                                <div class="interaction">

                                    <!-- KOMENTAR -->
                                   
                                    <a href="" class="btn btn-succes"  id="btn-komentar-utama"  style="margin: 3px;"><i class="fa fa-comment"></i>Komentar</a>
                                </div>
                            </div>

                            <!-- fORM komentar -->
                            <form action="" method="POST" style="margin-top: 12px; " id="komentar-utama">
                                @csrf
                                
                                <textarea name="konten" style="border-radius: 25px;" class="form-control" id="komentar-utama" rows="4"></textarea>
                                <input type="submit" class="btn btn-primary" value="kirim">
                            </form>

                            <ul class="list-unstyled activity-list">
                                
                                <li>
                                    <img src="{{asset('images/default.jpg')}}" alt="Avatar" class="img-circle pull-left avatar">
                                    <p><a href="#">yusril 1800018397</a><br>tolong jelaskan saya tidak tahu<span class="timestamp">10 ago</span></p>

                                    <!-- untuk membalas komentar dari komentar -->
                                    <form action="" method="POST" style="padding-left: 3.5sem;">
                                        @csrf
                                        <input type="hidden" name="diskusi_id" value="komentar">
                                        <input type="hidden" name="parent" value="komentar">
                                        <input type="text" name="konten" class="form-control">
                                        <input type="submit" class="btn btn-primary btn-xs" value="replay">
                                    </form>

                                    <!-- membalas komentar dari koemntar yang di komentar ok -->
                                    <br>halo saya juga
                                    <p><a href="#">mahendri</a><br>ya apa itu iot gk ngerti juga saya<span class="timestamp">1-10-2021</span></p>
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection @section('footer')

<!-- menggunakan jqury efek untuk ketika komentar di klik maka diplay textarea -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btn-komentar-utama').click(function() {
            $('#komentar-utama').toggle('slide'); //nampil kolom komentar dengan nge-slide
        });

    });
</script>
@endsection