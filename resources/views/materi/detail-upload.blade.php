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

<div class="row">
                     
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail Rangkuman</h4>
                      
                      <form method="post" action="{{url('rangkuman-ubah')}}">
                             {{ csrf_field() }}
                                {{ method_field('put') }}
                        <div class="form-group">
                            <br>
                         <br>
                         
                         <label for="email" class="col-md-4 control-label">Input Kan Keterangan :</label>
                             <br>
                          
                             <textarea cols="100" class="form-control" name="keterangan"></textarea>
                          <input type="submit" name="acc" class="btn btn-primary pull-right" value="Kirim">
                        <a href="{{ url()->previous() }}" class="btn btn-light pull-left">Back</a>
                             <br>
                          <br>
                   
                            <label for="email" class="col-md-4 control-label">Rangkuman :</label>
                            @foreach($datas as $data)

                
                             <div class="col-md-12">
                                <a href="{{asset('images/materi/rangkuman/'.$data->rangkuman)}}" data-fancybox="gallery">

                                <img src="{{asset('images/materi/rangkuman/'.$data->rangkuman)}}" height="500" width="500">
                                </a>
                         <br>
                          <input type="hidden" name="id" value="{{$data->id}}">
                          <input type="hidden" name="bidang" value="{{$data->id_bidang}}">
                          <input type="hidden" name="materi" value="{{$data->id_materi}}">
                             </div>
                               </div>
                         
                         @endforeach
                         </div>
                  </div>
                </div>
                 <br>

                </form>
              </div>
</div>
@endsection
