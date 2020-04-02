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
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title pull-left">Data Rangkuman</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table" border='1' >
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
                            Nama User
                          </th>
                          <th class="text-center">
                            Action
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
                            {{$data->name}}
                          </td>     
                          <td class="text-center">
                              
                              <a href="{{url('rangkuman-hapus/'.$data->id.'/'.$data->id_bidang.'/'.$data->id_materi)}}">
                               @if(Auth::user()->level == 'ADMIN')
         
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash">Hapus Rangkuman</i></button></a>
                              <a href="{{url('rangkuman-user/'.$data->id.'/'.$data->id_bidang.'/'.$data->id_materi)}}"><button class="btn btn-xs btn-info"><i class="fa fa-eye">Lihat Upload Rangkuman</i></button></a>
                                 @endif
                            
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