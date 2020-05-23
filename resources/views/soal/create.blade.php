@section('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
@stop

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('fitur-tryout.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-sm-10 col-11">
              <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body" style="padding:30px;">
                      <h4 class="card-title text-center">Tambah Soal </h4>
                      
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="soal" class="col-md-4 control-label">Soal</label>
                            <div class="col-md-12">
                                <textarea class="form-control" cols="100" name="soal"></textarea>
                               </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Soal Bergambar</label>
                            <div class="col-md-12">
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                            </div>
                        </div>
                        <br>
                         <div>  
                            <input type="radio" value="tidak" id="cek" onclick="ada()" name="pilihan" style="padding-right: 5px"><label style="padding-right: 10px">Option Tidak Bergambar</label>
                            <input type="radio" value="gambar" id="cek" onclick="tidak()" name="pilihan" style="padding-right: 5px"><label style="padding-right: 10px">Option Bergambar</label>
                       </div>   
                        <br>
                        <div class="form-group{{ $errors->has('penerbit') ? ' has-error' : '' }}">
                            <label for="penerbit" class="col-md-4 control-label">Option A</label>
                            <div class="col-md-12">
                                <input id="option_a" type="text" class="form-control" name="option_a" value="{{ old('option_a') }}" >
                                @if ($errors->has('option_a'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_a') }}</strong>
                                    </span>
                                 @endif
                                <br>
                                <input type="file" id="filea"  class="form-control" name="option_af" value="{{ old('option_a') }}" >
                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_b') ? ' has-error' : '' }}">
                            <label for="option_b" class="col-md-4 control-label">Option B</label>
                            <div class="col-md-12">
                                <input id="option_b" type="text"  class="form-control" name="option_b" value="{{ old('option_b') }}" >
                                @if ($errors->has('option_b'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_b') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <input  type="file" id="fileb"  class="form-control" name="option_bf" value="{{ old('option_b') }}" >
                            
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_c') ? ' has-error' : '' }}">
                            <label for="option_c" class="col-md-4 control-label">Option C</label>
                            <div class="col-md-12">
                                <input id="option_c" type="text"  class="form-control" name="option_c" value="{{ old('option_c') }}" >
                                @if ($errors->has('option_c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_c') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <input  type="file" id="filec" class="form-control" name="option_cf" value="{{ old('option_c') }}" >
                                
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_d') ? ' has-error' : '' }}">
                            <label for="option_d" class="col-md-4 control-label">Option D</label>
                            <div class="col-md-12">
                                <input id="option_d" type="text"  class="form-control" name="option_d" value="{{ old('option_d') }}" >
                                @if ($errors->has('option_d'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_d') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <input  type="file" id="filed" class="form-control" name="option_df" value="{{ old('option_d') }}" >
                                
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option_e') ? ' has-error' : '' }}">
                            <label for="option_e" class="col-md-4 control-label">Option E</label>
                            <div class="col-md-12">
                                <input id="option_e" type="text"  class="form-control" name="option_e" value="{{ old('option_e') }}" >
                                @if ($errors->has('option_e'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_e') }}</strong>
                                    </span>
                                @endif
                                <br>
                                 <input  type="file" id="filee" class="form-control" name="option_ef" value="{{ old('option_e') }}" >
                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Jenis Soal') ? ' has-error' : '' }}">
                            <label for="Jenis Soal" class="col-md-4 control-label">Jenis Paket Belajar</label>
                            <div class="col-md-12">
                            <select class="form-control" name="jenis_soal" required="">
                                @foreach($data as $datas)
                                <option value="{{$datas->id_bidang}}">{{$datas->bidang}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('jenis_soal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_soal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Jenis Soal') ? ' has-error' : '' }}">
                            <label for="Jenis Soal" class="col-md-4 control-label">Kunci Jawaban</label>
                            <div class="col-md-12">
                            <select class="form-control" name="kunci_jawaban" required="">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                
                            </select>
                            <br>
                            <label for="Jenis Soal" class="col-md-4 control-label">Pilih Try Out Ke </label>
                            
                            <select class="form-control" name="pelajaran" required="">
                               @foreach($data1 as $to)
                                <option value="{{$to->id_try_out}}">{{$to->try_out}}</option>
                               @endforeach 
                            </select>
                            
                            <br>
                            <label for="Jenis Soal" class="col-md-12 control-label">Pilih Petunjuk Untuk soal Ini </label>
                            
                            <select class="form-control" name="petunjuk" required="">
                                <option value="A">Petunjuk A</option>
                                <option value="B">Petunjuk B</option>
                                <option value="C">Petunjuk C</option>
                                <option value="D">Petunjuk D</option>
                            </select>
                            
                            @if ($errors->has('kunci_jawaban'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kunci_jawaban') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <input type="hidden" id="pengecekan" name="pengecekan" >
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <a href="{{ url()->previous() }}" style="width:100%" class="btn btn-light pull-left text-center">Back</a>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <button type="submit" style="width:100%" class="btn btn-primary" id="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <!-- <a href="" class="btn btn-light pull-right">Back</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>

<script type="text/javascript">
                function init() {
                            document.getElementById('option_a').setAttribute("readonly", true);
                           document.getElementById('option_b').setAttribute("readonly", true);
                           document.getElementById('option_c').setAttribute("readonly", true);
                           document.getElementById('option_d').setAttribute("readonly", true);
                           document.getElementById('option_e').setAttribute("readonly", true);
                            document.getElementById('filea').setAttribute("disabled", true);
                           document.getElementById('fileb').setAttribute("disabled", true);
                           document.getElementById('filec').setAttribute("disabled", true);
                           document.getElementById('filed').setAttribute("disabled", true);
                           document.getElementById('filee').setAttribute("disabled", true);
                            }
                            init();
            </script>

<script type="text/javascript">
                            function tidak(){
                           document.getElementById('pengecekan').setAttribute("value","ya");
                                
                           document.getElementById('option_a').setAttribute("readonly", true);
                           document.getElementById('option_b').setAttribute("readonly", true);
                           document.getElementById('option_c').setAttribute("readonly", true);
                           document.getElementById('option_d').setAttribute("readonly", true);
                           document.getElementById('option_e').setAttribute("readonly", true);
                           document.getElementById('filea').removeAttribute("disabled");
                           document.getElementById('fileb').removeAttribute("disabled");
                           document.getElementById('filec').removeAttribute("disabled");
                           document.getElementById('filed').removeAttribute("disabled");
                           document.getElementById('filee').removeAttribute("disabled");
                                                       

                         }
                            function ada(){
                            document.getElementById('pengecekan').setAttribute("value","tidak");
                          
                            document.getElementById('filea').setAttribute("disabled", true);
                           document.getElementById('fileb').setAttribute("disabled", true);
                           document.getElementById('filec').setAttribute("disabled", true);
                           document.getElementById('filed').setAttribute("disabled", true);
                           document.getElementById('filee').setAttribute("disabled", true);
                             document.getElementById('option_a').removeAttribute("readonly");
                           document.getElementById('option_b').removeAttribute("readonly");
                           document.getElementById('option_c').removeAttribute("readonly");
                           document.getElementById('option_d').removeAttribute("readonly");
                           document.getElementById('option_e').removeAttribute("readonly");
                            

                            }
                            </script>


@endsection