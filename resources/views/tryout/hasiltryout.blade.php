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
                                   
           <div class="table-responsive">

                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                           Tryout
                          </th>
                          <th>
                            Paket Belajar 
                          </th>
                          <th class="text-center">
                            Hasil
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
                          
                            {{$data->try_out}}
                          
                          </td>
                          <td>
                            {{$data->bidang}}
                          </td>


                          <td class="text-center">
                            
                            @foreach($con as $cek)


                            
                              @if($cek->id_bidang == $data->id_bidang   && $cek->id_try_out == $data->id_try_out)
                            <div class="container">
                                <div class="progress">
                                    <?php if ($data->hasil == 0 ): ?>
                                       <div style="color: black" class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                     
                                    
                                  </div>
                                    <?php endif ?>
                                  <div class="progress-bar" style="color: black" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{( $data->hasil/$cek->jumlah)* 100 }}%">
                                     {{( $data->hasil/$cek->jumlah)* 100 }}%
                                    
                                  </div>
                                </div>
                              </div>
                              @endif
                              @endforeach

                          </td>
                          <td>
                          </td>
                          
                        </tr>
                 
          @endforeach
            </tbody>
              </table>
            </div>
            </div>

           <!-- ============== -->
                                    </div>
                                    
                                </div>

               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection