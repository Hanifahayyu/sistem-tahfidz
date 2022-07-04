@extends('master')
@section('navbar_admin')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Data Santri</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('santri.index') }}">Daftar Santri</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('santri.create') }}">Tambah Santri</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('presensi.index') }}">Presensi</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-hafalan" aria-expanded="false" aria-controls="ui-hafalan">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Data Hafalan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-hafalan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('tahfid.index') }}">Daftar Hafalan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('tahfid.create') }}">Tambah Hafalan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Data Kelas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('kelas.index') }}">Daftar Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('kelas.create') }}">Tambah Kelas</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Data User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('user.index')}}"> Daftar User </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('logout')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
@endsection
