<div class="container">

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <h4 class="h3 mb-2 text-gray-800"><?php echo $judul; ?></h4>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <button class="btn btn-success float-right" data-toggle="modal" data-target="#modaltambahguru">+ Tambah Data Guru</button>
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
                        <a class="btn btn-success fa fa-pencil" href="#" role="button"></a>
                        <a class="btn btn-danger fa fa-trash" href="<?= base_url(); ?>admin/guru/hapus/<?= $g['nip']; ?>" onclick="return confirm('yakin ?');" role="button"></a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="modaldetailguru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="isimodaltambahguru">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputnip">NIP</label>
                            <input type="text" class="form-control" id="inputnip">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputnama">Nama</label>
                            <input type="text" class="form-control" id="inputnama">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputemail">Email</label>
                            <input type="email" class="form-control" id="inputemail" placeholder="admin@sinero.com">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputnohp">No. HP</label>
                            <input type="text" class="form-control" id="inputnohp" placeholder="Ex 0895422980022">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputalamat">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="inputalamat">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputjenkel">Jenis Kelamin</label>
                            <select id="inputjenkel" class="form-control">
                                <option selected disabled value="">Pilih...</option>
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputagama">Agama</label>
                            <select id="inputagama" class="form-control">
                                <option selected disabled value="">Pilih...</option>
                                <option>Islam</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Kristen Protestan</option>
                                <option>Katholik</option>
                                <option>Kong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputjabatan">Jabatan</label>
                            <input type="text" class="form-control" id="inputjabatan">
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>