@section('js')
@stop
@extends('layouts.app')

@section('content')
<div class="row">
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/afterglow/latest/afterglow.min.js"></script>
<div class="row" style="margin: 30px;">
  @foreach($datas as $data)
          <center>
              <div class="card">
                <video class="afterglow" id="myvideo" width="1000" height="600">
                 <source type='video/mp4' src="{{asset('videos/tutorial/'.$data->video)}}" />
               </video>
                {{--  {!! $datas->links() !!} --}}
                </div>
          </center>
          <br>
          @endforeach
              </div>
 <a href="{{ url()->previous() }}" class="btn btn-primary pull-left" style="margin-left: 10px;">Back</a>    
         

            
@endsection