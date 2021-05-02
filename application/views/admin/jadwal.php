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

    <div class="col-md-4">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h4 class="card-title">Form Data Jadwal Pertandingan</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('jadwal/add') ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="tanggal">Tanggal Pertandingan</label>
                        <input name="tanggal" type="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="waktu">Jam Pertandingan</label>
                        <input name="waktu" type="time" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="home">Home</label>
                        <select name="home" id="" class="form-control">
                            <?php foreach ($tim as $row) { ?>
                                <option value="<?= $row->nama_ssb ?>"><?= $row->nama_ssb ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="away">Away</label>
                        <select name="away" id="" class="form-control">
                            <?php foreach ($tim as $row) { ?>
                                <option value="<?= $row->nama_ssb ?>"><?= $row->nama_ssb ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi Pertandingan</label>
                        <select name="lokasi" id="" class="form-control">
                            <?php foreach ($lokasi as $row) { ?>
                                <option value="<?= $row->nama_stadion ?>"><?= $row->nama_stadion ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-outline card-success">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Data Jadwal Pertandingan</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-stripped">
                    <thead>
                        <th>
                            No
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Waktu
                        </th>
                        <th>
                            Home
                        </th>
                        <th>
                            Skor Home
                        </th>
                        <th>
                            Away
                        </th>
                        <th>
                            Skor Away
                        </th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($jadwal as $row) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->tanggal ?></td>
                                <td><?= $row->waktu ?></td>
                                <td><?= $row->home ?></td>
                                <td><?= $row->skor_home ?></td>
                                <td><?= $row->away ?></td>
                                <td><?= $row->skor_away ?></td>
                                <td>
                                    <?php if ($row->status == "belum main") { ?>
                                        <span class="badge badge-primary">Belum main</span>
                                    <?php } else if ($row->status == "sedang berlangsung") { ?>
                                        <span class="badge badge-warning">Sedang Berlangsung</span>
                                    <?php } else { ?>
                                        <span class="badge badge-success">Selesai</span>
                                    <?php } ?>
                                </td>
                                <td><?= $row->created_at ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".modalEdit<?= $row->id ?>"><i class="fas fa-edit"></i> Edit</button>
                                        <!-- <button type="button" class="btn btn-info"><i class="fas fa-eye"></i> Detail</button> -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modalDelete<?= $row->id ?>"><i class="fas fa-trash"></i> Delete</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade modalEdit<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="<?= base_url('jadwal/edit') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header bg-warning">
                                                <h3 class="modal-title">Edit data <?= $row->tanggal ?></h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="" class="form-control" required value="<?= $row->id ?>">

                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal Pertandingan</label>
                                                    <input name="tanggal" type="date" class="form-control" required value="<?= $row->tanggal ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="waktu">Jam Pertandingan</label>
                                                    <input name="waktu" type="time" class="form-control" required value="<?= $row->waktu ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="lokasi">Lokasi Pertandingan</label>
                                                    <select name="lokasi" id="" class="form-control">
                                                        <?php foreach ($lokasi as $data) { ?>
                                                            <option value="<?= $data->nama_stadion ?>" <?= ($row->lokasi == $data->nama_stadion) ? "selected" : null ?>><?= $data->nama_stadion ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="home">Home</label>
                                                    <select name="home" id="" class="form-control">
                                                        <?php foreach ($tim as $data) { ?>
                                                            <option value="<?= $data->nama_ssb ?>" <?= ($data->nama_ssb == $row->home) ? "selected" : null ?>><?= $data->nama_ssb ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="away">Away</label>
                                                    <select name="away" id="" class="form-control">
                                                        <?php foreach ($tim as $data) { ?>
                                                            <option value="<?= $data->nama_ssb ?>" <?= ($data->nama_ssb == $row->away) ? "selected" : null ?>><?= $data->nama_ssb ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="skor_home">Skor Home</label>
                                                            <input type="number" name="skor_home" id="" class="form-control" value="<?= $row->skor_home ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="skor_away">Skor Away</label>
                                                            <input type="number" name="skor_away" id="" class="form-control" value="<?= $row->skor_away ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="belum main" <?= ($row->status == "belum main") ? "selected" : null ?>>Belum main</option>
                                                        <option value="sedang berlangsung" <?= ($row->status == "sedang berlangsung") ? "selected" : null ?>>Sedang Berlangsung</option>
                                                        <option value="selesai" <?= ($row->status == "selesai") ? "selected" : null ?>>Selesai</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Delete -->
                            <div class="modal fade modalDelete<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="<?= base_url('jadwal/delete') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header bg-danger">
                                                <h3 class="modal-title">Hapus data <?= $row->tanggal ?></h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="" class="form-control" required value="<?= $row->id ?>">
                                                <h4>Apakah anda ingin menghapus data <span class="badge badge-danger"><?= $row->tanggal ?></span> ?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>