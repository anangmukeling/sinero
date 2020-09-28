<div class="container">

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <h4 class="h3 mb-2 text-gray-800"><?php echo $judul; ?></h4>
        </div>
    </div>

    <div class="card text-center col-12 my-3">
        <div class="card-header">
            <form action="" method="post">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <button name="role" value="1" class="nav-link <?php echo (1 == $role) ? 'active' : ''; ?>" href="#">Siswa</button>
                    </li>
                    <li class="nav-item">
                        <button name="role" value="2" class="nav-link  <?php echo (2 == $role) ? 'active' : ''; ?>" href="#">Guru</button>
                    </li>
                    <li class="nav-item">
                        <button name="role" value="1" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin</button>
                    </li>
                </ul>
            </form>
        </div>

        <div class="card-body">
            <form action="<?= base_url('admin/user') ?>" method="POST">
                <div class="row col-4 float-right my-3">
                    <div class="col">
                        <input type="hidden" name="role" value="<?php echo (1 == $role) ? 1 : 2; ?>" id="">
                        <input type="text" name="<?php echo (1 == $role) ? 'siswa' : 'guru'; ?>" class="form-control" placeholder="Search">
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" width="10%">#</th>
                        <th scope="col" width="20%">Nama</th>
                        <th scope="col" width="25%">Tempat Tanggal Lahir</th>
                        <th scope="col" width="20%">Alamat</th>
                        <th scope="col" width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $b) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['tempat_lahir']; ?>, <?= $b['tgl_lahir'] ?></td>
                            <td><?= $b['alamat']; ?></td>
                            <td>
                                <a class="btn btn-primary fa fa-info-circle" href="" role="button" data-toggle="modal" data-target="#modaldetail<?= (1 == $role) ? 'siswa' : 'guru'; ?><?= (1 == $role) ? $b['nis'] : $b['nip']; ?>"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>


<!-- Modal Detail -->
<?php foreach ($user as $b) : ?>
    <div class="modal fade" id="modaldetail<?= (1 == $role) ? 'siswa' : 'guru'; ?><?= (1 == $role) ? $b['nis'] : $b['nip']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data <?= $b['nama']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="isimodaldetailguru">
                    <table class="table table-striped">
                        <?php if ($role == 1) : ?>
                            <tbody>
                                <tr>
                                    <th scope="row">NIS</th>
                                    <td>:</td>
                                    <td><?= $b['nis'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td>:</td>
                                    <td><?= $b['nama'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>:</td>
                                    <td><?= $b['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>:</td>
                                    <td><?= $b['jenkel'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">No. HP</th>
                                    <td>:</td>
                                    <td><?= $b['nohp'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Agama</th>
                                    <td>:</td>
                                    <td><?= $b['agama'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">TTL</th>
                                    <td>:</td>
                                    <td><?= $b['tempat_lahir'] ?>, <?= $b['tgl_lahir'] ?></td>
                                </tr>
                            </tbody>
                        <?php elseif ($role == 2) : ?>
                            <tbody>
                                <tr>
                                    <th scope="row">NIP</th>
                                    <td>:</td>
                                    <td><?= $b['nip'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td>:</td>
                                    <td><?= $b['nama'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>:</td>
                                    <td><?= $b['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>:</td>
                                    <td><?= $b['jenkel'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>:</td>
                                    <td><?= $b['email'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">No. HP</th>
                                    <td>:</td>
                                    <td><?= $b['nohp'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Agama</th>
                                    <td>:</td>
                                    <td><?= $b['agama'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">TTL</th>
                                    <td>:</td>
                                    <td><?= $b['tempat_lahir'] ?>, <?= $b['tgl_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan</th>
                                    <td>:</td>
                                    <td><?= $b['jabatan'] ?></td>
                                </tr>
                            </tbody>
                        <?php endif ?>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>