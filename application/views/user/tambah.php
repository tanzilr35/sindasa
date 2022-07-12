<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart('user/tambah'); ?>

                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">manage_accounts</i>
                    </div>

                    <div class="card-content">
                        <h4 class="card-title judul text-info"><strong>TAMBAH AKUN</strong></h4>

                        <div class="form-group">
                            <label class="label-control">Foto</label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <!-- <img src="<?= base_url() ?>assets/save.png" alt="..."> -->
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="photo" id="photo" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('photo', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Nama</label>
                            <input class="form-control" name="nama_user" id="nama_user" type="text" />
                        </div>
                        <?= form_error('nama_user', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Username</label>
                            <input class="form-control" name="username" id="username" type="text" />
                        </div>
                        <?= form_error('username', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Password</label>
                            <input class="form-control" name="password" id="password" type="text" />
                        </div>
                        <?= form_error('password', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Posyandu</label>
                            <select class="selectpicker" data-live-search="true" name="id_posyandu" id="id_posyandu" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                                <option disabled selected>Pilih Asal Posyandu</option>
                                <?php foreach ($data as $data) : ?>
                                    <option value="<?= $data['id_posyandu']; ?>"><?= $data['nama_posyandu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('id_posyandu', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Hak Akses</label>
                            <select class="selectpicker" name="role" id="role" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                                <option disabled selected>Pilih Hak Akses</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                        <?= form_error('role', '<div class="text-danger">', '</div>'); ?>


                        <div class="category form-category">
                            <div class="form-footer text-right">
                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>