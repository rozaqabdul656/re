@section('js')
   <style>
        .progress { position:relative; width:100%; }
        .bar { background-color: #008000; width:0%; height:20px; }
         .percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}
   </style>

@stop

@extends('layouts.app')

@section('content')
<script src="http://malsup.github.com/jquery.form.js"></script> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script src="http://malsup.github.com/jquery.form.js"></script>


<form method="POST" action="{{ route('video.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Video Tutorial</h4>
                      
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="soal" class="col-md-4 control-label">Paket Belajar</label>
                            <div class="col-md-6">
                                
                                <select class="form-control" name="bidang">
                                	   @foreach($data as $datas)
                   
                                	<option value="{{$datas->id_bidang}}">{{$datas->bidang}}</option>
                                	@endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="soal" class="col-md-4 control-label">Judul Video</label>
                            <div class="col-md-6">
                                  <textarea class="form-control" cols="100" name="judul"></textarea>
                        
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Video </label>
                            <div class="col-md-6">
                                <input type="file" id="file" class="uploads form-control" style="margin-top: 20px;" name="file">
                            </div>
                        </div>
                        <br>
                        <br>
 <div class="progress">
                        <div class="bar"></div >
                        <div class="percent">0%</div >
                    </div>                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary" name="upload" id="submit">
                                    Submit
                        </button>
                        <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
<script type="text/javascript">
 
    function validate(formData, jqForm, options) {
        var form = jqForm[0];
        if (!form.file.value) {
            alert('File not found');
            return false;
        }
    }
 
    (function() {
 
    var bar = $('.bar');
    var percent = $('.percent');
    var status = $('#status');
 
    $('form').ajaxForm({
        beforeSubmit: validate,
        beforeSend: function() {
            status.empty();
            var percentVal = '0%';
            var posterValue = $('file').files;
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        success: function() {
            var percentVal = 'Wait, Saving';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        complete: function(xhr) {
            status.html(xhr.responseText);
            alert('Uploaded Successfully');
            window.location.href = "/video/create";
        }
    });
     
    })();
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
@endsection