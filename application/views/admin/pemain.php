  <div class="row">
  <?php if (isset($this->session->success)) { ?>
        <div class="col-md-12">
            <div class="callout callout-success">
                <h5><i class="fas fa-check"></i> Success</h5>
                <p><?= $this->session->success ?></p>
            </div>
        </div>
    <?php } else if (isset($this->session->failed)) { ?>
        <div class="col-md-12">
            <div class="callout callout-danger">
                <h5><i class="fas fa-times"></i> Failed!</h5>
                <p><?= $this->session->failed ?></p>
            </div>
        </div>
    <?php } ?>

      <div class="col-12">
          <div class="card card-outline card-primary">
              <div class="card-header">
                  <h3 class="card-title">Form Tambah Data Pemain</h3>
              </div>
              <div class="card-body">
                  <form action="<?= base_url('pemain/add') ?>" method="post" enctype="multipart/form-data">
                      <h4>Data Diri</h4>
                      <div class="form-row mb-2">
                          <div class="col-7">
                              <label for="full_name">Nama Lengkap</label>
                              <input type="text" class="form-control" name="full_name" placeholder="Nama Lengkap ..." required>
                          </div>

                          <div class="col-5">
                              <label for="nickname">Nama Panggilan</label>
                              <input type="text" class="form-control" name="nickname" placeholder="Nama Panggilan" required>
                          </div>
                      </div>

                      <div class="form-row mb-2">
                          <div class="col-6">
                              <label for="tempat">Tempat Lahir</label>
                              <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir" required>
                          </div>

                          <div class="col-6">
                              <label for="tgl">Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tgl" placeholder="Tanggal Lahir" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea name="alamat" cols="30" rows="3" placeholder="Alamat..." class="form-control" required></textarea>
                      </div>

                      <div class="form-row">
                          <div class="col-3">
                              <label for="ssb">SSB saat ini</label>
                              <select name="ssb" class="form-control">
                                  <option value="" selected hidden>SSB Saat ini</option>
                                  <option value="">Tidak ada</option>
                                  <?php foreach ($ssb as $row) { ?>
                                      <option value="<?= $row->nama_ssb ?>"><?= $row->nama_ssb ?></option>
                                  <?php } ?>
                              </select>
                          </div>

                          <div class="col-3">
                              <label for="foto">Profile</label>
                              <input type="file" name="foto" accept="image/*" class="form-control-file form-control">
                          </div>

                          <div class="col-3">
                              <label for="nama_ayah">Nama Ayah</label>
                              <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" required>
                          </div>

                          <div class="col-3">
                              <label for="nama_ibu">Nama Ibu</label>
                              <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" required>
                          </div>
                      </div>

                      <div class="form-row mt-2">
                          <div class="col-4">
                              <label for="">Gol. Darah</label>
                              <select name="darah" class="form-control">
                                  <option value="A" selected>A</option>
                                  <option value="B">B</option>
                                  <option value="AB">AB</option>
                                  <option value="O">O</option>
                              </select>
                          </div>

                          <div class="col-4">
                              <label for="">Berat badan (Kg)</label>
                              <input type="number" name="berat" placeholder="n (Kg)" required class="form-control">
                          </div>

                          <div class="col-4">
                              <label for="">Tinggi badan (Cm)</label>
                              <input type="number" name="tinggi" placeholder="n (cm)" required class="form-control">
                          </div>
                      </div>

                      <div class="form-row mt-2">
                          <div class="col-12">
                              <label for="administrasi">Administrasi Pemain</label>
                          </div>
                          <div class="col-3">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Akte Kelahiran" name="administrasi[]">
                                  <label class="form-check-label" for="defaultCheck1">
                                      Akte Kelahiran
                                  </label>
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="NISN" name="administrasi[]">
                                  <label class="form-check-label" for="defaultCheck1">
                                      NISN
                                  </label>
                              </div>
                          </div>
                          <div class="col-3">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="KK" name="administrasi[]">
                                  <label class="form-check-label" for="defaultCheck1">
                                      Kartu Keluarga
                                  </label>
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Raport" name="administrasi[]">
                                  <label class="form-check-label" for="defaultCheck1">
                                      Raport
                                  </label>
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Passport" name="administrasi[]">
                                  <label class="form-check-label" for="defaultCheck1">
                                      Passport
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="">Jenis Kelamin</label>
                          <select name="jenis_kelamin" class="form-control">
                              <option value="Laki laki" selected>Laki laki</option>
                              <option value="Perempuan">Perempuan</option>
                          </select>
                      </div>

                      <h4 class="mt-4">Riwayat Pendidikan Formal</h4>
                      <div class="form-row mb-2">
                          <div class="col-6">
                              <label for="sd">Sekolah Dasar</label>
                              <input type="text" class="form-control" name="sd" placeholder="SD">
                          </div>

                          <div class="col-6">
                              <label for="smp">Sekolah Menengah Pertama</label>
                              <input type="text" class="form-control" name="smp" placeholder="SMP">
                          </div>
                      </div>

                      <h4 class="mt-4">Riwayat Pendidikan Sekolah Sepak Bola / Akademi Bola</h4>
                      <div class="form-row mt-2 form-riwayat">
                          <div class="col-3">
                              <label for="nama_ssb">Nama SSB</label>
                              <input type="text" name="riwayat_ssb[]" class="form-control" placeholder="Nama SSB">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Kabupaten</label>
                              <input type="text" name="riwayat_kabupaten[]" placeholder="Kabupaten" class="form-control">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Provinsi</label>
                              <input type="text" name="riwayat_prov[]" placeholder="Provinsi" class="form-control">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Tahun</label>
                              <input type="number" min="1900" placeholder="2010" max="3000" name="riwayat_tahun[]" class="form-control">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Posisi</label>
                              <select name="riwayat_posisi[]" class="form-control">
                                  <option value="GK">Goal Keeper</option>
                                  <option value="Back">Back</option>
                                  <option value="MF">Midfielder</option>
                                  <option value="Striker">Striker</option>
                              </select>
                          </div>
                          <div class="col-1">
                              <label for="">Aksi</label> <br>
                              <button class="btn btn-success" type="button" id="add-riwayat"><i class="fas fa-plus-circle"></i></button>
                          </div>
                      </div>

                      <h4 class="mt-4">Prestasi Sepak Bola</h4>
                      <div class="form-row mt-2 form-prestasi">
                          <div class="col-3">
                              <label for="nama_ssb">Nama SSB</label>
                              <input type="text" name="prestasi_ssb[]" class="form-control" placeholder="Nama SSB">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Kompetisi</label>
                              <input type="text" name="prestasi_kompetisi[]" placeholder="Kompetisi" class="form-control">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Prestasi</label>
                              <input type="text" name="prestasi[]" placeholder="Provinsi" class="form-control">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Tahun</label>
                              <input type="number" min="1900" placeholder="2010" max="3000" name="prestasi_tahun[]" class="form-control">
                          </div>
                          <div class="col-2">
                              <label for="nama_ssb">Posisi</label>
                              <select name="prestasi_posisi[]" class="form-control">
                                  <option value="GK">Goal Keeper</option>
                                  <option value="Back">Back</option>
                                  <option value="MF">Midfielder</option>
                                  <option value="Striker">Striker</option>
                              </select>
                          </div>
                          <div class="col-1">
                              <label for="">Aksi</label> <br>
                              <button class="btn btn-success" type="button" id="add-prestasi"><i class="fas fa-plus-circle"></i></button>
                          </div>
                      </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save Data</button>
              </div>
          </div>
          </form>
      </div>
  </div>

  <div class="card">
      <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <th>#</th>
                  <th>Nama Lengkap</th>
                  <th>SSB</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Tinggi Badan</th>
                  <th>Foto</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                  <?php
                    $no = 1;
                    foreach ($pemain as $row) { ?>

                      <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row->nama_lengkap ?></td>
                          <td><?= $row->ssb ?></td>
                          <td><?= $row->tgl_lahir ?></td>
                          <td><?= $row->alamat ?></td>
                          <td><?= $row->tinggi ?></td>
                          <td>
                              <a href="<?= base_url('uploads/profile/' . $row->foto) ?>" target="blank">
                                  <img src="<?= base_url('uploads/profile/' . $row->foto) ?>" alt="foto <?= $row->nama_lengkap ?>" width="40px">
                              </a>
                          </td>
                          <td><?= $row->created_at ?></td>
                          <td><?= $row->updated_at ?></td>
                          <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="<?= base_url('pemain/kartu_pemain/' . $row->id_pemain) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-id-card"></i> Kartu Pemain</a>
                                  <a href="<?= base_url('pemain/formulir/' . $row->id_pemain) ?>" target="_blank" class="btn btn-secondary"><i class="fas fa-scroll"></i></i> Formulir</a>
                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".modal-detail-<?= $row->id_pemain ?>"><i class="fas fa-eye"></i> Detail</button>
                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".modal-edit-<?= $row->id_pemain ?>"><i class="fas fa-edit"></i> Edit</button>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal-delete-<?= $row->id_pemain ?>"><i class="fas fa-trash"></i> Delete</button>
                              </div>
                          </td>
                      </tr>

                      <!-- Modal Detail -->
                      <div class="modal fade modal-detail-<?= $row->id_pemain ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header bg-info">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Detail Pemain <?= $row->nama_lengkap ?></h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="row">
                                          <div class="col-md-5">
                                              <img src="<?= base_url('uploads/profile/' . $row->foto) ?>" alt="" class="foto" width="100%">
                                          </div>
                                          <div class="col-md-7">
                                              <div class="form-row mb-2">
                                                  <div class="col-7">
                                                      <label for="full_name">Nama Lengkap</label>
                                                      <input type="text" class="form-control" name="full_name" placeholder="Nama Lengkap ..." readonly value="<?= $row->nama_lengkap ?>">
                                                  </div>

                                                  <div class="col-5">
                                                      <label for="nickname">Nama Panggilan</label>
                                                      <input type="text" class="form-control" name="nickname" placeholder="Nama Panggilan" readonly value="<?= $row->nama_panggilan ?>">
                                                  </div>
                                              </div>

                                              <div class="form-row mb-2">
                                                  <div class="col-6">
                                                      <label for="tempat">Tempat Lahir</label>
                                                      <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir" readonly value="<?= $row->tempat_lahir ?>">
                                                  </div>

                                                  <div class="col-6">
                                                      <label for="tgl">Tanggal Lahir</label>
                                                      <input type="text" class="form-control" name="tgl" placeholder="Tanggal Lahir" readonly value="<?= $row->tgl_lahir ?>">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label for="alamat">Alamat</label>
                                                  <textarea name="alamat" cols="30" rows="3" placeholder="Alamat..." class="form-control" readonly><?= $row->alamat ?></textarea>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row mt-2">
                                          <div class="col-3">
                                              <label for="ssb">SSB saat ini</label>
                                              <input type="text" readonly class="form-control" value="<?= $row->ssb ?>">
                                          </div>

                                          <div class="col-3">
                                              <label for="foto">Jenis Kelamin</label>
                                              <input type="text" readonly class="form-control" value="<?= $row->jenis_kelamin ?>">
                                          </div>

                                          <div class="col-3">
                                              <label for="nama_ayah">Nama Ayah</label>
                                              <input type="text" class="form-control" readonly value="<?= $row->nama_ayah ?>">
                                          </div>

                                          <div class="col-3">
                                              <label for="nama_ibu">Nama Ibu</label>
                                              <input type="text" class="form-control" readonly value="<?= $row->nama_ibu ?>">
                                          </div>
                                      </div>
                                      <div class="row mt-2">
                                          <div class="col-4">
                                              <label for="">Gol. Darah</label>
                                              <input type="text" readonly value="<?= $row->gol_darah ?>" class="form-control">
                                          </div>

                                          <div class="col-4">
                                              <label for="">Berat badan (Kg)</label>
                                              <input type="text" readonly value="<?= $row->berat ?>" class="form-control">
                                          </div>

                                          <div class="col-4">
                                              <label for="">Tinggi badan (Cm)</label>
                                              <input type="text" readonly value="<?= $row->tinggi ?>" class="form-control">
                                          </div>
                                      </div>

                                      <h4 class="mt-4">Riwayat Pendidikan Formal</h4>
                                      <div class="form-row mb-2">
                                          <div class="col-6">
                                              <label for="sd">Sekolah Dasar</label>
                                              <input type="text" class="form-control" readonly value="<?= $row->riwayat_sd ?>">
                                          </div>

                                          <div class="col-6">
                                              <label for="smp">Sekolah Menengah Pertama</label>
                                              <input type="text" class="form-control" readonly value="<?= $row->riwayat_smp ?>">
                                          </div>
                                      </div>

                                      <h4 class="mt-4">Riwayat Pendidikan Sepak Bola</h4>
                                      <div class="form-row">
                                          <div class="col-3">
                                              <label for="nama_ssb">Nama SSB</label>
                                          </div>
                                          <div class="col-2">
                                              <label for="nama_ssb">Kabupaten</label>
                                          </div>
                                          <div class="col-2">
                                              <label for="nama_ssb">Provinsi</label>
                                          </div>
                                          <div class="col-2">
                                              <label for="nama_ssb">Tahun</label>
                                          </div>
                                          <div class="col-3">
                                              <label for="nama_ssb">Posisi</label>
                                          </div>
                                      </div>
                                      <?php
                                        $data = explode(', ', $row->riwayat_ssb);
                                        $kab = explode(', ', $row->riwayat_kabupaten);
                                        $prov = explode(', ', $row->riwayat_provinsi);
                                        $tahun = explode(', ', $row->riwayat_tahun);
                                        $posisi = explode(', ', $row->riwayat_posisi);

                                        $jml = count($data);

                                        for ($n = 0; $n < $jml; $n++) {
                                        ?>
                                          <div class="form-row mt-2">
                                              <div class="col-3">
                                                  <input type="text" readonly value="<?= $data[$n] ?>" class="form-control" placeholder="Nama SSB">
                                              </div>
                                              <div class="col-2">
                                                  <input type="text" readonly value="<?= $kab[$n] ?>" class="form-control">
                                              </div>
                                              <div class="col-2">
                                                  <input type="text" readonly value="<?= $prov[$n] ?>" class="form-control">
                                              </div>
                                              <div class="col-2">
                                                  <input type="text" readonly value="<?= $tahun[$n] ?>" class="form-control">
                                              </div>
                                              <div class="col-3">
                                                  <input type="text" readonly value="<?= $posisi[$n] ?>" class="form-control">

                                              </div>
                                          </div>
                                      <?php } ?>

                                      <h4 class="mt-4">Riwayat Prestasi Sepak Bola</h4>
                                      <div class="form-row">
                                          <div class="col-3">
                                              <label for="nama_ssb">Nama SSB</label>
                                          </div>
                                          <div class="col-2">
                                              <label for="nama_ssb">Kompetisi</label>
                                          </div>
                                          <div class="col-2">
                                              <label for="nama_ssb">Prestasi</label>
                                          </div>
                                          <div class="col-2">
                                              <label for="nama_ssb">Tahun</label>
                                          </div>
                                          <div class="col-3">
                                              <label for="nama_ssb">Posisi</label>
                                          </div>
                                      </div>
                                      <?php
                                        $data = explode(', ', $row->prestasi_ssb);
                                        $kab = explode(', ', $row->prestasi_kompetisi);
                                        $prov = explode(', ', $row->prestasi);
                                        $tahun = explode(', ', $row->prestasi_tahun);
                                        $posisi = explode(', ', $row->prestasi_posisi);

                                        $jml = count($data);

                                        for ($n = 0; $n < $jml; $n++) {
                                        ?>
                                          <div class="form-row mt-2">
                                              <div class="col-3">
                                                  <input type="text" readonly value="<?= $data[$n] ?>" class="form-control" placeholder="Nama SSB">
                                              </div>
                                              <div class="col-2">
                                                  <input type="text" readonly value="<?= $kab[$n] ?>" class="form-control">
                                              </div>
                                              <div class="col-2">
                                                  <input type="text" readonly value="<?= $prov[$n] ?>" class="form-control">
                                              </div>
                                              <div class="col-2">
                                                  <input type="text" readonly value="<?= $tahun[$n] ?>" class="form-control">
                                              </div>
                                              <div class="col-3">
                                                  <input type="text" readonly value="<?= $posisi[$n] ?>" class="form-control">

                                              </div>
                                          </div>
                                      <?php } ?>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Modal Edit -->
                      <div class="modal fade modal-edit-<?= $row->id_pemain ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header bg-warning">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Pemain <?= $row->nama_lengkap ?></h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="<?= base_url('pemain/edit') ?>" method="post">
                                          <div class="row">
                                              <div class="col-md-5">
                                                  <img src="<?= base_url('uploads/profile/' . $row->foto) ?>" alt="" class="foto" width="100%"> <br>
                                                  <label for="foto">Profile</label>
                                                  <input type="file" name="foto" accept="image/*" class="form-control-file form-control">

                                              </div>
                                              <div class="col-md-7">
                                                  <div class="form-row mb-2">
                                                      <div class="col-7">
                                                          <label for="full_name">Nama Lengkap</label>
                                                          <input type="text" class="form-control" name="full_name" placeholder="Nama Lengkap ..." name="full_name" required value="<?= $row->nama_lengkap ?>">
                                                      </div>

                                                      <div class="col-5">
                                                          <label for="nickname">Nama Panggilan</label>
                                                          <input type="text" class="form-control" name="nickname" placeholder="Nama Panggilan" value="<?= $row->nama_panggilan ?>">
                                                      </div>
                                                  </div>

                                                  <div class="form-row mb-2">
                                                      <div class="col-6">
                                                          <label for="tempat">Tempat Lahir</label>
                                                          <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir" required value="<?= $row->tempat_lahir ?>">
                                                      </div>

                                                      <div class="col-6">
                                                          <label for="tgl">Tanggal Lahir</label>
                                                          <input type="text" class="form-control" name="tgl" placeholder="Tanggal Lahir" required value="<?= $row->tgl_lahir ?>">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="alamat">Alamat</label>
                                                      <textarea name="alamat" cols="30" rows="3" placeholder="Alamat..." class="form-control"><?= $row->alamat ?></textarea>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row mt-2">
                                              <div class="col-3">
                                                  <label for="ssb">SSB saat ini</label>
                                                  <select name="ssb" class="form-control">
                                                      <!-- <option value="" selected hidden>SSB Saat ini</option> -->
                                                      <option value="">Tidak ada</option>
                                                      <?php foreach ($ssb as $data) { ?>
                                                          <option value="<?= $data->nama_ssb ?>" <?= ($data->nama_ssb == $row->ssb) ? "selected" : "" ?>><?= $data->nama_ssb ?></option>
                                                      <?php } ?>
                                                  </select>
                                              </div>

                                              <div class="col-3">
                                                  <label for="foto">Jenis Kelamin</label>
                                                  <!-- <input type="text" readonly class="form-control" value="<?= $row->jenis_kelamin ?>"> -->
                                                  <select name="jenis_kelamin" class="form-control">
                                                      <option value="Laki laki" <?= ($row->ssb == "Laki laki") ? "selected" : "" ?>>Laki laki</option>
                                                      <option value="Perempuan" <?= ($row->ssb == "Perempuan") ? "selected" : "" ?>>Perempuan</option>
                                                  </select>
                                              </div>

                                              <div class="col-3">
                                                  <label for="nama_ayah">Nama Ayah</label>
                                                  <input type="text" name="nama_ayah" class="form-control" value="<?= $row->nama_ayah ?>">
                                              </div>

                                              <div class="col-3">
                                                  <label for="nama_ibu">Nama Ibu</label>
                                                  <input type="text" name="nama_ibu" class="form-control" value="<?= $row->nama_ibu ?>">
                                              </div>
                                          </div>
                                          <div class="row mt-2">
                                              <div class="col-4">
                                                  <label for="">Gol. Darah</label>
                                                  <select name="darah" class="form-control">
                                                      <option value="AB" <?= ($row->gol_darah == "AB") ? "selected" : "" ?>>AB</option>
                                                      <option value="A" <?= ($row->gol_darah == "A") ? "selected" : "" ?>>A</option>
                                                      <option value="B" <?= ($row->gol_darah == "B") ? "selected" : "" ?>>B</option>
                                                      <option value="O" <?= ($row->gol_darah == "O") ? "selected" : "" ?>>O</option>
                                                  </select>
                                              </div>

                                              <div class="col-4">
                                                  <label for="">Berat badan (Kg)</label>
                                                  <input type="hidden" name="id" value="<?= $row->id_pemain ?>" class="form-control">
                                                  <input type="text" name="berat" value="<?= $row->berat ?>" class="form-control">
                                              </div>

                                              <div class="col-4">
                                                  <label for="">Tinggi badan (Cm)</label>
                                                  <input type="text" name="tinggi" value="<?= $row->tinggi ?>" class="form-control">
                                              </div>
                                          </div>

                                          <h4 class="mt-4">Riwayat Pendidikan Formal</h4>
                                          <div class="form-row mb-2">
                                              <div class="col-6">
                                                  <label for="sd">Sekolah Dasar</label>
                                                  <input type="text" class="form-control" name="sd" value="<?= $row->riwayat_sd ?>">
                                              </div>

                                              <div class="col-6">
                                                  <label for="smp">Sekolah Menengah Pertama</label>
                                                  <input type="text" class="form-control" name="smp" value="<?= $row->riwayat_smp ?>">
                                              </div>
                                          </div>

                                          <h4 class="mt-4">Riwayat Pendidikan Sepak Bola</h4>
                                          <div class="form-row">
                                              <div class="col-3">
                                                  <label for="nama_ssb">Nama SSB</label>
                                              </div>
                                              <div class="col-2">
                                                  <label for="nama_ssb">Kabupaten</label>
                                              </div>
                                              <div class="col-2">
                                                  <label for="nama_ssb">Provinsi</label>
                                              </div>
                                              <div class="col-2">
                                                  <label for="nama_ssb">Tahun</label>
                                              </div>
                                              <div class="col-3">
                                                  <label for="nama_ssb">Posisi</label>
                                              </div>
                                          </div>
                                          <?php
                                            $data = explode(', ', $row->riwayat_ssb);
                                            $kab = explode(', ', $row->riwayat_kabupaten);
                                            $prov = explode(', ', $row->riwayat_provinsi);
                                            $tahun = explode(', ', $row->riwayat_tahun);
                                            $posisi = explode(', ', $row->riwayat_posisi);

                                            $jml = count($data);

                                            for ($n = 0; $n < $jml; $n++) {
                                            ?>
                                              <div class="form-row mt-2">
                                                  <div class="col-3">
                                                      <input type="text" name="riwayat_ssb[]" value="<?= $data[$n] ?>" class="form-control" placeholder="Nama SSB">
                                                  </div>
                                                  <div class="col-2">
                                                      <input type="text" name="riwayat_kabupaten[]" value="<?= $kab[$n] ?>" class="form-control">
                                                  </div>
                                                  <div class="col-2">
                                                      <input type="text" name="riwayat_prov[]" value="<?= $prov[$n] ?>" class="form-control">
                                                  </div>
                                                  <div class="col-2">
                                                      <input type="text" name="riwayat_tahun[]" value="<?= $tahun[$n] ?>" class="form-control">
                                                  </div>
                                                  <div class="col-3">
                                                      <input type="text" name="riwayat_posisi[]" value="<?= $posisi[$n] ?>" class="form-control">

                                                  </div>
                                              </div>
                                          <?php } ?>

                                          <h4 class="mt-4">Riwayat Prestasi Sepak Bola</h4>
                                          <div class="form-row">
                                              <div class="col-3">
                                                  <label for="nama_ssb">Nama SSB</label>
                                              </div>
                                              <div class="col-2">
                                                  <label for="nama_ssb">Kompetisi</label>
                                              </div>
                                              <div class="col-2">
                                                  <label for="nama_ssb">Prestasi</label>
                                              </div>
                                              <div class="col-2">
                                                  <label for="nama_ssb">Tahun</label>
                                              </div>
                                              <div class="col-3">
                                                  <label for="nama_ssb">Posisi</label>
                                              </div>
                                          </div>
                                          <?php
                                            $data = explode(', ', $row->prestasi_ssb);
                                            $kab = explode(', ', $row->prestasi_kompetisi);
                                            $prov = explode(', ', $row->prestasi);
                                            $tahun = explode(', ', $row->prestasi_tahun);
                                            $posisi = explode(', ', $row->prestasi_posisi);

                                            $jml = count($data);

                                            for ($n = 0; $n < $jml; $n++) {
                                            ?>
                                              <div class="form-row mt-2">
                                                  <div class="col-3">
                                                      <input type="text" name="prestasi_ssb[]" value="<?= $data[$n] ?>" class="form-control" placeholder="Nama SSB">
                                                  </div>
                                                  <div class="col-2">
                                                      <input type="text" name="prestasi_kompetisi[]" value="<?= $kab[$n] ?>" class="form-control">
                                                  </div>
                                                  <div class="col-2">
                                                      <input type="text" name="prestasi[]" value="<?= $prov[$n] ?>" class="form-control">
                                                  </div>
                                                  <div class="col-2">
                                                      <input type="text" name="prestasi_tahun[]" value="<?= $tahun[$n] ?>" class="form-control">
                                                  </div>
                                                  <div class="col-3">
                                                      <input type="text" name="prestasi_posisi[]" value="<?= $posisi[$n] ?>" class="form-control">

                                                  </div>
                                              </div>
                                          <?php } ?>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                      </form>

                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Modal Delete -->
                      <div class="modal fade modal-delete-<?= $row->id_pemain ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header bg-danger">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Pemain <?= $row->nama_lengkap ?></h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="<?= base_url('pemain/delete') ?>" method="post">
                                      <input type="hidden" name="id" value="<?= $row->id_pemain ?>">
                                    <h3>Apakah anda ingin menghapus data pemain <span class="badge badge-primary"><?= $row->nama_lengkap ?></span> ?</h3>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-danger">Save changes</button>
                                      </form>

                                  </div>
                              </div>
                          </div>
                      </div>

                  <?php } ?>
              </tbody>
          </table>
      </div>
      <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!-- /.col -->
  </div>