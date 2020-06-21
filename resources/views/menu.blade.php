<ul class="sidebar-menu" data-widget="tree" role="menu" data-accordion="false">
    <li class="header">MAIN NAVIGATION</li>
    <li><a href="{{url('/admin/index')}}"><i class="fa fa-home"></i> <span>BERANDA</span></a></li>


    @if (Auth::user()->role == '1')
    <li class="treeview">
        <a href="#">
            <i class="fa fa-database"></i> <span>DATABASE SEKOLAH</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('/admin/guru/dt_guru')}}"><i class="fa fa-book"></i>KELOLA GURU</a></li>
            <li><a href="{{url('/admin/siswa/dt_siswa')}}"><i class="fa fa-book"></i>KELOLA SISWA</a></li>
            <li><a href="{{url('/admin/pelajaran/mt_pelajaran')}}"><i class="fa fa-book"></i>MATA PELAJARAN</a></li>
            <li><a href="{{url('/admin/walkes/wl_kelas')}}"><i class="fa fa-book"></i>KELOLA WALI KELAS</a></li>
            <li><a href="{{url('/admin/jadwal/dt_jadwal')}}"><i class="fa fa-book"></i>JADWAL PELAJARAN</a></li>
            <li><a href="{{url('/admin/nilaisiswa/dt_nilai')}}"><i class="fa fa-book"></i>KELOLA NILAI SISWA</a></li>
        </ul>
    </li>
    <li class="header"> USERS</li>
    <li><a href="{{url('/admin/users/user')}}"><i class="fa fa-users"></i> <span>KELOLA DATA USERS</span></a></li>
    <li><a href="{{url('homeadmin')}}"><i class="fa fa-mail-reply-all"></i> <span>KE HALAMAN UTAMA</span></a></li>


    @elseif (Auth::user()->role == '2')
    <li><a href="{{url('/admin/nilaisiswa/dt_nilai')}}"><i class="fa fa-users"></i> <span>KELOLA NILAI SISWA</span></a></li>

    @elseif (Auth::user()->role == '3')
    <li><a href="#"><i class="fa fa-users"></i> <span>RAPORT</span></a></li>

    @endif


</ul>
