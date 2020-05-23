
@extends('layouts.app')

@section('content')

<div class="row" style="margin-top: 20px;">
	<div class="col-lg-12 grid-margin stretch-card">
              <center>
              	
              	<table class="table table-striped">
              		@foreach($data as $datab)

              		<tr> 
              			<td>
              			

              			<a href="{{url('/nilai-detail/'.$datab->id_try_out)}}">
                           
                              <button type="button" class="btn btn-xs btn-info"><i class="fa fa-eye">Lihat Daftar Nilai  {{$datab->id_try_out}}</i></button></a>
        			</td>     
              		
        				</tr>
              	      @endforeach
             
              	</table>
              	        
              </center>
                              
                            
                        
               {{--  {!! $datas->links() !!} --}}
                
            </div>
          </div>
@endsection