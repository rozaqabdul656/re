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
    <a href="{{route('paket-belajar.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Paket Belajar</a>
  </div>
  @endif
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title pull-left">Data Paket Belajar</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table" border='1' >
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                           Cover
                          </th>
                          <th>
                            Judul Materi
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
                              <img class="rounded-circle" style="width: 100px; height: 100px;" src="images/paket-belajar/{{$data->foto}}" alt="Judul">
                          </td>
                          <td>
                            {{$data->bidang}}
                            
                          </td>
                          
                          <td class="text-center">
                              
                              <a href="{{url('delete-bidang',$data->id_bidang)}}">
            
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash">Hapus Paket Belajar</i></button></a>

                              <a href="{{route('paket-belajar.edit',$data->id_bidang)}}">
            
                              <button type="submit" class="btn btn-xs btn-info" ><i class="fa fa-edit">Edit Paket Belajar</i></button></a>
            

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