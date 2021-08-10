<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Barang Masuk</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open('', [], ['id_barang_masuk' => $id_barang_masuk, 'user_id' => $this->session->userdata('login_session')['user']]); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Id Barang Masuk</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input readonly type="text" id="id_barang_masuk" class="form-control" name="id_barang_masuk" placeholder="Masukkan ID Barang" value="<?= set_value('id_barang_masuk', $id_barang_masuk); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-key"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Tanggal Masuk</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input readonly type="text" id="tanggal_masuk" class="form-control date" name="tanggal_masuk" placeholder="Masukkan Nama" value="<?= set_value('tanggal_masuk', date('Y-m-d')); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Supplier</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <!-- <input type="number" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan No Tlp" value="<?= set_value('no_telp'); ?>"> -->
                                        <select name="supplier_id" id="supplier_id" class="custom-select">
                                            <option value="" selected disabled>Pilih Supplier Barang</option>
                                            <?php foreach ($supplier as $j) : ?>
                                                <option <?= set_select('supplier_id', $j['id_supplier']) ?> value="<?= $j['id_supplier'] ?>"><?= $j['nama_supplier'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
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
                                        <!-- <input type="number" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan No Tlp" value="<?= set_value('no_telp'); ?>"> -->
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
                                    <span>Jumlah Masuk</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="jumlah_masuk" class="form-control" name="jumlah_masuk" placeholder="Jumlah Masuk..." value="<?= set_value('jumlah_masuk'); ?>">

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