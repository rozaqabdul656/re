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

  <div class="col-md-6">
    <a href="{{route('rangkuman-pateron.store')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Materi</a>
  </div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title pull-left">Data Materi</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table" border='1' >
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Daftar Nama Upload
                          </th>
                          <th class="text-center">
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                            {{$no++}}
                          </td>
                          <td>
                            {{$data->name}}
                            
                          </td>
                          
                          <td class="text-center">

                              
                              <a href="{{url('rangkuman-hapus/'.$data->id.'/'.$data->id_materi)}}">
                                  <button  class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash">Hapus Upload</i></button>
                                </a>
                              
                              

                              <a href="{{url('rangkuman-detail/'.$data->id)}}"><button class="btn btn-xs btn-info"><i class="fa fa-eye">Lihat Upload Rangkuman</i></button></a>
                             
                            
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