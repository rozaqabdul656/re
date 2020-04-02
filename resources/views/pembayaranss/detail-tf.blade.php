@section('js')

@stop

@extends('layouts.app')

@section('content')
     {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
                     
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail Pembayaran</h4>
                      

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Pembayaran</label>
                            @foreach($data as $data)
                
                             <div class="col-md-12">
                                <a href="{{asset('images/pembayaran/transfer/'.$data->gambar)}}" data-fancybox="gallery">

                                <img src="{{asset('images/pembayaran/transfer/'.$data->gambar)}}" alt="pembayaran"
                                width="200" height="200">
                                </a>
                             </div>
                             
                        </div>
                        <br>
                        <br>

                         @endforeach
                        <a href="{{url('konfirmasi-tf/'.$ids.'/'.$idb)}}" class="btn btn-primary pull-left">Konfirmasi</a>
                  
                        <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a>
                  
                    </div>
                  </div>
                </div>
              </div>
</div>
@endsection
