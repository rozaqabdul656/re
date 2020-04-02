  @section('js')
@stop

@extends('layouts.app')

@section('content')

   <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Belajar Kinematika </h1>
          </div><br>

          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                  <div class="row" style="padding: 20px;">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12  offset-lg-1 mb-3">
                      <div class="card">
                        <h5 class="card-title paket">Belajar Kinematika</h5>
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="photo-slider" >
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80" class="d-block w-100" alt="photo-slider">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Second slide label</h5>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=804&q=80" class="d-block w-100" alt="photo-slider">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Third slide label</h5>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                              <div style="width:40px;height:40px;background-color: #333;border-radius:50%;padding-top:10px;">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </div>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <div style="width:40px;height:40px;background-color: #333;border-radius:50%;padding-top:10px;">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </div>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12 offset-lg-1 mt-3 mb-3 upload-tugas">
                      <div class="upload-tugas-anda">
                        <center>
                          <h4 class="mt-3 mb-5">Upload Foto Tugas Anda</h4>
                          <form action="#">
                            <input type="file">
                            <button type="submit" class="btn btn-success mt-4" style="width:100%">Kirim Tugas</button>
                        </form>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        
@endsection