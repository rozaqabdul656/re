@section('js')
  <script type="text/javascript">
$(document).ready(function() {
/* langkah 2) inisilasisasi fancybox 
*  Simple image gallery. Uses default settings
*/
  $('.fancybox').fancybox();
      });

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

@stop

@extends('layouts.app')

@section('content')
 @foreach($data as $data)
    
<form action="{{route('fitur-tryout.update',$data->id_soal)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
                     
            <div class="col-md-12">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Soal</h4>
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Soal</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="soal">{{ $data->soal}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12 control-label">Soal Bergambar</label>
                            <div class="col-md-6">
                                <a href="{{asset('images/soal/'.$data->gambar_soal)}}" data-fancybox="gallery">

                                <img src="{{asset('images/soal/'.$data->gambar_soal)}}" height="200" width="200">
                                </a>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar" capture="{{$data->gambar_soal}}" value="{{$data->gambar_soal}}">
                            </div>
                        </div>
                        <input type="hidden" name="pengecekan" value="{{$data->pengecekan}}">
                        @if($data ->pengecekan == 'ya')
                            <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="option_a" class="col-md-4 control-label">Option A</label>
                            <div class="col-md-6">
                                <a href="{{asset('images/soal/'.$data->option_a)}}" data-fancybox="gallery">

                                <img src="{{asset('images/soal/'.$data->option_a)}}" height="200" width="200">
                                </a>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="option_af" capture="{{$data->option_a}}" value="{{$data->option_a}}">
                                @if ($errors->has('option_a'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_a') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('option_b') ? ' has-error' : '' }}">
                            <label for="option_b" class="col-md-4 control-label">Option B</label>
                            <div class="col-md-6">
                                <a href="{{asset('images/soal/'.$data->option_b)}}" data-fancybox="gallery">

                                <img src="{{asset('images/soal/'.$data->option_b)}}" height="200" width="200">
                                </a>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="option_bf" capture="{{$data->option_b}}" value="{{$data->option_b}}">

                                @if ($errors->has('option_b'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_b') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_c') ? ' has-error' : '' }}">
                            <label for="option_c" class="col-md-4 control-label">Option C</label>
                            <div class="col-md-6">
                                <a href="{{asset('images/soal/'.$data->option_c)}}" data-fancybox="gallery">
                                <img src="{{asset('images/soal/'.$data->option_c)}}" height="200" width="200">
                                </a>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="option_cf" capture="{{$data->option_c}}" value="{{$data->option_c}}">
                                @if ($errors->has('option_c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_d') ? ' has-error' : '' }}">
                            <label for="option_d" class="col-md-4 control-label">Option D</label>
                            <div class="col-md-6">
                                <a href="{{asset('images/soal/'.$data->option_d)}}" data-fancybox="gallery">

                                <img src="{{asset('images/soal/'.$data->option_d)}}" height="200" width="200">
                                </a>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="option_df" capture="{{$data->option_d}}" value="{{$data->option_d}}">
                                @if ($errors->has('option_d'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_d') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('option_e') ? ' has-error' : '' }}">
                            <label for="option_e" class="col-md-4 control-label">Option E</label>
                            <div class="col-md-6">
                                <a href="{{asset('images/soal/'.$data->option_e)}}" data-fancybox="gallery">

                                <img src="{{asset('images/soal/'.$data->option_e)}}" height="200" width="200">
                                </a>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="option_ef" capture="{{$data->option_e}}" value="{{$data->option_e}}">
                                @if ($errors->has('option_e'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_e') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        @else 
                                

                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="option_a" class="col-md-4 control-label">Option A</label>
                            <div class="col-md-6">
                                 <input id="isbn" type="text" class="form-control" name="option_a" value="{{ $data->option_a }}" >
                                @if ($errors->has('option_a'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_a') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_b') ? ' has-error' : '' }}">
                            <label for="option_b" class="col-md-4 control-label">Option B</label>
                            <div class="col-md-6">
                                <input id="option_b" type="text" class="form-control" name="option_b" value="{{ $data->option_b}}" >
                                @if ($errors->has('option_b'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_b') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_c') ? ' has-error' : '' }}">
                            <label for="option_c" class="col-md-4 control-label">Option C</label>
                            <div class="col-md-6">
                                <input id="option_c" type="text" class="form-control" name="option_c" value="{{ $data->option_c }}" >
                                @if ($errors->has('option_c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_d') ? ' has-error' : '' }}">
                            <label for="option_d" class="col-md-4 control-label">Option D</label>
                            <div class="col-md-6">
                                <input id="option_d" type="text"  class="form-control" name="option_d" value="{{ $data->option_d }}" >
                                @if ($errors->has('option_d'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_d') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('option_e') ? ' has-error' : '' }}">
                            <label for="option_e" class="col-md-4 control-label">Option D</label>
                            <div class="col-md-6">
                                <input id="option_e" type="text"  class="form-control" name="option_e" value="{{ $data->option_e }}" >
                                @if ($errors->has('option_e'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_e') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        <div class="form-group{{ $errors->has('kunci') ? ' has-error' : '' }}">
                            <label for="kunci" class="col-md-4 control-label">Kunci Jawaban</label>
                            <div class="col-md-6">
                            <select class="form-control" name="kunci" required="">
                                <option value="A" {{$data->kunci === "A" ? "selected" : ""}}>A</option>
                                <option value="B" {{$data->kunci === "B" ? "selected" : ""}}>B</option>
                                <option value="C" {{$data->kunci === "C" ? "selected" : ""}}>C</option>
                                <option value="D" {{$data->kunci === "D" ? "selected" : ""}}>D</option>
                                
                            </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bidang') ? ' has-error' : '' }}">
                            <label for="bidang" class="col-md-4 control-label">Paket Belajar</label>
                            <div class="col-md-6">
                            <select class="form-control" name="bidang" required="">
                                @foreach($datab as $bidang)
                                <option value="{{$bidang -> id_bidang}}" {{$data->id_bidang ==$bidang->id_bidang ? "selected" : ""}}>{{$bidang -> bidang}}</option>
                                   @endforeach                                 
                            </select>
                            </div>
                        </div>
                        <br>
                         <label for="Jenis Soal" class="col-md-4 control-label">Pilih Try Out</label>
                            <select class="form-control" name="pelajaran" required="">
                                @foreach($datat as $tryout)
                                <option value="{{$tryout ->id_try_out }}" {{$data->id_try_out ==$tryout->id_try_out ? "selected" : ""}}>{{$tryout->try_out}}</option>
                                @endforeach
                                
                            </select>
                            <br>
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Update
                        </button>
                        <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
   @endforeach


</div>
</form>

@endsection