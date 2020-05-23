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

                    <table class="table table-striped"  id="table-data">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                           Nama
                          </th>
                          <th>
                            Asal Sekolah
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            No Hp
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
                          
                            {{$data->name}}
                          
                          </td>
                          <td>
                            {{$data->asal_sekolah}}
                          </td>
                          <td>
                            {{$data->email}}
                          </td>
                          <td>
                            {{$data->no_hp}}
                          </td>
                          <td>
                               <a class="fa fa-edit" href="{{route('peserta.show',$data->id)}}"> Edit </a>
                               <a href="" data-toggle="modal" data-target="#myModal{{$data->id}}" class="fa fa-edit">Change Password</a>
                               <form action="{{route('peserta.destroy',$data->id)}}" class="pull-left"  method="post">
                              {{ csrf_field()}}
                              {{ method_field('delete') }}
                                <button class="btn btn-succes" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete Anggota
                              </button>
                             </form>
                           
                                
                          </td>
                        </tr>
                       <div id="myModal{{$data->id}}" class="modal fade" role="dialog">
   <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">
            
            <h5>Masukan Password Baru</h5>
            <form method="post" action="{{ route('peserta.store') }}">
              @csrf
              <div class="form-group row">
                      <input type="hidden" value="{{$data->id}}" name="id">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                                >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <input type="submit"  name="simpan" value="Simpan">
            </form>
          </div>
 

        <!-- footer modal -->
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
 
                @endforeach
                 </tbody>
               </table>
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