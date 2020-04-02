@section('js')

@stop

@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('jenis-tryout.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Jenis Tryout</h4>
                      
                        <div class="form-group{{ $errors->has('jenis') ? ' has-error' : '' }}">
                            <label for="soal" class="col-md-4 control-label">Nama Jenis Try Out</label>
                            <div class="col-md-6">
                                  <textarea class="form-control" cols="100" name="tryout" required></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
						<br>
                        <button type="submit" class="btn btn-primary" name="upload" id="submit">
                                    Submit
                        </button>
                        <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>

@endsection