@section('js')
@stop

@extends('layouts.app')

@section('content')


<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Modul Belajar</h1>
          </div>
          <!-- Content Row -->
          <div class="row mt-3">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                  <div class="row" style="padding: 20px;">
                   @foreach($datat as $datas) 
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                      <div class="card">
                       
                      <h5 class="card-title paket">Belajar<br> {{$datas->bidang}}</h5>
                        <img src="images/paket-belajar/{{$datas->foto}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul class="detail">
                            <li>{{$datas->materi}} Modul Belajar</li>
                            <li>Video Pembahasan</li>
                          </ul >
                          <button class="btn daftar-sekarang">
                            <a href="{{url('/study/'.$datas->id_bidang)}}">Mulai Belajar</a>
                          </button>
                        </div>
                      </div>
                    </div>
                        

                      @endforeach
                    <?php 
                      $cekid='';

                     ?>
                     @foreach($data as $datab)
                        @foreach($datat as $datacek) 
                      <?php 
$cekid=$datacek->id_bidang;

                       ?>
                      

                          @if($datab -> id_bidang != $datacek->id_bidang)
                          <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                      <div class="card">
                    
                        <h5 class="card-title paket">Belajar <br> {{$datab->bidang}}</h5>
                        <img src="images/paket-belajar/{{$datab->foto}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul class="detail">
                            <li>{{$datab->materi}} Modul Belajar</li>
                            <li>Video Pembahasan</li>
                          </ul >
                          <button class="btn daftar-sekarang">
                            <a href="{{url('/study-free/'.$datab->id_bidang)}}">Mulai Belajar</a>
                          </button>
                        </div>
                      </div>
                    </div>
                    @endif

                     @endforeach

                     @if($cekid=='')
                          <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                      <div class="card">
                    
                        <h5 class="card-title paket">Belajar <br> {{$datab->bidang}}</h5>
                        <img src="images/paket-belajar/{{$datab->foto}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul class="detail">
                            <li>{{$datab->materi}} Modul Belajar</li>
                            <li>Video Pembahasan</li>
                          </ul >
                          <button class="btn daftar-sekarang">
                            <a href="{{url('/study-free/'.$datab->id_bidang)}}">Mulai Belajar</a>
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
@endsection