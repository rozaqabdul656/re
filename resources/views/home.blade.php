
@extends('layouts.app')

@section('content')

    <div class="card-body">
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          
          <?php 
          // Mengecek Kuota Siswa
            function getJmlSiswa($id)
            {
              $siswaTF = DB::table('tb_pembayaran_tf')->where('id_bidang',$id)->count();
              $siswaIg = DB::table('tb_pembayaran_ss')->where('id_bidang',$id)->count();
              return $siswaTF + $siswaIg;
            }

            function getcekfree($id)
            {
              $idanggota=Auth::user()->id;    

              $cekfreesiswa = DB::table('tb_pembayaran_ss')->where('id_bidang',$id)->where('id',$idanggota)->where('keterangan','not')->count();
              // var_dump($cekfreesiswa);
              // var_dump($idanggota);
              // // var_dump($id);
              
              // die;
              return $cekfreesiswa;

            }
          ?>

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
                    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
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
                    </div> -->

                    @endif
                      @endforeach
                  @foreach($data1 as $datas)
                    @php  
                      $tam=$datas->id_bidang;
                      $pe=0;
                      $jmlSiswa = 0;
                    @endphp
                    @foreach($data as $cek)
                     
                      @if($tam == $cek->id_bidang && $cek->keterangan == "not" ||getcekfree($tam) > 0)
                        <?php 
                          $pe=2;
                        ?>
                      @elseif($tam == $cek->id_bidang)
                        <?php 
                          $pe=1;
                        ?>
                    @endif
  
                   
                    @endforeach

                    @if($pe==1)
                        <?php 
                          $pe=0;
                        ?>
                    @elseif($pe==2)
                        <?php 
                          $pe=0;
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                          <div class="card">
                            <h5 class="card-title paket">Paket Belajar <br> {{$datas->bidang}} </h5>
                            <img src="images/paket-belajar/{{$datas->foto}}"  class="card-img-top" alt="...">
                            <div class="card-body">
                              <ul class="detail">
                                <li> Modul Belajar</li>
                                <li>Modul Belajar</li>
                                <li>Video Pembahasan</li>
                                <li>Jumlah Siswa <span>{{ getJmlSiswa($datas->id_bidang) }}</span>/{{$datas->kuota}}</li>
                              </ul >
                              <button class="btn btn-success btn-block">
                                Menunggu Verifikasi Admin
                              </button>
                            </div>
                          </div>
                        </div>
                    @else
                      @if(getJmlSiswa($datas->id_bidang) >= $datas->kuota)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                          <div class="card">
                            <h5 class="card-title paket">Paket Belajar <br> {{$datas->bidang}} </h5>
                            <img src="images/paket-belajar/{{$datas->foto}}"  class="card-img-top" alt="...">
                            <div class="card-body">
                              <ul class="detail">
                                <li>{{$datas->materi}} Modul Belajar</li>
                                <li>Video Pembahasan</li>
                                <li>Jumlah Siswa <span>{{ getJmlSiswa($datas->id_bidang) }}</span>/{{$datas->kuota}}</li>
                              </ul >
                              <button class="btn btn-block btn-danger">
                                Kuota Penuh
                                <li>Modul Belajar</li>
                                <li>Video Pembahasan</li>
                                <li>Full Class</li>
                              </ul >
                              <button class="btn btn-block btn-danger">
                                Full Class
                              </button>
                            </div>
                          </div>
                        </div>
                      @else
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                          <div class="card">
                            <h5 class="card-title paket">Paket Belajar <br> {{$datas->bidang}} </h5>
                            <img src="images/paket-belajar/{{$datas->foto}}"  class="card-img-top" alt="...">
                            <div class="card-body">
                              <ul class="detail">
                                <li>{{$datas->materi}} Modul Belajar</li>
                                <li>Modul Belajar</li>
                                <li>Video Pembahasan</li>
                                <li>Jumlah Siswa <span>{{ getJmlSiswa($datas->id_bidang) }}</span>/{{$datas->kuota}}</li>
                              </ul >
                              <button class="btn daftar-sekarang">
                                <a href="{{url('produk-detail/'.$datas->id_bidang)}}">Daftar Sekarang</a>
                              </button>
                            </div>
                          </div>
                        </div>
                      @endif
                    
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