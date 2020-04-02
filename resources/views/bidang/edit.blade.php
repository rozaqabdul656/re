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
    
<form action="{{route('paket-belajar.update',$data->id_bidang)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
        {{ method_field('put') }}
<div class="row">
                     
            <div class="col-md-12">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Paket Belajar</h4>
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Pake Belajar </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="bidang">{{ $data->bidang}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12 control-label">Foto Icon</label>
                            <div class="col-md-6">
                                <a href="{{asset('images/paket-belajar/'.$data->foto)}}" data-fancybox="gallery">

                                <img src="{{asset('images/paket-belajar/'.$data->foto)}}" height="200" width="200">
                                </a>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar" capture="{{$data->foto}}" value="{{$data->foto}}">
                            </div>
                        </div>
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