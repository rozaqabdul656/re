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
              <center>
              	
              	<table class="table table-striped">
              		@foreach($datas as $datab)

              		<tr> <td>
              			

              			<a href="{{url('/rangkuman-detail/'.$datab->id_bidang)}}">
                           
                              <button type="button" class="btn btn-xs btn-info"><i class="fa fa-eye">Lihat Daftar Rangkuman {{$datab->bidang}}</i></button></a>
        			</td>     
              		
        				</tr>
              	      @endforeach
             
              	</table>
              	        
              </center>
                              
                            
                        
               {{--  {!! $datas->links() !!} --}}
            </div>
          </div>
@endsection