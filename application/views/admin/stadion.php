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
                <h4 class="card-title">Form Data Stadion Sepak Bola</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('stadion/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_ssb">Nama Stadion</label>
                        <input placeholder="Nama Stadion Sepak Bola" type="text" name="nama" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Lokasi</label>
                        <textarea placeholder="Lokasi..." name="alamat" id="" cols="30" rows="2" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gmap">Link Google Map</label>
                        <textarea placeholder="Link Google Map..." name="gmap" id="" cols="30" rows="4" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal Berdiri</label>
                        <input name="tanggal" type="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="logo">Foto</label>
                        <input type="file" name="foto" accept="image/*" id="" class="form-control-file" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-outline card-success">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Data Stadion Sepak Bola</h4>
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
                        <th width="40%">
                            Nama Stadion
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Tanggal berdiri
                        </th>
                        <th>
                            Foto
                        </th>
                        <th>
                            Aksi
                        </th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($stadion as $row) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama_stadion ?></td>
                                <td><?= $row->alamat ?></td>
                                <td><?= $row->tanggal_berdiri ?></td>
                                <td>
                                    <a href="<?= base_url('uploads/stadion/' . $row->foto) ?>" target="blank">
                                        <img src="<?= base_url('uploads/stadion/' . $row->foto) ?>" alt="logo <?= $row->nama_stadion ?>" width="60px">
                                    </a>
                                </td>
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
                                        <form action="<?= base_url('stadion/edit') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header bg-warning">
                                                <h3 class="modal-title">Edit data <?= $row->nama_stadion ?></h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="" class="form-control" required value="<?= $row->id ?>">

                                                <div class="form-group">
                                                    <label for="nama_ssb">Nama Stadion</label>
                                                    <input placeholder="Nama Stadion Sepak Bola" type="text" name="nama" id="" class="form-control" required value="<?= $row->nama_stadion ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamat">Lokasi</label>
                                                    <textarea placeholder="Lokasi..." name="alamat" id="" cols="30" rows="2" class="form-control" required><?= $row->alamat ?></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="gmap">Link Google Map</label>
                                                    <textarea placeholder="Link Google Map..." name="gmap" id="" cols="30" rows="4" class="form-control"><?= $row->link_map ?></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal Berdiri</label>
                                                    <input name="tanggal" type="date" class="form-control" required value="<?= $row->tanggal_berdiri ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="logo">Foto</label>
                                                    <input type="file" name="foto" accept="image/*" id="" class="form-control-file">
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
                                        <form action="<?= base_url('stadion/delete') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header bg-danger">
                                                <h3 class="modal-title">Hapus data <?= $row->nama_stadion ?></h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="" class="form-control" required value="<?= $row->id ?>">

                                                <h4>Apakah anda ingin menghapus data <span class="badge badge-danger"><?= $row->nama_stadion ?></span> ?</h4>
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