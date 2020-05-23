@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">
@if(Auth::user()->level == 'ADMIN')
         
  <div class="col-md-6">
    <a href="{{route('materi-pateron.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Materi</a>
  </div>
  @endif
</div>
<div class="row justify-content-center" style="margin-top: 20px;padding:20px;">
<div class="col-lg-12 col-md-10 col-sm-12 col-12">
              <div class="card">
                <div class="card-body" style="padding:20px">
                  <h4 class="card-title pull-left">Data Materi</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                           Paket Belajar
                          </th>
                          <th>
                            Nama Materi
                          </th>
                          <th>
                            Keterangan Admin
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                            {{$no++}}
                          </td>
                          <td class="avatar">
                              {{$data->bidang}}
                          </td>
                          <td>
                            {{$data->judul_materi}}
                          </td>
                          <td>
                            {{$data->keterangan}}
                          </td>     
                          
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection