<div class="container">

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <h4 class="h3 mb-2 text-gray-800"><?php echo $judul; ?></h4>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <button class="btn btn-success float-right tambahDataGuruTombol" data-toggle="modal" data-target="#modaltambahguru">+ Tambah Data Guru</button>
        </div>
    </div>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col" width="10%">NIP</th>
                <th scope="col" width="20%">Nama</th>
                <th scope="col" width="25%">No. HP</th>
                <th scope="col" width="20%">TTL</th>
                <th scope="col" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guru as $g) : ?>
                <tr>
                    <th scope="row"><?php echo $g['nip']; ?></th>
                    <td><?php echo $g['nama']; ?></td>
                    <td><?php echo $g['nohp']; ?></td>
                    <td><?php echo $g['tempat_lahir']; ?>, <?php echo $g['tgl_lahir']; ?></td>
                    <td>
                        <a class="btn btn-primary fa fa-info-circle" href="" role="button" data-toggle="modal" data-target="#modaldetailguru" data-nip="<?php echo $g['nip']; ?>" data-nama="<?php echo $g['nama']; ?>" data-alamat="<?php echo $g['alamat']; ?>" data-jenkel="<?php echo $g['jenkel']; ?>" data-email="<?php echo $g['email']; ?>" data-nohp="<?php echo $g['nohp']; ?>" data-agama="<?php echo $g['agama']; ?>" data-tempat="<?php echo $g['tempat_lahir']; ?>" data-tanggal="<?php echo $g['tgl_lahir']; ?>" data-jabatan="<?php echo $g['jabatan']; ?>"></a>

                        <a class="btn btn-success fa fa-pencil tampilUbahData" data-toggle="modal" data-target="#modalubahguru" data-idguru="<?php echo $g['id_guru']; ?>" data-nip="<?php echo $g['nip']; ?>" data-nama="<?php echo $g['nama']; ?>" data-alamat="<?php echo $g['alamat']; ?>" data-jenkel="<?php echo $g['jenkel']; ?>" data-email="<?php echo $g['email']; ?>" data-nohp="<?php echo $g['nohp']; ?>" data-agama="<?php echo $g['agama']; ?>" data-tempat="<?php echo $g['tempat_lahir']; ?>" data-tanggal="<?php echo $g['tgl_lahir']; ?>" data-jabatan="<?php echo $g['jabatan']; ?>" href="#" data-id="<?= $g['nip'];  ?>" role="button"></a>

                        <a class="btn btn-danger fa fa-trash" href="<?= base_url(); ?>admin/guru/hapus/<?= $g['nip']; ?>" onclick="return confirm('yakin ?');" role="button"></a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="modaldetailguru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="isimodaldetailguru">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">NIP</th>
                            <td>:</td>
                            <td class="nipguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">Nama</th>
                            <td>:</td>
                            <td class="namaguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>:</td>
                            <td class="alamatguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">Gender</th>
                            <td>:</td>
                            <td class="genderguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>:</td>
                            <td class="emailguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">No. HP</th>
                            <td>:</td>
                            <td class="nohpguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">Agama</th>
                            <td>:</td>
                            <td class="agamaguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">TTL</th>
                            <td>:</td>
                            <td class="ttlguru"></td>
                        </tr>
                        <tr>
                            <th scope="row">Jabatan</th>
                            <td>:</td>
                            <td class="jabatanguru"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modaltambahguru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalTambah">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="isimodaltambahguru">
                <form action="<?= base_url('admin/guru/tambah')  ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat" name="tempat">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tgl" name="tgl">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="admin@sinero.com">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="nohp">No. HP</label>
                            <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Ex 0895422980022">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="jenkel">Jenis Kelamin</label>
                            <select name="jenkel" id="jenkel" class="form-control">
                                <option selected disabled value="">Pilih...</option>
                                <option>L</option>
                                <option>P</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="agama">Agama</label>
                            <select id="agama" name="agama" class="form-control">
                                <option selected disabled value="">Pilih...</option>
                                <option>Islam</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Kristen Protestan</option>
                                <option>Katholik</option>
                                <option>Kong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="reset" class="btn btn-warning">Clear</button> -->
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="modalubahguru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalTambah">Ubah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="isimodalubahguru">
                <form action="<?= base_url('admin/guru/ubah')  ?>" method="POST">
                    <div class="form-group" hidden="true">
                        <input type="text" class="form-control" id="id_guru" name="id_guru" value="">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat" name="tempat" value="">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tgl" name="tgl" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="admin@sinero.com" value="">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="nohp">No. HP</label>
                            <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Ex 0895422980022" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="jenkel">Jenis Kelamin</label>
                            <select name="jenkel" id="jenkel" class="form-control" value="">
                                <option selected disabled value="">Pilih...</option>
                                <option>L</option>
                                <option>P</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="agama">Agama</label>
                            <select id="agama" name="agama" class="form-control" value="">
                                <option selected disabled value="">Pilih...</option>
                                <option>Islam</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Kristen Protestan</option>
                                <option>Katholik</option>
                                <option>Kong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="reset" class="btn btn-warning">Clear</button> -->
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </form>
        </div>
    </div>
</div>