@section('js')
@stop

@extends('layouts.app')

@section('content')
          <div class="container-fluid">
            <br />

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
                          @foreach($dat as $stud)
                          <h5 class="card-title paket"> Belajar {{$stud->bidang}}</h5>
                          <img
                            src="{{asset('images/paket-belajar/'.$stud->foto)}}"
                            class="card-img-top"
                            alt="..."
                          />
                          @endforeach
                          <div class="card-body">
                              <ul class="detail">
                                <li class="title-list">Daftar Try Out</li>
                              @foreach($data as $datas)
                                <li class="sub-list">
                                  Try Out {{$datas -> try_out}} 
                                  <a href="{{url('/tryout-start/'.$datas->id_try_out.'/'.$datas->id_bidang)}}" >
                                    <button class="btn btn-dark start-btn">Kerjakan Soal Try Out Ini</button>
                                  </a>
                                  <div class="clear"></div>
                                </li>
                                @endforeach
                                <br>
                                <br>
                                <br>
                                       <li class="title-list">Anda Berada Di fitur Free</li>
                           
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
          </div>
@endsection