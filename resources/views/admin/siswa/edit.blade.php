@extends('index')
@section('content')




<div class="md-form"> 
 <h4>HALAMAN EDIT DATA SISWA</h4>
 <p>KLIK <a href="{{url('/admin/siswa/dt_siswa')}}">DISINI </a>UNTUK KEMBALI KE HALAMAN SEBELUMNYA.</p>
</div>

<div class="panel panel-primary">
      <div class="panel-heading">FROM EDIT DATA SISWA SMA NEGERI 6 SOLOK SELATAN</div>
        <div class="panel-body">
            @foreach($tb_siswa as $siswa)
            <form role="form" action="/admin/siswa/dt_siswa/update/{{$siswa->id}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>NIS (Nomor Induk Siswa)</label>
                  <input type="text" class="form-control" name="nis" value="{{$siswa->nis}}">
                </div>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" name="nama_siswa" value="{{$siswa->nama_siswa}}">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" value="{{$siswa->tempat_lahir}}">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgl_lahir" value="{{$siswa->tgl_lahir}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat_siswa" value="{{$siswa->alamat_siswa}}">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input type="text" class="form-control" name="jenis_kelamin" value="{{$siswa->jenis_kelamin}}">
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" class="form-control" name="no_hp" value="{{$siswa->no_hp}}">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="form-control" name="status_siswa" value="{{$siswa->status_siswa}}">
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