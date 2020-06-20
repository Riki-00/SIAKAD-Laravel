@extends('index')
@section('content')


<div class="md-form"> 
 <h4>HALAMAN EDIT DATA GURU</h4>
 <p>KLIK <a href="{{url('/admin/guru/dt_guru')}}">DISINI </a>UNTUK KEMBALI KE HALAMAN SEBELUMNYA.</p>
</div>

<div class="panel panel-primary">
      <div class="panel-heading">FROM EDIT DATA GURU SMA NEGERI 6 SOLOK SELATAN</div>
        <div class="panel-body">
            @foreach($tb_guru as $guru)
            <form role="form" action="/admin/guru/dt_guru/update/{{$guru->id}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" class="form-control" name="nip" value="{{$guru->nip}}">
                </div>
                <div class="form-group">
                  <label>Nama Guru</label>
                  <input type="text" class="form-control" name="nama_guru" value="{{$guru->nama_guru}}">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input type="text" class="form-control" name="jenis_kelamin" value="{{$guru->jenis_kelamin}}">
                </div>
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" class="form-control" name="no_telp" value="{{$guru->no_telp}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat_guru" value="{{$guru->alamat_guru}}">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_Lahir" value="{{$guru->tempat_lahir}}">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgl_lahir" value="{{$guru->tgl_lahir}}">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="form-control" name="status" value="{{$guru->status}}">
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