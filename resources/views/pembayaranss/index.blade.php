
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

<div class="card-body" style="padding:20px;margin:20px;background-color:white;">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pembayaran ScreenShoot</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pembayaran Transfer</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profilekonfirmasi" role="tab" aria-controls="profile" aria-selected="false">Daftar Pembayaran Transfer Terkonfirmasi </a>
  </li>

  <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profilekonf" role="tab" aria-controls="profile" aria-selected="false">Daftar Pembayaran Free Terkonfirmasi </a>
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
                            Action

                                <a href="{{url('konfirmasi-allss')}}">
                                 <button class="btn btn-info pull-right">Kofirmasi All Data Screenshoot</button>
                         
                              </a>
                          
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $data)
                        <tr>
                          <td class="py-1">
                            {{$no++}}
                          </td>
                          <td>
                          
                            {{$data->name}}
                          
                          </td>
                          <td>
                            {{$data->bidang}}
                          </td>
                          <td>
                              <a href="{{url('pembayaran/detail/'.$data->id.'/'.$data->id_bidang)}}">
                              <button type="submit" class="btn btn-xs btn-info" ><i class="fa fa-edit">Detail</i></button></a>
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
                            Bidang
                          </th>
                          <th>
                            Action
                              <a href="{{url('konfirmasi-alltf')}}">
                                 <button class="btn btn-info pull-right">Kofirmasi All Data Transfer</button>
                         
                              </a>
                              
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $datas)
                        <tr>
                          <td class="py-1">
                            {{$nos++}}
                          </td>
                          <td>
                          
                            {{$datas->name}}
                          
                          </td>
                          <td>
                            {{$datas->bidang}}
                          </td>
                          <td>
                              <a href="{{url('pembayaran-tf/detail/'.$datas->id.'/'.$datas->id_bidang)}}">
                              <button type="submit" class="btn btn-xs btn-info" ><i class="fa fa-edit">Detail</i></button></a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  
                  </div>
                </div>

                  <div class="tab-pane fade" id="profilekonfirmasi" role="tabpanel" aria-labelledby="profile-tab">
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
                            Bidang
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                      $no1=1;
                       ?>
                      @foreach($datadone as $datasdone)
                        <tr>
                          <td class="py-1">
                            {{$no1++}}
                          </td>
                          <td>
                          
                            {{$datasdone->name}}
                          
                          </td>
                          <td>
                            {{$datasdone->bidang}}
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  
                  </div>
                </div>

<div class="tab-pane fade" id="profilekonf" role="tabpanel" aria-labelledby="profile-tab">
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
                            Bidang
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                            <?php 
                      $no2=1;
                       ?>
                    
                      @foreach($datafree as $datascdone)
                        <tr>
                          <td class="py-1">
                            {{$no2++}}
                          </td>
                          <td>
                          
                            {{$datascdone->name}}
                          
                          </td>
                          <td>
                            {{$datascdone->bidang}}
                          </td>
                          
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  
                  </div>
                </div>
              </div>





                                    </div>
                                    
                                </div>

               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection