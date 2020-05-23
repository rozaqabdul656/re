@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                         <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="text-center">TRY OUT UTBK TPS </h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <p class="mt-3 text-dark text-center">
                                            Hai, <b>{{Auth::user()->name}}</b> <br>
                                            Terimaksih sudah mengerjakan Try Out
                                        </p>
                                        <h6 class="mt-5 text-center">
                                            Nilai kamu adalah :
                                        </h6>
                                        <h2 class="text-center text-dark mb-3 mt-3">
                                            <span style="border-radius:5px;background-color:#eef0f2;letter-spacing:3px;padding:8px;opacity:.8;">
                                                {{$nilaifinal}}
                                            </span>
                                        </h2>
                                        <p class="mt-3 text-dark text-center" style="padding:20px;">
                                            <q>
                                                It is not that I'm so smart. But I stay with the questions much longer
                                            </q>
                                            <b>- Albert Einstein</b>
                                        </p>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <center>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12 mb-3">
                                                <a href="{{url('/home')}}"style="width:100%" class="btn btn-primary">Go to Home</a>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
 
@endsection