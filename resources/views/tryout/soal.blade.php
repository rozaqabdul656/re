@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('tryout.store') }}">
                        @csrf
                        <div class="col-xl-12">
                            <div class="card">
                                <center>    
                                    Waktu
                                <div id="countdown" > 
                                    </div>
                                    
                            </center>
                            <br>
                             <div id="tempat" > 
                                    </div>
             
       
                                <div class="card-header">
                                    <h4 class="box-title">Soal 
                                        <label class="pull-right">
                                            <a href="#">Soal ke {{$start_no+1}} /{{$total_s}}
                                            </a>
                                        </label>
                                    </h4>
                                    <br>
                                </div>
                                <br>
                                      @foreach($datas as $data)
       
                             <br>
                 <input type="hidden" name="waktu" id="waktu">
                             <script>
                  
                CountDownTimer('{{$times}}','{{$ti}}','countdown');
                function CountDownTimer(dt,di, id)
                {  

                    var end = new Date();
                                            
                    if (dt == di) {
                    //alert(dt);
                    //alert(di);
                    
                    var tam=end.getMinutes();
                    dt=parseInt(dt);
                    tam=parseInt(tam);    
                    var waktos=dt-tam;
                    end.setMinutes(tam+dt);
                   // document.getElementById('tempat').innerHTML =waktos;  
                    }else{ 
                      //  alert(di);
                   
                        var end = new Date(di);
                    
                    }
                    var _second = 1000;
                    var _minute = _second * 60;
                    var _hour = _minute * 60;
                    var _day = _hour * 24;
                    var timer;
                    timer = setInterval(function showRemaining() {
                        var now = new Date();
                        //var tanggal= now.substring(1,3);
                        
                        var distance = end - now;
                        document.getElementById('waktu').value =end;  
                   
                        if(end <= now){
                           clearInterval(timer);
                          window.location.href='/public/hasil-tryout';  
                        } 
                        var days = Math.floor(distance / _day);
                        var hours = Math.floor((distance % _day) / _hour);
                        var minutes = Math.floor((distance % _hour) / _minute);
                        var seconds = Math.floor((distance % _minute) / _second);
 
                        document.getElementById(id).innerHTML = hours + ':';
                        document.getElementById(id).innerHTML += minutes + ':';
                        document.getElementById(id).innerHTML += seconds ;
                   //    document.getElementById('waktu').value =waktos ;
                        
                    }, 1000);
                }
            </script>
                              
                 
            <br>
                 <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Petunjuk ! </span> Gunakan Petunjuk {{$data->petunjuk}} Untuk menjawab Pertanyaan Ini
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <hr>
                   
                                <div class="card-body">
                                    <div class="form-group">
                                      @if($data ->gambar_soal) 
                                       <CENTER> 
                                        <a href="{{asset('images/soal/'.$data->gambar_soal)}}" data-fancybox="gallery">

                                            <img width="300" height="300" src="{{ asset('images/soal/'.$data->gambar_soal) }}">
                                           </a>
                                        </CENTER>
                                       <br>
                                       @endif
                                       <p class="text-dark">
                                        <!-- {{$data->soal}} -->
                                        {!! nl2br(e($data->soal)) !!}
                                        </p>
                                       <hr>
                                      <!--  <img src="https://latex.codecogs.com/gif.latex?\frac{(x^2-y^2)}{(x^2+y^2)}" border="0"/>
                                       --> 
                                    <div class="radio">
                                        <label>
                                           
                                            @if($toobj == 'A')
                                            
                                            <input type="radio" name="jawaban" value="A" checked> A.
                                             {{$data->option_a}}
                                            @endif

                                            @if($toobj != 'A')
                                            <input type="radio" name="jawaban" value="A"> A.
                                            
                                            @endif

                                            @if($data->pengecekan == 'ya')
                                                <a href="{{asset('images/soal/'.$data->option_a)}}" data-fancybox="gallery">

                                                <img width="300" height="300" src="{{ asset('images/soal/'.$data->option_a) }}">
                                               </a>
                                        
                                            @endif
                                            @if($data->pengecekan != 'ya')
                                          
                                              {{$data->option_a}}
                                           @endif
                                        </label>
                                        <br>
                                        <label>
                                                @if($toobj == 'B')
                                        
                                         <input type="radio" name="jawaban" value="B" checked> B. 
                                            @endif
                                         @if($toobj != 'B')
                                          <input type="radio" name="jawaban" value="B" > B. 
                                          @endif
                                            @if($data->pengecekan == 'ya')
                                                <a href="{{asset('images/soal/'.$data->option_b)}}" data-fancybox="gallery">

                                                <img width="300" height="300" src="{{ asset('images/soal/'.$data->option_b) }}">
                                               </a>
                                        
                                                 @endif
                                       
                                             @if($data->pengecekan != 'ya')
                                          
                                             {{$data->option_b}}
                                            @endif
                                        </label>
                                        <br>
                                        <label>
                                                 @if($toobj == 'C')
                                        
                                            <input type="radio" name="jawaban" value="C" checked> C. 
                                            @endif

                                            @if($toobj != 'C')
                                            
                                            <input type="radio" name="jawaban" value="C"> C. 

                                            @endif
                                            @if($data->pengecekan == 'ya')
                                                <a href="{{asset('images/soal/'.$data->option_c)}}" data-fancybox="gallery">

                                                <img width="300" height="300" src="{{ asset('images/soal/'.$data->option_c) }}">
                                               </a>
                                        
                                            @endif
                                           @if($data->pengecekan != 'ya')
                                                {{$data->option_c}}
                                            @endif

                                        </label>
                                        <br>
                                        <label>
                                            @if($toobj == 'D')
                                        
                                                <input type="radio" name="jawaban" value="D" checked> D. 
                                             @endif
                                            @if($toobj != 'D')
                                            <input type="radio" name="jawaban" value="D"> D. 

                                            @endif
                                            @if($data->pengecekan == 'ya')
                                                <a href="{{asset('images/soal/'.$data->option_d)}}" data-fancybox="gallery">

                                                <img width="300" height="300" src="{{ asset('images/soal/'.$data->option_d) }}">
                                               </a>
                                        
                                           
                                            @endif
                                            @if($data->pengecekan != 'ya')
                                                {{$data->option_d}}
                                            @endif
                                        </label>
                                        <br>
                                        <label>
                                            @if($toobj == 'E')
                                        
                                        
                                            <input type="radio" name="jawaban" value="E" checked> E. 
                                            @endif

                                            @if($toobj != 'E')
                                             <input type="radio" name="jawaban" value="E" > E. 
                                           
                                           @endif

                                            @if($data->pengecekan == 'ya')
                                                <a href="{{asset('images/soal/'.$data->option_e)}}" data-fancybox="gallery">

                                                <img width="300" height="300" src="{{ asset('images/soal/'.$data->option_e) }}">
                                               </a>
                                           
                                            @endif
                                            @if($data->pengecekan != 'ya')
                                                {{$data->option_e}}
                                            @endif
                                             <input type="hidden" name="kunci" value="{{$data->kunci}}">

                                            <input type="hidden" name="bidang" value="{{$akses}}">
                                            <input type="hidden" name="to" value="{{$aksesto}}">
                                                
                                            <input type="hidden" name="nilai" value="{{$nilai}}">
                                            
                                            

                                            <input type="hidden" name="off" value="{{$total_s}}">
                                         
                                        </label>  
                                        <br>
                                        
                                            
                                            
                                </div>
                      
                                <br>
                                <br>
                         <div></div>       
                        <button type="submit"  id="submit" class="btn btn-primary  pull-right">
                                Next Soal
                        </button>
                        @if($start_no != 0)
                        <a href="{{url('/back-tryoutsoal')}}" class="btn btn-light" >Back</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</p>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endforeach
@endsection
