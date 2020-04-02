@section('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
@stop

@extends('layouts.app')

@section('content')


<script>  
      jQuery(document).ready(
        function(){
          jQuery("#tambah").click(
              function(){
var isi='<div><label for="materi" class="col-md-4 control-label">InputKan Rankuman </label><div class="col-md-12"><input type="file" id="filea" name="rangkuman[]"class="form-control" name="materi"></div></div><br><br>';
        jQuery("#penambahan").append(isi);
        }
      );
    }
);
</script>
<form method="POST" action="{{ route('rangkuman-pateron.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Rangkuman </h4>
                        <br>
                        <br>
                        <div id="penambahan">
                          <div class="form-group{{ $errors->has('materi') ? ' has-error' : '' }}">
                            <label for="materi" class="col-md-4 control-label">InputKan Rankuman </label>
                            <div class="col-md-12">
                                <input type="file" id="filea" name="rangkuman[]"  class="form-control" name="materi" value="{{ old('option_a') }}" >
                            </div>
                          </div>
                        </div>
                        
                            <i class="far fa-plus-square">
                              <input type="button" name="" class="btn btn-primary" id="tambah" value="Tambah Inputan Gambar ">
                               
                              </i>  
                           <!--  <button class="btn btn-primary" id="tambah">
                              
                                 
                            </button>
                           -->
                        
                        <br>  
                        <br>
                        <input type="hidden" name="materi" value="{{$data}}">
                        <input type="hidden" name="materib" value="{{$datam}}">
                        
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <!-- <a href="" class="btn btn-light pull-right">Back</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
       </div>
</form>
@endsection