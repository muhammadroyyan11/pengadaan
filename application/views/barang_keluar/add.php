<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Barang Keluar</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
            <?= form_open('', [], ['id_barang_keluar' => $id_barang_keluar, 'user_id' => $this->session->userdata('login_session')['user']]); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Id Barang keluar</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input readonly type="text" id="id_barang_keluar" class="form-control" name="id_barang_keluar" placeholder="keluarkan ID Barang" value="<?= set_value('id_barang_keluar', $id_barang_keluar); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-paperclip"></i>
                                        </div>
                                        <?= form_error('id_barang_keluar', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Tanggal Keluar</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input readonly type="text" id="tanggal_keluar" class="form-control date" name="tanggal_keluar" placeholder="keluarkan Nama" value="<?= set_value('tanggal_keluar', date('Y-m-d')); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Barang</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <!-- <input type="number" id="no_telp" class="form-control" name="no_telp" placeholder="keluarkan No Tlp" value="<?= set_value('no_telp'); ?>"> -->
                                        <select name="barang_id" id="barang_id" class="custom-select">
                                            <option value="" selected disabled>Pilih Barang</option>
                                            <?php foreach ($barang as $b) : ?>
                                                <option <?= $this->uri->segment(3) == $b['id_barang'] ? 'selected' : '';  ?> <?= set_select('barang_id', $b['id_barang']) ?> value="<?= $b['id_barang'] ?>"><?= $b['id_barang'] . ' | ' . $b['nama_barang'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Jumlah Keluar</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="jumlah_keluar" class="form-control" name="jumlah_keluar" placeholder="Jumlah keluar..." value="<?= set_value('jumlah_keluar'); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-file"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>