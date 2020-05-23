@section('js')
@stop
@extends('layouts.app')

@section('content')
<div class="row" style="margin: 30px;">
  <div class="card">
    @foreach($datas as $data)
          <div class="card-body">
            <div class="row" style="padding:20px">
              <video src="{{asset('videos/tutorial/'.$data->video)}}" controls class="col-lg-12 col-md-10 col-sm-12 col-12 mb-3"></video>
            </div>
          </div>
          <div class="card-footer">
            <div>
              <a href="{{ url()->previous() }}" class="btn btn-primary col-lg-4 col-md-4 col-sm-4 col-4" style="margin-left: 10px;">Back</a>
            </div>  
          </div>       
          {{--  {!! $datas->links() !!} --}}
        </div>
    @endforeach
  </div>
@endsection