@section('js')
@stop

@extends('layouts.app')

@section('content')

        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div><br>

          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">	
                <!-- Card Body -->
                <div class="card-body">
                  <div class="row" style="padding: 20px;">
                    <div class="col-lg-8 col-md-10 col-sm-12 col-12  offset-lg-2 mb-3">
                      <div class="card">
                        <h5 class="card-title paket">Paket Belajar {{$bidang}}</h5>
                            <img src="{{asset('images/paket-belajar/'.$foto)}}" class="card-img-top" alt="..." >
                        <div class="card-body">
                          <ul class="detail">
                            <li class="title-list">Modul Belajar</li>
                            <li class="sub-list">
                              {{$cm}} Modul Belajar 
                            </li>
                            <li class="sub-list">
                              {{$cv}} Video Pembahasan
                            </li>
                            <li class="sub-list">
                              {{$ct}} Try Out
                            </li>
                          </ul >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row" style="padding: 20px;">
                        <div class="col-lg-8 col-md-10 col-sm-12 col-12 offset-lg-2">
                            <h5>Pembayaran</h5>
                            <div class="metode" style="padding-left: 10px;">
                              <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-3" id="instagram-btn">
                                    <center>
                                        <img src="https://image.flaticon.com/icons/svg/185/185985.svg" alt="instagram" width="32">
                                        <span>Instagram</span>
                                    </center>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-3 offset-lg-3" id="transfer-btn">
                                    <center>
                                        <img src="https://image.flaticon.com/icons/svg/1790/1790213.svg" alt="instagram" width="32">
                                        <span>Transfer Bank</span>
                                    </center>
                                </div>
                            </div>
                            </div>


                            <div class="metode-pembayaran">

                            </div>
                    </div>    
                </div>
                </div>
              </div>
            </div>
          </div>

        </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 
  <script>
    $("#instagram-btn").on("click", function(){
      $(".metode-pembayaran").html(`

     <form method='post' action="{{ route('pembayaran-free.store') }}" enctype="multipart/form-data" >
       @csrf
        
      <div class="row mt-3 mb-4" style="padding:20px" id="penambahan">
          <input type='hidden' name='bidang' value='{{$id}}'>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ig-ss">
              <h6 class="ssan">Screenshot</h6>
              <input type="file" name='ss[]'>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ig-ss">
              <h6 class="ssan">Screenshot</h6>
              <input type="file" name='ss[]'>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ig-ss">
              <h6 class="ssan">Screenshot</h6>
              <input type="file" name='ss[]'>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ig-ss">
              <h6 class="ssan">Screenshot</h6>
              <input type="file" name='ss[]'>
          </div>
          <br>
      </div>
       <i class="far fa-plus-square">
            <input type="button" name="" class="btn btn-primary" id="tambah" value="Tambahkan Inputan ScreenShoot ">
          </i>
            <button class="mt-3 btn btn-success" style="width:100%;" type='submit'>Kirim Bukti Pembayaran Screenshot</button>
      </form>`);
    });
    $("#transfer-btn").on("click", function(){
      $(".metode-pembayaran").html(`
     <form method='post' action="{{ route('pembayaran-tf.store') }}" enctype="multipart/form-data" >
     @csrf
     <input type='hidden' name='bidang' value='{{$id}}'>
     
      <div class="step-pembayaran mt-5">
      <h6>Cara Melakukan Pembayaran</h6>
      <p>
        <ol>
          <li>Transfer Lewat Ovo</li>
          <li>Transfer Lewat Bank</li>
          <li>Ini berisi cara pembayaran</li>
        </ol>
      </p>
    </div>
    <div class="row mt-4" style="padding:20px" id="trs">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12 transfer-ss">
        <h6 class="ssan">Screenshot Transfer</h6>
        <input type="file" name="tf[]">
        <input type="file" name="tf[]">
        <input type="file" name="tf[]">
        <input type="file" name="tf[]">
        
      </div>
    </div>
        <button class="btn btn-success" style="width:100%;" type='submit'>Kirim Bukti Pembayaran</button>
      </form>
      `
      )
    })
  </script>
   <script>  
      jQuery(document).ready(
        function(){
          jQuery("#tambah").click(
              function(){
var isi=`<div class='col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ig-ss'>
              <h6 class='ssan'>Screenshot</h6>
              <input type='file' name='ss[]'>
          </div>`;
        jQuery("#penambahan").append(isi);
        }
      );
    }
);
</script>
  <!-- <script>
    $('.carousel').carousel({
      interval: false
  }); 
  </script> -->
@endsection