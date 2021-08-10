<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data Satuan</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open('', [], ['id_satuan' => $satuan['id_satuan']]); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_satuan" class="form-control" name="nama_satuan" placeholder="Masukkan Nama" value="<?= set_value('nama_satuan', $satuan['nama_satuan']); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
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