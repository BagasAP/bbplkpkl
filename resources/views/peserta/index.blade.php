@extends('layouts.master')
@section('contents')

<div class="container-fluid">
<div class="row-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2 class="panel-title">Pendaftaran Peserta Program</h2>
        </div>
          <div class="panel-body">
            <form action="{{route('peserta.store')}}" method="post">
              {{ csrf_field() }}
              
              <div class="form-group">
                <label class="control-label col-md-4">Nama Kejuruan</label>
                <div class="col-md-6">  
                    <select name="kd_program" class="form-control col-md-4">
                      @foreach($program as $data)
                      <option value="{{$data->kd_kejuruan}}">{{$data->nama_kejuruan}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label">Nama Sub Kejuruan</label>
                  
                    <select name="kd_program" class="form-control">
                      @foreach($program as $data)
                      <option value="{{$data->kd_sub_kejuruan}}">{{$data->nama_sub_kejuruan}}</option>
                      @endforeach
                    </select>
                  
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Program</label>
                  <div class="col-sm-4">
                    <select name="kd_program" class="form-control">
                      @foreach($program as $data)
                      <option value="{{$data->kd_program}}">{{$data->nama_program}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-4">
                    <input name="nama" type="text" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-4">
                    <input name="tempat_lahir" type="text" class="form-control" required  />
                    <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-4">
                    <input name="tgl_lahir" type="date" class="form-control" required  />
                  </div>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <select name="jenis_kelamin" class="form-control">
                      <option value="jenis_kelamin">Laki-Laki</option>
                      <option value="jenis_kelamin">Perempuan</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tinggi Badan</label>
                  <div class="col-sm-4">
                    <input name="tinggi_badan" type="number" class="form-control" required  />Cm
                    <label class="col-sm-2 col-sm-2 control-label">Berat Badan</label>
                  <div class="col-sm-4">
                    <input name="berat_badan" type="number" class="form-control" required  />Kg
                  </div>
                  </div>
              </div>

              <div class="form-group">
                <label class="control-lable">Alamat</label>
                <textarea  name="alamat"  class="form-control"></textarea>
                <label class="col-sm-2 col-sm-2 control-label">RT</label>
                  <div class="col-sm-4">
                    <input name="rt" type="number" class="form-control" required  />
                    <label class="col-sm-2 col-sm-2 control-label">RW</label>
                  <div class="col-sm-4">
                    <input name="rw" type="number" class="form-control" required  />
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Provinvi</label>
                  <div class="col-sm-4">
                    <select name="provinsi" class="form-control">

                    </select>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kab/Kota</label>
                  <div class="col-sm-4">
                    <select name="kab" class="form-control">

                    </select>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kecamatan</label>
                  <div class="col-sm-4">
                    <select name="kecamatan" class="form-control">

                    </select>
                  </div>
              </div>
                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kelurahan</label>
                  <div class="col-sm-4">
                    <select name="kelurahan" class="form-control">

                    </select>
                  </div>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Telp/Hp</label>
                  <div class="col-sm-4">
                    <input name="telp" type="number" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Agama</label>
                  <div class="col-sm-4">
                    <select name="Agama" class="form-control">
                      <option value="agama">Islam</option>
                      <option value="agama">Kristen</option>
                      <option value="agama">Hindu</option>
                      <option value="agama">Budha</option>
                      <option value="agama">Kong Hu Cu</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pendidikan Terakhir</label>
                  <div class="col-sm-4">
                    <select name="pendidikan_terakhir" class="form-control">
                      <option value="pendidikan_terakhir">SD</option>
                      <option value="pendidikan_terakhir">SMP</option>
                      <option value="pendidikan_terakhir">SMA/SMK</option>
                      <option value="pendidikan_terakhir">D1</option>
                      <option value="pendidikan_terakhir">D2</option>
                      <option value="pendidikan_terakhir">D3</option>
                      <option value="pendidikan_terakhir">D4</option>
                      <option value="pendidikan_terakhir">S1</option>
                      <option value="pendidikan_terakhir">S2</option>
                      <option value="pendidikan_terakhir">S3</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                <label class="control-lable">Pelatihan Yang Pernah Diikuti</label>
                <textarea  name="pelatihan"  class="form-control"></textarea>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kewarganegaraan<br>(Bagi WNI Keturunan)</label>
                  <div class="col-sm-4">
                    <input name="kewarganegaraan" type="text" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Ke</label>
                  <div class="col-sm-4">
                    <input name="anak_ke" type="number" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status</label>
                  <div class="col-sm-4">
                    <input name="status" type="radio" value="menikah" class="form-control" required  />   Menikah
                    <input name="status" type="radio" value="belum_menikah" class="form-control" required  /> Belum Menikah
                  </div>
              </div>
              <br>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Istri/Suami</label>
                  <div class="col-sm-4">
                    <input name="nama_pasangan" type="text" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Anak</label>
                  <div class="col-sm-4">
                    <input name="nama_anak" type="text" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                <label class="control-lable">Pengalaman Kerja</label>
                <textarea  name="pengalaman_kerja"  class="form-control"></textarea>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Orangtua/Wali</label>
                  <div class="col-sm-4">
                    <input name="nama_ortuwali" type="text" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat Orangtua/Wali</label>
                  <div class="col-sm-4">
                    <input name="almat_ortuwali" type="text" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Telp Orangtua/Wali</label>
                  <div class="col-sm-4">
                    <input name="telp_ortuwali" type="number" class="form-control" required  />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pas Foto</label>
                  <div class="col-sm-4">
                    <input name="foto" type="file" class="form-control" required  />
                  </div>
              </div>
              <div class="form-group" style="margin-bottom: 20px;">
                <label class="col-sm-2 col-sm-2 control-label"></label>
                  <div class="form-group">
                    <div class="col-md-4">
                      <button type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
                      <td><a class="btn btn-danger" href="{{URL::previous()}}">Batal</a></td>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
