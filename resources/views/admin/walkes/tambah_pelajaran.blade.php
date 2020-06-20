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
            <form role="form" action="/admin/walkes/tambah_pelajaran/create" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Wali Kelas</label>
                  <input type="text" class="form-control" name="id_walas" value="{{$walkes->id}}">
                </div>
              <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <select class="form-control select2" name="id_matapelajaran" id="show_mata_pelajaran">
                    <option>---Pilih Mata Pelajaran---</option>
                  </select>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="modal-footer">
                <button type="Submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </form>
            @endforeach
          </div>
  
@endsection