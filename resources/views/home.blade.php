
@extends('layouts.app')

@section('content')

    <div class="card-body">
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          
          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                  <div class="row" style="padding: 20px;">
                   
                   @foreach($data1 as $datas)
                    <?php  
                      $tam=$datas->id_bidang;
                      $pe=0;
                    ?>
                    @foreach($data as $cek)
                      @if($tam == $cek->id_bidang)
                       <?php 
                         $pe=1;
                        ?>
                      @endif
                    @endforeach
                    @if($pe==1)
                    <?php 
                      $pe=0;
                       ?>
                    @else
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                      <div class="card">
                        <h5 class="card-title paket">Paket Belajar <br> {{$datas->bidang}} </h5>
                        <img src="images/paket-belajar/{{$datas->foto}}"  class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul class="detail">
                            <li>{{$datas->materi}} Modul Belajar</li>
                            <li>Video Pembahasan</li>
                          </ul >
                          <button class="btn daftar-sekarang">
                            <a href="{{url('produk-detail/'.$datas->id_bidang)}}">Daftar Sekarang</a>
                          </button>
                        </div>
                      </div>
                    </div>

                    @endif
                      @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- /.container-fluid -->

@endsection