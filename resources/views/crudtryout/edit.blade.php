@section('js')

@stop

@extends('layouts.app')

@section('content')


 @foreach($data as $data)
    
<form action="{{route('jenis-tryout.update',$data->id_try_out)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
                     
            <div class="col-md-12">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Jenis Try Out</h4>
                        <div class="form-group{{ $errors->has('try_out') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Try Out</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="try_out">{{ $data->try_out}}</textarea>
                            </div>
                        </div>
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