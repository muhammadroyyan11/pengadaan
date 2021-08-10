<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Supplier</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-user-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>No Tlp</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($supplier as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nama_supplier']; ?></td>
                                            <td><?= $data['no_telp']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <th>
                                                <a href="<?= base_url('supplier/edit/') . $data['id_supplier'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('supplier/delete/') . $data['id_supplier'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>No Tlp</th>
                                        <th>Alamat</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>