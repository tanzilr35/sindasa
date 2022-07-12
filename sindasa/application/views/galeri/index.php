<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">image</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title judul text-primary"><strong>GALERI</strong></h4>
                        <div class="toolbar">

                            <a href="<?= base_url() ?>galeri/tambah">
                                <button class="btn btn-info">
                                    <span class="btn-label">
                                        <i class="material-icons">add_circle</i>
                                    </span>
                                    Tambah
                                </button>
                            </a>

                            <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                <div class="alert alert-success">
                                    <strong><?= $this->session->flashdata('success'); ?> </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td class="text-center" width="40"><?= $no; ?></td>
                                            <td class="text-center" width="150">
                                                <img class="img-thumbnail img rounded-circle" src="<?= base_url() ?>assets/galeri/<?= $key['gambar'] ?>">
                                            </td>
                                            <td class="text-center" width="200"><?= $key['judul_galeri']; ?></td>
                                            <td class="text-justify" width="350"><?= $key['deskripsi_galeri']; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url() ?>galeri/edit/<?= $key['id_galeri']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a>
                                                <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#hapusGaleri<?= $key['id_galeri']; ?>"><i class="material-icons">close</i></button>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusGaleri<?= $key['id_galeri']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>galeri/hapus/<?= $key['id_galeri']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah Anda yakin ingin menghapus gambar ini? </h5>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <button type="button" class="btn btn-simple" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-success btn-simple">Ya</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>