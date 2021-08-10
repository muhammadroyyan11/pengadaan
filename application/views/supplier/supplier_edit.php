<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data Supplier</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open('', [], ['id_supplier' => $supplier['id_supplier']]); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_supplier" class="form-control" name="nama_supplier" placeholder="Masukkan Nama" value="<?= set_value('nama_supplier', $supplier['nama_supplier']); ?>">
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
                                    <span>Nomer Tlp</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan No Tlp" value="<?= set_value('no_telp', $supplier['no_telp']); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-smartphone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Alamat</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"><?= set_value('alamat', $supplier['alamat']); ?></textarea>
                                        <div class="form-control-position">
                                            <i class="feather icon-home"></i>
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