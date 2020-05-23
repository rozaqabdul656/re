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
<div class="row justify-content-left" style="padding:20px">
  <div class="col-lg-6 col-md-6 col-sm-10 col-10 offset-lg-2 offset-md-2 offset-sm-1 offset-1">
    <a width="100%" href="{{route('jenis-tryout.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Jenis Try Out</a>
  </div>
</div>
<div class="row justify-content-center" style="padding:20px">
<div class="col-lg-8 col-md-10 col-sm-10 col-12">
              <div class="card">
                <div class="card-body" style="padding:20px">
                  <h4 class="card-title pull-left">Data Jenis Try Out</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Try Out
                          </th>
                          <th class="text-center" width="400">
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
            
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"> Hapus Jenis Try Out</i></button></a>

                              <a href="{{route('jenis-tryout.edit',$data->id_try_out)}}">
            
                              <button type="submit" class="btn btn-xs btn-info" ><i class="fa fa-edit"> Edit Jenis Try Out</i></button></a>
            

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