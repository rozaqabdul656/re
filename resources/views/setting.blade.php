@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>asdad</h1>
                    <form method="POST" action="{{ route('setting.store') }}">
                           </label>
                            <div class="col-md-12">
                                    @csrf
                            @foreach($datas as $data)
                                <label for="waktu" class="col-md-12 control-label">Waktu Pengerjaan Try Out {{$data->try_out}} Bidang : {{$data->bidang}} (Dalam Menit)
                                </label>
                                <br>
                                <input  type="number"  class="form-control" name="waktu[]" value="{{ $data->waktu}}" required>
                                @if ($errors->has('waktu1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('waktu1') }}</strong>
                                    </span>
                                @endif
                                <br>

                                <input type="hidden"  name="id[]" value="{{$data->id_try_out}}">
                                <input type="hidden"  name="idb[]" value="{{$data->id_bidang}}">
                                
                            </div>
                
                            @endforeach
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
