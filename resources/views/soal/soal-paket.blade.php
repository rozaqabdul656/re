@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });
} );
</script>
@stop
@extends('layouts.app')

@section('content')
  <div class="row" style="padding-left:30px;"">
    <div class="col-lg-8 col-md-12 col-sm-12 col-12 mb-1">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
          <a href="{{route('fitur-tryout.create')}}" class="btn btn-success btn-rounded btn-fw" style="width:100%">
            <i class="fa fa-plus"></i> Tambah Soal Try Out
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
          <a href="{{route('video.create')}}" class="btn btn-info btn-rounded btn-fw" style="width:100%">
            <i class="fa fa-plus"></i> Tambah Video Tutorial
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
          <a href="{{route('materi-pateron.create')}}" class="btn btn-dark btn-rounded btn-fw" style="width:100%">
            <i class="fa fa-plus"></i> Tambah Materi PDF
          </a>
        </div>
      </div>
    </div>  
  </div>

    <div class="card-body">
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Paket Belajar</h1>
          </div>
          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                  <div class="row" style="padding: 20px;">
                   @foreach($data1 as $datas)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                      <div class="card">
                        <h5 class="card-title paket">Paket Belajar {{$datas->bidang}} </h5>
                        <div class="card-body">
                          <ul class="detail">
                          </ul>
                          <button class="btn daftar-sekarang">
                            <a href="{{url('fitur-tryout/detail',$datas->id_bidang)}}">Lihat Fitur Paket Ini</a>
                          </button>
                        </div>
                      </div>
                    </div>
                      @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- /.container-fluid -->

@endsection