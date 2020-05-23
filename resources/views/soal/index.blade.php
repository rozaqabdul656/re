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
<div class="row" style="padding:30px">
  <div class="offset-lg-12">
    <a href="{{route('fitur-tryout.create')}}" class="btn btn-primary btn-rounded btn-fw">
      <i class="fa fa-plus"></i> Tambah Soal Try Out
    </a>
  </div>
</div>
<div class="row mt-3" style="padding:20px;">
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body" style="padding:20px">
          <h5 class="card-title pull-left">Data Soal Paket Belajar {{$paket}} </h5>
          <h5 class="card-title pull-right">Try Out  Ke {{$to}}</h5>
          
          <div class="table-wrapper">
            <table class="table table-bordered table table-striped" id="table">
              <thead>
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Soal
                  </th>
                  <th>
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
                  <td>
                    {{$data->soal}}
                  </td>
                  <td>
                  <div class="btn-group dropdown">
                  <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                  </button>
                  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                    <a class="dropdown-item" href="{{route('fitur-tryout.edit',$data->id_soal)}}">Edit </a>
                    <form action="{{route('fitur-tryout.destroy',$data->id_soal)}}" class="pull-left"  method="post">
                    {{ csrf_field()}}
                    {{ method_field('delete') }}
                    <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                    </button>
                  </form>
                    
                  </div>
                </div>
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