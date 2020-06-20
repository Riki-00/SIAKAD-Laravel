@extends('index')
@section('content')




<div class="md-form"> 
 <h4>HALAMAN EDIT MATA PELAJARAN</h4>
 <p>KLIK <a href="{{url('/admin/pelajaran/mt_pelajaran')}}">DISINI </a>UNTUK KEMBALI KE HALAMAN SEBELUMNYA.</p>
</div>

<div class="panel panel-primary">
      <div class="panel-heading">FROM EDIT MATA PELAJARAN SMA NEGERI 6 SOLOK SELATAN</div>
        <div class="panel-body">
            @foreach($tb_pelajaran as $pelajaran)
            <form role="form" action="/admin/pelajaran/mt_pelajaran/update/{{$pelajaran->id}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nip</label>
                  <input type="text" class="form-control" name="nis" value="{{$pelajaran->nis}}">
                </div>
                <div class="form-group">
                  <label>Nama Guru</label>
                  <input type="text" class="form-control" name="nama_guru" value="{{$pelajaran->nama_guru}}">
                </div>
                <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <input type="text" class="form-control" name="mata_pelajaran" value="{{$pelajaran->mata_pelajaran}}">
                </div>
                <div class="form-group">
                  <label>Kelas Cakupan</label>
                  <input type="text" class="form-control" name="cakupan" value="{{$pelajaran->cakupan}}">
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