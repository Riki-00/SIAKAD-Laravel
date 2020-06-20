@extends('index')
@section('content')

<div class="md-form"> 
 <h4>HALAMAN EDIT DATA WALI KELAS</h4>
 <p>KLIK <a href="{{url('/admin/walkes/wl_kelas')}}">DISINI </a>UNTUK KEMBALI KE HALAMAN SEBELUMNYA.</p>
</div>

<div class="panel panel-primary">
      <div class="panel-heading">FROM EDIT DATA WALI KELAS SMA NEGERI 6 SOLOK SELATAN</div>
        <div class="panel-body">
            @foreach($tb_walkes as $walkes)
            <form role="form" action="/admin/walkes/wl_kelas/update/{{$walkes->id}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Wali Kelas</label>
                  <input type="text" class="form-control" name="nama_walas" value="{{$walkes->nama_walas}}">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" name="kelas_walas" value="{{$walkes->kelas_walas}}">
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
            @endforeach
          </div>
  
@endsection