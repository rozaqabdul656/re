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
                  <h4 class="card-title pull-left">Rangking Nilai dari  {{$tryout}}</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table" border='1' >
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>Email</th>
                          <th>No Telpon</th>
                          <th>

                          	Nama
                          </th>
                          <th>
                          	Kelas
                          </th>
                          <th>Nilai</th>

                          
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $no=1; ?>
                      @foreach($data as $data)
                        <tr>
                          <td class="py-1">
                            {{$no++}}
                          </td>
                          <td>
                            {{$data->email}}
                          </td>
                          <td>{{$data->no_hp}}</td>
                          <td class="avatar">
                              {{$data->name}}
                          </td>
                          <td>
                            {{$data->bidang}}
                          </td>
                          <td>
                            {{ round(($data->hasil/$jumlahsoalfinal)*100 , 2) }} %
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