@extends('layout.main')

@section('title', 'Pengawasan')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>EDIT DATA PENGAWASAN PEMILU</strong>
        </div>
        <div class="card-body card-block">
          <form action="{{ url('pengawasan/'.$data_pengawasan->id_pengawasan) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @method('patch')
            @csrf
            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>I. DATA PENGAWAS</strong></label></div>
            </div>
            <div class="row form-group">
              <div class="col col-md-3"><label for="nama_pengawas" class=" form-control-label">Nama/Tim Pengawas</label></div>
              <div class="col-12 col-md-9"><input type="text" id="nama_pengawas" name="nama_pengawas" class="form-control" value="{{ $data_pengawasan->nama_pengawas }}" required><small class="form-text text-muted">Masukkan nama/tim pengawas</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="jabatan_pengawas" class=" form-control-label">Jabatan</label></div>
              <div class="col-12 col-md-9">
                <select name="jabatan_pengawas" id="jabatan_pengawas" class="form-control" value="{{ $data_pengawasan->jabatan_pengawas }}" required>
                  <option value="{{ $data_pengawasan->jabatan_pengawas}}">{{ $data_pengawasan->jabatan_pengawas }}"</option>
                  <option value="ketua_kota">Ketua Bawaslu Kabupaten/Kota</option>
                  <option value="anggota_kota">Anggota Bawaslu Kabupaten/Kota</option>
                  <option value="sekretariat_kota">Sekretariat Bawaslu Kabupaten/Kota</option>
                  <option value="panwaslu_kec">Panitia Pengawasan Pemilihan Kecamatan</option>
                  <option value="sekretariat_kec">Sekretariat Bawaslu Kecamatan</option>
                  <option value="panwaslu_desa">Panitia Pengawasan Pemilihan Desa</option>
                  <option value="pengawas_tps">Pengawas TPS</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="poin_surat" class=" form-control-label">Poin Surat Tugas</label></div>
              <div class="col-12 col-md-9"><input type="text" id="poin_surat" name="poin_surat" class="form-control" value="{{ $data_pengawasan->poin_surat }}"><small class="form-text text-muted">Masukkan poin surat tugas</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="alamat_pengawas" class=" form-control-label">Alamat/Domisili</label></div>
              <div class="col-12 col-md-9"><input type="text" id="alamat_pengawas" name="alamat_pengawas" class="form-control" value="{{ $data_pengawasan->alamat_pengawas }}"><small class="form-text text-muted">Masukkan alamat kantor</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="kabupaten" class=" form-control-label">Kabupaten</label></div>
              <div class="col-12 col-md-9">
                <select name="kabupaten" id="kabupaten" class="form-control">
                  <option value="{{ $data_pengawasan->kabupaten}}">{{ $data_pengawasan->kabupaten }}</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="kecamatan" class=" form-control-label">Kecamatan</label></div>
              <div class="col-12 col-md-9">
                <select name="kecamatan" id="kecamatan" class="form-control">
                  <option value="{{ $data_pengawasan->kecamatan}}">{{ $data_pengawasan->kecamatan }}</option>
                  <option value="Moyudan">Moyudan</option>
                  <option value="Godean">Godean</option>
                  <option value="Minggir">Minggir</option>
                  <option value="Gamping">Gamping</option>
                  <option value="Seyegan">Seyegan</option>
                  <option value="Sleman">Sleman</option>
                  <option value="Ngaglik">Ngaglik</option>
                  <option value="Mlati">Mlati</option>
                  <option value="Tempel">Tempel</option>
                  <option value="Turi">Turi</option>
                  <option value="Prambanan">Prambanan</option>
                  <option value="Kalasan">Kalasan</option>
                  <option value="Berbah">Berbah</option>
                  <option value="Ngemplak">Ngemplak</option>
                  <option value="Pakem">Pakem</option>
                  <option value="Depok">Depok</option>
                  <option value="Cangkringan">Cangkringan</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>II. KEGIATAN PENGAWASAN</strong></label></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tahap_pengawasan" class=" form-control-label">Tahapan yang diawasi</label></div>
              <div class="col-12 col-md-9">
                <select name="tahap_pengawasan" id="tahap_pengawasan" class="form-control">
                  <option value="{{ $data_pengawasan->tahap_pengawasan}}">{{ $data_pengawasan->tahap_pengawasan }}"</option>
                  <option value="rekrutmen">Rekrutmen Penyelenggara Adhoc</option>
                  <option value="pemutakhiran">Pemutakhiran data dan Penyusunan Daftar Pemilih</option>
                  <option value="pendaftaran">Pendaftaran dan Verifikasi Peserta Pemilu</option>
                  <option value="penetapan_peserta">Penetapan Peserta Pemilu</option>
                  <option value="penetapan_dapil">Penetapan Dapil</option>
                  <option value="pencalonan">Pencalonan Anggota Pres-Wapres DPR, DPD, DPRD Prov/Kab/Kota</option>
                  <option value="kampanye">Kampanye</option>
                  <option value="logistik">Logistik</option>
                  <option value="pungut_hitung"> Pungut Hitung</option>
                  <option value="rekapitulasi">Rekapitulasi Perolehan Suara</option>
                  <option value="lainnya">Lainnya</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label class=" form-control-label">Bentuk Pengawasan</label></div>
              <div class="col col-md-9">
                <div class="form-check">
                  <div class="radio">
                    <label for="radio1" class="form-check-label">
                      <input type="radio" id="bentuk" name="bentuk" value="bentuk_langsung" class="form-check-input">Langsung
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radio2" class="form-check-label ">
                      <input type="radio" id="bentuk" name="bentuk" value="bentuk_tidak" class="form-check-input">Tidak Langsung
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="pihak" class=" form-control-label">Pihak yang diawasi</label></div>
              <div class="col-12 col-md-9">
                <select name="pihak" id="pihak" class="form-control">
                  <option value="{{ $data_pengawasan->pihak}}">{{ $data_pengawasan->pihak }}</option>
                  <option value="kpu">KPU</option>
                  <option value="kpu_provinsi">KPU Provinsi</option>
                  <option value="kpu_kota">KPU Kabupaten/Kota</option>
                  <option value="ppk">PPK</option>
                  <option value="pps">PPS</option>
                  <option value="ppdp">PPDP</option>
                  <option value="kpps">KPPS</option>
                  <option value="pasangan_calon">Pasangan Calon</option>
                  <option value="tim_sukses">Tim Sukses</option>
                  <option value="tim_kampanye">Tim Kampanye</option>
                  <option value="pelaksana_kampanye">Pelaksana Kampanye</option>
                  <option value="pengurus_partai">Pengurus Partai Politik</option>
                  <option value="lainnya">Lainnya</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3">
                <label for="tanggal_pengawasan" class=" form-control-label">Hari/Tanggal</label>
              </div>
              <div class="col-12 col-md-9">
                <input type="date" id="tanggal_pengawasan" name="tanggal_pengawasan" class="form-control" value="{{ $data_pengawasan->tanggal_pengawasan }}"><small class="form-text text-muted">Masukkan tanggal (hh-bb-tt)</small>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3">
                <label for="waktu_mulai" class=" form-control-label">Waktu/Jam Mulai</label>
              </div>
              <div class="col-12 col-md-9">
                <input type="time" id="waktu_mulai" name="waktu_mulai" class="form-control" value="{{ $data_pengawasan->waktu_mulai }}"><small class="form-text text-muted">Masukkan waktu mulai pengawasan</small>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="waktu_selesai" class=" form-control-label">Waktu/Jam Selesai</label></div>
              <div class="col-12 col-md-9"><input type="time" id="waktu_selesai" name="waktu_selesai" class="form-control" value="{{ $data_pengawasan->waktu_selesai }}"><small class="form-text text-muted">Masukkan waktu selesai pengawasan</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tempat_pengawasan" class=" form-control-label">Tempat/Lokasi Pengawasan</label></div>
              <div class="col-12 col-md-9"><input type="text" id="tempat_pengawasan" name="tempat_pengawasan" class="form-control" value="{{ $data_pengawasan->tempat_pengawasan }}"><small class="form-text text-muted">Masukkan tempat/lokasi pengawasan</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>III. URAIAN HASIL PENGAWASAN</strong></label></div>
              <div class="col-12 col-md-12"><textarea name="uraian_pengawasan" id="uraian_pengawasan" rows="9" placeholder="Uraian" class="form-control" value="{{ $data_pengawasan->uraian_pengawasan }}" > {{ $data_pengawasan->uraian_pengawasan }} </textarea></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="file_pengawasan" class=" form-control-label">Dokumentasi Pengawasan</label></div>
              <div class="col-12 col-md-9"><input type="file" id="file_pengawasan" name="file_pengawasan" class="form-control-file"></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label class=" form-control-label"><strong>IV. DUGAAN PELANGGARAN</strong></label></div>
              <div class="col col-md-9">
                <div class="form-check">
                  @if($data_pengawasan->dugaan_pelanggaran == "Ada")
                  <label for="dugaan_pelanggaran">
                    <input type="radio" name="dugaan_pelanggaran" value="Ada" id="dugaan_pelanggaran" selected>Ada
                    <input type="radio" name="dugaan_pelanggaran" value="Tidak Ada" id="dugaan_pelanggaran">Tidak Ada
                  </label>
                </div>
                @elseif($data_pengawasan->dugaan_pelanggaran == "Tidak Ada")
                <label for="dugaan_pelanggaran">
                  <input type="radio" name="dugaan_pelanggaran" value="Ada" id="dugaan_pelanggaran">Ada
                  <input type="radio" name="dugaan_pelanggaran" value="Tidak Ada" id="dugaan_pelanggaran" selected>Tidak Ada
                </label>
                @endif
              </div>
            </div>
          </div>
        </div>


            <!-- // BUTTON RADIO
            <div class="form-group">
              @if($data_pengawasan->dugaan_pelanggaran == "Ada")
              <label for="dugaan_pelanggaran">Dugaan Pelanggaran :</label> <br>
              <div class="form-check form-check-inline">
                <label for="dugaan_pelanggaran">
                  <input type="radio" name="pengawasandugaan_pelanggaran" value="Ada" id="dugaan_pelanggaran" selected>Ada
                  <input type="radio" name="dugaan_pelanggaran" value="Tidak Ada" id="dugaan_pelanggaran">Tidak Ada
                </label>
              </div>
              @elseif($data_pengawasan->dugaan_pelanggaran == "Tidak Ada")
              <label for="dugaan_pelanggaran">Dugaan Pelanggaran :</label> <br>
              <div class="form-check form-check-inline">
                <label for="dugaan_pelanggaran">
                  <input type="radio" name="dugaan_pelanggaran" value="Ada" id="dugaan_pelanggaran">Ada
                  <input type="radio" name="dugaan_pelanggaran" value="Tidak Ada" id="dugaan_pelanggaran" selected>Tidak Ada
                </label>
                @endif
              </div> -->
           

            <div class="row form-group">
              <div class="col col-md-3"><label for="kategori" class=" form-control-label">Kategori</label></div>
              <div class="col-12 col-md-9">
                <select name="kategori" id="kategori" class="form-control">
                  <option value="{{ $data_pengawasan->kategori}}">{{ $data_pengawasan->kategori }}</option>
                  <option value="adminitrasi">Adminitrasi</option>
                  <option value="kode_etik">Kode Etik</option>
                  <option value="pidana">Pidana</option>
                  <option value="sengketa">Sengketa</option>
                  <option value="uu_lain">UU lainnya</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>V. INFORMASI DUGAAN PELANGGARAN</strong></label></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="tempat_pelanggaran" class=" form-control-label">Tempat Kejadian</label></div>
              <div class="col-12 col-md-9"><input type="text" id="tempat_pelanggaran" name="tempat_pelanggaran" class="form-control" value="{{ $data_pengawasan->tempat_pelanggaran }}"><small class="form-text text-muted">Masukkan tempat kejadian pelanggaran</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="waktu_pelanggaran" class=" form-control-label">Waktu Kejadian</label></div>
              <div class="col-12 col-md-9"><input type="time" id="waktu_pelanggaran" name="waktu_pelanggaran" class="form-control" value="{{ $data_pengawasan->waktu_pelanggaran }}"><small class="form-text text-muted">Masukkan waktu kejadian pelanggaran</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="nama_pelanggaran" class=" form-control-label">Nama Pelaku</label></div>
              <div class="col-12 col-md-9"><input type="text" id="nama_pelanggaran" name="nama_pelanggaran" class="form-control" value="{{ $data_pengawasan->nama_pelanggaran }}"><small class="form-text text-muted">Masukkan nama pelaku</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="status_pelaku" class=" form-control-label">Status Pelaku</label></div>
              <div class="col-12 col-md-9"><input type="text" id="status_pelaku" name="status_pelaku" class="form-control" value="{{ $data_pengawasan->status_pelaku }}"><small class="form-text text-muted">Masukkan status pelaku</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>VI. URAIAN DUGAAN PELANGGARAN</strong></label></div>
              <div class="col-12 col-md-12"><textarea name="uraian_pelanggaran" id="uraian_pelanggaran" rows="9" placeholder="Uraian" class="form-control" value="{{ $data_pengawasan->uraian_pelanggaran }}" > {{ $data_pengawasan->uraian_pelanggaran }} </textarea></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>VII. SAKSI-SAKSI</strong></label></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="saksi1" class=" form-control-label">Saksi I</label></div>
              <div class="col-12 col-md-9"><input type="text" id="saksi1" name="saksi1" class="form-control" value="{{ $data_pengawasan->saksi1 }}"><small class="form-text text-muted">Masukkan nama saksi I</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="saksi2" class=" form-control-label">Saksi II</label></div>
              <div class="col-12 col-md-9"><input type="text" id="saksi2" name="saksi2" class="form-control" value="{{ $data_pengawasan->saksi2 }}"><small class="form-text text-muted">Masukkan nama saksi II</small></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-10"><label class=" form-control-label"><strong>VII. BUKTI PENDUKUNG</strong></label></div>
              <div class="col-12 col-md-12"><input type="file" id="bukti_pelanggaran" name="bukti_pelanggaran" multiple class="form-control-file"></div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
              </button>

            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

