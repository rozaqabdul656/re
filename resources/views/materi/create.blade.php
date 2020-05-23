@section('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

@stop

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('materi-pateron.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-sm-10 col-11">
              <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body" style="padding:30px;">
                      <h4 class="card-title text-center">Tambah Materi </h4>
                      
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="soal" class="col-md-4 control-label">Judul Materi</label>
                            <div class="col-lg-12 col-md-12">
                                <textarea class="form-control" cols="100" name="judul"></textarea>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">InputKan File Materi </label>
                            <div class="col-lg-12 col-md-12">
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="materi">
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="soal" class="col-md-4 control-label">Paket Belajar</label>
                            <div class="col-lg-12 col-md-12">
                                
                                <select class="form-control" name="bidang">
                                     @foreach($data as $datas)
                   
                                  <option value="{{$datas->id_bidang}}">{{$datas->bidang}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                              <button type="reset" style="width:100%" class="btn btn-danger" id="reset">
                                  Reset
                              </button>
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