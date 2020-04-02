@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('tryout.store') }}">
                        @csrf

                        @foreach($data as $datas)
                        <h5>Try Out Ke {{$datas->try_out}}</h5>
                        <h5>Paket Belajar {{$datas->bidang}}</h5>
                        <br>
                       
                       <input type="hidden" name="to" value="{{$datas->id_try_out}}">
                       <input type="hidden" name="bidang" value="{{$datas->id_bidang}}">
                       
                        @endforeach                        
                      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Go Try Out') }}
                                </button>

                                </a>
                            </div>
                        </div>
                        <br>
                        <br>
                        <center>
                        <div style="border:6px ridge black; padding:5px"> 
                                        <h1>PETUNJUK KHUSUS</h1>
                                        <br>
                                      <table>
                                        <tr>
                                            <th>PETUNJUK A</th>
                                            <td></td>
                                            <td> Pilih Jawaban jawaban yang  paling benar(A,B,C,D atau E)</td>
                                        </tr>
                                        <tr>
                                            <th>PETUNJUK B</th>
                                            <td></td>
                                            
                                            <td> Soal terdiri  atas tiga bagian  yaitu pertnyataan benar,sebab,dan alasannya  yang disusun scara berurutan , Pilihlah:</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(A). Jika  pernyataan benar  alasan benar , keduanya  memunjukan hubungan  sebab akibat </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(B). Jika pernyataan benar alasan benar tetapi keduanya  tidak menujukan hubungan sebab akibat .</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(C). Jika pernyataan benar  alasan salah </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>
                                                (D). Jika pernyataan salah , alasan benar 
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(E). Jika Pernyataan dan alasan keduanya salah</td>
                                        </tr>
                                        <tr>
                                            <th>PETUNJUK C </th>
                                            <td></td>
                                            
                                            <td>Pilihlah : </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(A). Jika jawaban (1),(2)dan (3) benar</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(B). Jika jawaban (1)dan (3) benar</td>
                                            
                                        </tr>
                                      <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(C). Jika jawaban (2)dan (4) benar</td>
                                            
                                        </tr>
                                      <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(D). Jika jawaban (4) saja yang benar</td>
                                            
                                        </tr>
                                      <tr>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>(E). Jika semua jawaban benar</td>
                                            
                                        </tr>
                                      </table>  
                                    </div>
                                    <br>
                                          </center>
                                    <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
