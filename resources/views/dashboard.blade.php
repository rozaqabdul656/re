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

<div class="card-body">
                                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Hasi Saintek</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Hasil Soshum</a>
                                    </li>
                                  </ul>
                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><div class="table-responsive">

                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                           Nama
                          </th>
                          <th>
                            Bidang
                          </th>
                          <th>
                            Asal Sekolah
                          </th>
                          <th>
                            Hasil
                          </th>
                          <th>
                            Keterangan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                            $no++
                          </td>
                          <td>
                          
                            {{$data->name}}
                          
                          </td>

                          <td>
                            {{$data->bidang}}
                          </td>
                          <td>
                            {{$data->hasil}}
                          </td>
                          <td>
                            {{$data->keterangan}}
                          </td>
                          
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>

                     </div>
                                    <!-- ============== -->
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                           Nama
                          </th>
                          <th>
                            Bidangs
                          </th>
                          <th>
                            Asal Sekolah
                          </th>
                          <th>
                            Hasil
                          </th>
                          <th>
                            Keterangan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas2 as $data2)
                        <tr>
                          <td class="py-1">
                            $no++
                          </td>
                          <td>
                          
                            {{$data2->name}}
                          
                          </td>

                          <td>
                            {{$data2->bidang}}
                          </td>
                          <td>
                            {{$data2->hasil}}
                          </td>
                          <td>
                            {{$data2->keterangan}}
                          </td>                          
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>

                                    </div>
                                    
                                </div>

               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection