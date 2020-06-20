<style>
#table{
   width:100%;
   font-size:12px;
   /* padding: 7px 17px; */
   border-collapse: collapse;
}
/* thead{
  font-weight:bold;
}
p{
  margin:none;
  font-size:12;
}
th{
  font-weight:bold;
  text-align: -intenal-center;

} */
#table, td, th{
  /* display:table-cell; */
  /* vertical-align: inherit; */
  border: 1px solid #000;
  /* padding: 8px 20px; */
}

#table2{
  /* border: 0px; */
}
#table2{
  /* display:table-cell; */
  /* vertical-align: inherit; */
  border: 0px;
  /* padding: 8px 20px; */
}
#td{
  border: 0px;
}
#th{
  border: 0px;
}
</style>

          <table class="table2" id="table2" border="0">
                <!-- <td><img src="http://localhost:8000/assets/dist/img/avatar.png" width="70" height="90"></td> -->
                <tr id="th">
                    <td id="td"><img src="{{('img/sumbar.png')}}" width="70" height="90"></td>
                <td id="td"><center>
                    <font size="4">PEMERINTAH PROVINSI SUMATERA BARAT</font><br>
                    <font size="4">DINAS PENDIDIKAN</font><br>
                    <font size="4">SMA NEGERI 6 SOLOK SELATAN</font><br>
                    <font size="2"><i>Jln. Raya Padang Aro - Muara Labuh Km. 5 | Kode Pos : 27778 | Email : sman6solsel@gmail.com</i></font>
                </td></center>
                    <td id="td"><img src="{{('img/LogoSMA.jpg')}}" width="70" height="90"></td>
                </tr>
                <center><p class="line-height: 1">NAMA-NAMA SISWA SMA NEGERI 6 SOLOK SELATAN TAHUN 
                <?php 
                echo date('Y');
                ?>
                </p></center>
                <hr>
          </table>

<div>
            <div>
              <table class="table" id="table" border="0" align="center">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIS(Nomor Induk Siswa)</th>
                  <th>Nama Siswa</th>
                  <th>JK</th>
                  <th>No Telp</th>
                  <th>Alamat</th>
                  <th>Status</th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_siswa as $tb)
                </thead>
                <tbody>
                <tr>
                  <td><center>{{$no++}}</center></td>
                  <td>{{$tb->nis}}</td>
                  <td>{{$tb->nama_siswa}}</td>
                  <td><center>{{$tb->jenis_kelamin}}</center></td>
                  <td><center>{{$tb->no_hp}}</center></td>
                  <td><center>{{$tb->alamat_siswa}}</center></td>
                  <td><center>{{$tb->status_siswa}}</center></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->

        	
<!-- konten sebelumnya -->
<div>
	<div style="text-align:right;"><br/>
		Sungai Lambai,
      <?php 
        echo date('d F Y');
      ?>
		<br/>KEPALA SEKOLAH<br/><br/><br/>
		<p>Syamsuria, S.Pd. MM<br/>NIP. 19680702199201006</p>
	</div>
	<div style="clear:both"></div>
</div>
<!-- konten selanjutnya -->
