@extends('index')
@section('content')




<div class="md-form"> 
 <h4>HALAMAN EDIT DATA SISWA</h4>
 <p>KLIK <a href="{{url('/admin/nilaisiswa/dt_nilai')}}">DISINI </a>UNTUK KEMBALI KE HALAMAN SEBELUMNYA.</p>
</div>

<div class="panel panel-primary">
      <div class="panel-heading">FROM TAMBAH PELAJARAN SISWA SMA NEGERI 6 SOLOK SELATAN</div>

                    &emsp;<font size="h3">SMA NEGERI 6 SOLOK SELATAN</font><br/>
                    &emsp;<font size="h3">Standar Operasi (SOP) Pengisian Data :</font>                
                    <p><ul>
                    <font size="2">1. Pilih nama siswa.</font><br>
                    <font size="2">2. Pastikan perhatikan disebelah nama siswa terlihat kelas asal siswa.</font><br>
                    <font size="2">3. Pilih daftar pelajaran yang ingin diinput (centang pelajaran dibawah).</font><br>
                    <font size="2">4. Jika pelajaran telah diambil sebelumnya, maka pelajaran yang dicentang otomatis dihapus sistem.</font>
                    </ul></p>

        <div class="panel-body">
            <form role="form" action="/admin/nilaisiswa/edit_nilai" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                
        <div class="col-xs">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Nama Guru</th>
                  <th>Nilai</th>
                  <th><center>Kelas Cakupan</center></th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_nilai as $tb)
                </thead>
                <tbody>
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$tb->mata_pelajaran}}</td>
                  <td>{{$tb->nama_guru}}</td>
                  <td>{{$tb->nilai ?? 0}}</td>
                  <td><center>{{$tb->cakupan}}</center></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div> 
@endsection