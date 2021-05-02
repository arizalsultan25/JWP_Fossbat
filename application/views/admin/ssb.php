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
                <h4 class="card-title">Form Data Sekolah Sepak Bola</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('ssb/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_ssb">Nama SSB</label>
                        <input placeholder="Nama Sekolah Sepak Bola" type="text" name="nama" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea placeholder="Alamat..." name="alamat" id="" cols="30" rows="2" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal Berdiri</label>
                        <input name="tanggal" type="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" accept="image/*" id="" class="form-control-file" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-outline card-success">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Data Sekolah Sepak Bola</h4>
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
                            Nama SSB
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Tanggal berdiri
                        </th>
                        <th>
                            Logo
                        </th>
                        <th>
                            Aksi
                        </th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($ssb as $row) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><a href="<?= base_url('admin/pemain_ssb/' . $row->id) ?>"><?= $row->nama_ssb ?></a></td>
                                <td><?= $row->alamat ?></td>
                                <td><?= $row->tanggal_berdiri ?></td>
                                <td>
                                    <a href="<?= base_url('uploads/logo/' . $row->logo) ?>" target="blank">
                                        <img src="<?= base_url('uploads/logo/' . $row->logo) ?>" alt="logo <?= $row->nama_ssb ?>" width="40px">
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".modal-edit-<?= $row->id ?>"><i class="fas fa-edit"></i> Edit</button>
                                        <!-- <button type="button" class="btn btn-info"><i class="fas fa-eye"></i> Detail</button> -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal-delete-<?= $row->id ?>"><i class="fas fa-trash"></i> Delete</button>
                                    </div>
                                </td>

                                <!-- Modal Edit -->
                                <div class="modal fade modal-edit-<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data SSB <?= $row->nama_ssb ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('ssb/edit') ?>" method="post">
                                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <img src="<?= base_url('uploads/logo/' . $row->logo) ?>" alt="" class="foto" width="100%"> <br>
                                                            <label for="foto">Logo</label>
                                                            <input type="file" name="logo" accept="image/*" class="form-control-file form-control">
                                                        </div>

                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="nama_ssb">Nama SSB</label>
                                                                <input placeholder="Nama Sekolah Sepak Bola" type="text" name="nama" value="<?= $row->nama_ssb ?>" class="form-control" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="alamat">Alamat</label>
                                                                <textarea placeholder="Alamat..." name="alamat" id="" cols="30" rows="2" class="form-control" required><?= $row->alamat ?></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="tanggal">Tanggal Berdiri</label>
                                                                <input name="tanggal" type="date" value="<?= $row->tanggal_berdiri ?>" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Save changes</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Delete -->
                                <div class="modal fade modal-delete-<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data SSB <?= $row->nama_ssb ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('ssb/delete') ?>" method="post">
                                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                                    <h3>Apakah anda ingin menghapus data SSB <span class="badge badge-primary"><?= $row->nama_ssb ?></span> ?</h3>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Save changes</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>