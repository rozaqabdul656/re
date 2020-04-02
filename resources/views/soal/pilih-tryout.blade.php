@section('js')
@stop

@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-8 col-md-10 col-sm-12  offset-lg-1 mb-1">
    <a href="{{route('fitur-tryout.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Soal Try Out</a>
      <a href="{{route('video.create')}}" class="btn btn-danger btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Video Tutorial</a>
      <a href="{{route('materi-pateron.create')}}" class="btn btn-dark btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Materi PDF</a>
  </div>  
</div>
         <div class="container-fluid">
            <br/>

            <!-- Content Row -->
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="row" style="padding: 20px;">
                      <div
                        class="col-lg-8 col-md-10 col-sm-12 col-12  offset-lg-2 mb-3"
                      >
                        <div class="card">
                            @foreach($dat as $da)
                          <h5 class="card-title paket"> Paket Belajar {{$da->bidang}}</h5>
                          @endforeach
                          <div class="card-body">
                              <ul class="detail">
                                <li class="title-list">Daftar Try Out</li>
                              @foreach($data as $datas)
                                <li class="sub-list">
                                  Try Out {{$datas -> try_out}} 
                                  <a href="{{url('fitur-tryout/detail/'.$datas->id_bidang.'/'.$datas->id_try_out)}}" >
                                    <button class="btn btn-dark start-btn">Lihat Soal Try Out</button>
                                  </a>
                                  <div class="clear"></div>
                                </li>
                                @endforeach

                                 <li class="title-list">Daftar Video Tutorial</li>
                              @foreach($datat as $datat)
                                <li class="sub-list">
                                  Video Tutorial {{$datat -> judul}} 
                                  <div class="pull-right">
                                  <a href="{{url('detail-video/'.$datat->id)}}">
                                    <button class="btn btn-xs btn-info" >Detail </button>
                                  </a>
                                  <a href="{{route('paket-belajar.edit',$datat->id_bidang)}}" >
            
                                    <button class="btn btn-dark btn-info" >Edit</button>
                                  </a>
                                  <nbsp>
                                  <a href="{{url('delete-video',$datat->id)}}">
                                      <button class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda Yakin akan menghapus Video Ini? ')">Delete</button>
                                  </a>
                                  </div>
                                     <div class="clear"></div>
                               
                                </li>
                                @endforeach
                                   <li class="title-list">Daftar Materi PDF</li>
                              @foreach($dataf as $dataf)
                                <li class="sub-list">
                                  Tutorial {{$dataf -> judul_materi}} 
                                  <div class="pull-right">
                                  <a href="{{asset('images/materi/pdf/'.$dataf->file)}}" target="_blank">
                                    <button class="btn btn-xs btn-info">Detail </button>
                                  </a>
                                  <nbsp>
                                  <a href="{{url('/delete-materi/'.$dataf->id_materi)}}" >
                                    <button class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda Yakin akan menghapus Video Ini? ')">Delete</button>
                                  </a>
                                  </div>
                                  <div class="clear"></div>
                                </li>
                                @endforeach
                               </ul >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection