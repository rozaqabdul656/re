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
    <a href="{{route('jenis-tryout.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Jenis Try Out</a>
  </div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title pull-left">Data Jenis Try Out</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table" border='1' >
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Try Out
                          </th>
                          <th class="text-center">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $data)
                        <tr>
                          <td class="py-1">
                            {{$no++}}
                          </td>
                          <td class="avatar">
                            {{$data -> try_out}}
                          </td>
                          <td class="text-center">
                              
                              <a href="{{url('delete-jenis',$data->id_try_out)}}">
            
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash">Hapus Jenis Try Out</i></button></a>

                              <a href="{{route('jenis-tryout.edit',$data->id_try_out)}}">
            
                              <button type="submit" class="btn btn-xs btn-info" ><i class="fa fa-edit">Edit Jenis Try Out</i></button></a>
            

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