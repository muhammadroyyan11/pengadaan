<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data barang Keluar</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('barangkeluar/add') ?>" class="btn btn-primary btn-flat">
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
                                        <th>No Transaksik</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Keluar</th>
                                        <th>User</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($barangkeluar as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['id_barang_keluar']; ?></td>
                                            <td><?= $data['tanggal_keluar']; ?></td>
                                            <td><?= $data['nama_barang']; ?></td>
                                            <td><?= $data['jumlah_keluar']; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <th>
                                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('barangkeluar/delete/') . $data['id_barang_keluar'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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