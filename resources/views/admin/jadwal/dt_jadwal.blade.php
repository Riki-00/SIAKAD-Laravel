@extends('index')
@section('content')

<section class="content">
	@if(session('sukses'))
<div class="callout callout-info">
    <p>{{session('sukses')}}</p>
  </div>
  @endif


  
  <div class="panel panel-primary">
      <div class="panel-heading"><center>SEMUA MATA PELAJARAN SMA NEGERI 6 SOLOK SELATAN TELAH DISESUAIKAN</center></div>
        <div class="panel-body">					
          <div class="md-form"> 
            <div class="box-header">
              <h3 class="box-title">SMA NEGERI 6 SOLOK SELATAN</h3>
              <p>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA</p>
              <p><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i> Tambah Data</a> <span>
                  <a href="{{url('laporanmatpel')}}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print Data</a> </span>  <span> 
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Refresh Halaman</a> </span></p>
              <hr class="panel panel-primary"> </p></div>
              <!-- /.box-header -->
        </section>
        @endsection

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <div class="panel panel-primary">
                <div class="panel-heading"><center>TAMBAH DATA WALI KELAS SMA NEGERI 6 SOLOK SELATAN</center></div>
              </div>
              <div class="modal-body">
                <form role="form" action="/admin/jadwal/dt_jadwal/create" method="POST">
                  {{csrf_field()}}
                  <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control select2" name="kelas_walas" id="show_kelas_walas">
                    <option>---Pilih Kelas---</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Semester</label>
                  <select class="form-control" name="semester">
                    <option>---Pilih Semester---</option>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <select class="form-control" name="thn_ajar">
                    <option>---Pilih Tahun Ajaran---</option>
                    <option value="2018/2019">2018/2019</option>
                    <option value="2019/2020">2019/2020</option>
                    <option value="2020/2021">2020/2021</option>
                    <option value="2021/2022">2021/2022</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Hari</label>
                  <select class="form-control" name="hari">
                    <option>---Pilih Hari---</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jam Masuk</label>
                  <input type="text" class="form-control" name="j_masuk" placeholder="Misal : 08.00 / 10.00">
                </div>
                <div class="form-group">
                  <label>Jam Keluar</label>
                  <input type="text" class="form-control" name="j_keluar" placeholder="Misal : 08.00 / 10.00">
                </div>
                <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <select class="form-control select2" name="mata_pelajaran" id="show_mata_pelajaran">
                    <option>---Pilih Mata Pelajaran---</option>
                  </select>
                </div>
                
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        </div>
        