@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="css/style-home.css">
<link rel="stylesheet" href="css/partials/style-alertnotif.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                    <!--Halaman Dashboard-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-desktop"></i>
                <span class="text">Dashboard</span>
            </div>
@if (Auth::user()->role == 'Admin')
{{-- Dashboard Admin --}}
            <div class="boxes">
                <div class="box box1">
                    <i class="uil uil-trees"></i>
                    <span class="text">Total Data Organik</span>
                    <span class="number">{{ $jml_organik }}</span>
                </div>
                <div class="box box2">
                    <i class="uil uil-process"></i>
                    <span class="text">Total Data Anorganik</span>
                    <span class="number">{{ $jml_anorganik }}</span>
                </div>
                <div class="box box3">
                    <i class="uil uil-clipboard"></i>
                    <span class="text">Total Data Lapak</span>
                    <span class="number">{{ $jml_lapak }}</span>
                </div>
                {{-- <div class="box box4">
                    <i class="uil uil-books"></i>
                    <span class="text">Data TPS</span>
                    <span class="number">50,120</span>
                </div> --}}
                <div class="box box5">
                    <i class="uil uil-comment"></i>
                    <span class="text">Total Data Pembatasan</span>
                    <span class="number">{{ $jml_pembatasan }}</span>
                </div>
                <div class="box box6">
                    <i class="uil uil-gold"></i>
                    <span class="text">Total Data Sampah Spesifik</span>
                    <span class="number">{{ $jml_sampahspesifik }}</span>
                </div>
            </div>
{{-- END --}}
{{-- Daftar Pengguna --}}
            <div class="title2">
                <i class="uil uil-user-square"></i>
                <span class="text">Daftar Pengguna</span>
            </div>
            <div class="up">
                <div class="btn-tambah">
                    <button type="button" data-toggle="modal" data-target=".bd-example-modal-sm" class="button-tambah">
                        <i class="uil uil-plus"></i>
                        <span class="link-name">Tambah Akun Pengguna</span>
                    </button>
                </div>
            </div>
{{-- END --}}
{{-- Modal Tambah Akun --}}
    <div class="modal fade bd-example-modal-sm" id="bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('home.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="" hidden>-- Pilih Role --</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role">Unit Kerja</label>
                            <select name="unit_kerja" id="unit_kerja" class="form-control" required>
                                <option value="" hidden>-- Pilih Unit Kerja --</option>
                                <option value="Admin">Admin</option>
                                <option value="Cakung">Cakung</option>
                                <option value="Cipayung">Cipayung</option>
                                <option value="Ciracas">Ciracas</option>
                                <option value="Duren Sawit">Duren Sawit</option>
                                <option value="Jatinegara">Jatinegara</option>
                                <option value="Kramat Jati">Kramat Jati</option>
                                <option value="Makasar">Makasar</option>
                                <option value="Matraman">Matraman</option>
                                <option value="Pasar Rebo">Pasar Rebo</option>
                                <option value="Pulogadung">Pulogadung</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required minlength="6">
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <input type="submit" class="btn btn-primary" value="Tambah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{-- END --}}
{{-- Isi Tambah Akun --}}
            <div class="space"></div>
                <div class="card-grid">
                    <div class="boxes">
                        <table class="view">
                            <div hidden>{{ $no=1 }}</div>
                            <tr>
                                <td align="center">No</td>
                                <td align="center">Username</td>
                                <td align="center">Role</td>
                                <td align="center">Unit Kerja</td>
                                <td align="center">Kecamatan</td>
                                <td align="center">Aksi</td>
                            </tr>
                            @foreach ($akun as $add )
                            <tr>
                                <td align="center">{{ $no++ }}</td>
                                <td align="center">{{ $add->username }}</td>
                                <td align="center">{{ $add->role }}</td>
                                <td align="center">{{ $add->unit_kerja }}</td>
                                <td align="center">{{ $add->kecamatan->name_kec }}</td>
                                <td class="text-center" >
                                    <a href="/home/{{ $add->id }}/ubah" data-toggle="modal" data-target=".bd-example1-modal-sm" class="ubah">Ubah</a>
                                    <form action="/home/{{ $add->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Hapus" class="hapus">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
    </div>
{{-- END --}}
{{-- Modal Edit Tambah Akun --}}
    <div class="modal fade bd-example1-modal-sm" id="bd-example1-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Akun Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/home/{{ $add->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{ $add->username }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="{{ $add->role }}" hidden>{{ $add->role }}</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role">Unit Kerja</label>
                            <select name="unit_kerja" id="unit_kerja" class="form-control" required>
                                <option value="{{$add->unit_kerja}}" hidden>{{$add->unit_kerja}}</option>
                                <option value="Admin">Admin</option>
                                <option value="Cakung">Cakung</option>
                                <option value="Cipayung">Cipayung</option>
                                <option value="Ciracas">Ciracas</option>
                                <option value="Duren Sawit">Duren Sawit</option>
                                <option value="Jatinegara">Jatinegara</option>
                                <option value="Kramat Jati">Kramat Jati</option>
                                <option value="Makasar">Makasar</option>
                                <option value="Matraman">Matraman</option>
                                <option value="Pasar Rebo">Pasar Rebo</option>
                                <option value="Pulogadung">Pulogadung</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="{{ $add->password }}" required minlength="6">
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- END --}}
@else
{{-- Dashboard Pengguna --}}
            <div class="boxes">
                <div class="box box1">
                    <i class="uil uil-trees"></i>
                    <span class="text">Total Data Organik</span>
                    <span class="number">{{ $jml_organik }}</span>
                </div>
                <div class="box box2">
                    <i class="uil uil-process"></i>
                    <span class="text">Total Data Anorganik</span>
                    <span class="number">{{ $jml_anorganik }}</span>
                </div>
                <div class="box box3">
                    <i class="uil uil-clipboard"></i>
                    <span class="text">Total Data Lapak</span>
                    <span class="number">{{ $jml_lapak }}</span>
                </div>
                {{-- <div class="box box4">
                    <i class="uil uil-books"></i>
                    <span class="text">Data TPS</span>
                    <span class="number">50,120</span>
                </div> --}}
                <div class="box box5">
                    <i class="uil uil-comment"></i>
                    <span class="text">Total Data Pembatasan</span>
                    <span class="number">{{ $jml_pembatasan }}</span>
                </div>
                <div class="box box6">
                    <i class="uil uil-gold"></i>
                    <span class="text">Total Data Sampah Spesifik</span>
                    <span class="number">{{ $jml_sampahspesifik }}</span>
                </div>
            </div>
{{-- END --}}
        </div>
    </div>
@endif
{{-- MODAL --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection

