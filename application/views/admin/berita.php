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

    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h4 class="card-title">Form Data Berita Pertandingan</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('berita/add') ?>" method="post">

                    <div class="form-group">
                        <label for="judul">Judul Berita</label>
                        <input name="judul" type="text" class="form-control" required placeholder="Judul Berita">
                    </div>

                    <div class="form-group">
                        <label for="berita">Berita</label>
                        <textarea name="berita" class="editor" cols="30" rows="10" placeholder="Content..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Data Berita Pertandingan</h4>
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
                            Judul
                        </th>
                        <th>
                            Slug
                        </th>
                        <!-- <th>
                            Berita
                        </th> -->
                        <th>
                            Created at
                        </th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($berita as $row) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->judul ?></td>
                                <td><?= $row->slug ?></td>
                                <!-- <td><?= $row->berita ?></td> -->
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
                                        <form action="<?= base_url('berita/edit') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header bg-warning">
                                                <h3 class="modal-title">Edit data <?= $row->judul ?></h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <input type="hidden" name="id" id="" class="form-control" required value="<?= $row->id ?>">

                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="judul">Judul Berita</label>
                                                    <input name="judul" type="text" class="form-control" required placeholder="Judul Berita" value="<?= $row->judul ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="berita">Berita</label>
                                                    <textarea name="berita" class="editor" id="berita_edit" cols="30" rows="10" placeholder="Content..."><?= $row->berita ?></textarea>
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
                                        <form action="<?= base_url('berita/delete') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header bg-danger">
                                                <h3 class="modal-title">Hapus data <?= $row->judul ?></h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" class="form-control" required value="<?= $row->id ?>">
                                                <h4>Apakah anda ingin menghapus data <span class="badge badge-danger"><?= $row->judul ?></span> ?</h4>
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