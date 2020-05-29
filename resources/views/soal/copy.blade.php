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
<div class="row mt-3" style="padding:20px;">
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body" style="padding:20px">
          <h5 class="card-title">Copy Soal ke Kelas Lain</h5>
          
          <div class="table-wrapper">
            <form action="{{ url('fitur-tryout/copyProses/'.$id.'/'.$ids)}}">
              <div class="form-group">
                <label>Pilih Kelas</label>
                <select class="form-control" name="kelas">
                  @foreach($bidang as $b)
                    <option value="{{ $b->id_bidang }}">{{ $b->bidang }}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-success">Copy Soal</button>
            </form>
          </div>
        {{--  {!! $datas->links() !!} --}}
        </div>
      </div>
  </div>
</div>
@endsection