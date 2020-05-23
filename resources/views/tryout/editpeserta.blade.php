@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

@stop

@extends('layouts.app')

@section('content')
 @foreach($data as $data)
    
<form action="{{route('peserta.update',$data->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
                     
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Peserta Tryout</h4>
                      <form class="forms-sample">
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control" name="name" value="{{ $data->name}}" required>
                                @if ($errors->has('soal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('soal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="option_a" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="email" value="{{ $data->email}}" required>
                                @if ($errors->has('option_a'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option_a') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $data->alamat}}" required>
                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('asal_sekolah') ? ' has-error' : '' }}">
                            <label for="asal_sekolah" class="col-md-4 control-label">Option C</label>
                            <div class="col-md-6">
                                <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah" value="{{ $data->asal_sekolah }}" required>
                                @if ($errors->has('asal_sekolah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asal_sekolah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                            <label for="no_hp" class="col-md-4 control-label">No Hp</label>
                            <div class="col-md-6">
                                <input id="no_hp" type="text"  class="form-control" name="no_hp" value="{{ $data->no_hp }}" required>
                                @if ($errors->has('no_hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('akses') ? ' has-error' : '' }}">
                            <label for="akses" class="col-md-4 control-label">Akses</label>
                            <div class="col-md-6">
                            <select class="form-control" name="akses" required="">
                                <option value="SAINTEK" {{$data->akses === "SAINTEK" ? "selected" : ""}}>Saintek</option>
                                <option value="SOSHUM" {{$data->akses === "Soshum" ? "selected" : ""}}>Soshum</option>
                                <option value="ALL" {{$data->akses === "ALL" ? "selected" : ""}}>ALL  
                            </select>
                            </div>
                        </div>
                    

                        <button type="submit" class="btn btn-primary" id="submit">
                                    Update
                        </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
   @endforeach

</div>
</form>
@endsection