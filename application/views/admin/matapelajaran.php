<div class="container">

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <h4 class="h3 mb-2 text-gray-800"><?php echo $judul; ?></h4>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <button class="btn btn-success float-right" data-toggle="modal" data-target="#modaltambahmapel">+ Tambah Data Mapel</button>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Guru</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mapel as $a) : ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $a['nama_mapel'] ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td>

                        <a class="btn btn-success fa fa-pencil tampilUbahData" data-toggle="modal" data-target="#modalubahmapel<?php $a['id_mengajar'] ?>" data-nama="bangsat" role="button"></a>

                        <a class="btn btn-danger fa fa-trash" href="<?= base_url('admin/mapel/hapus?') . "id=" . $a['id_mengajar']; ?>" onclick="return confirm('yakin ?');" role="button"></a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<!-- Modal Ubah -->
<?php foreach ($mapel as $a) : ?>
    <div class="modal fade" id="modalubahmapel<?php $a['id_mengajar'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModalTambah">Ubah Data Mapel <?= $a['nama_mapel'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="isimodalubahguru">
                    <form action="<?= base_url('admin/mapel/ubah')  ?>" method="POST">
                        <div class="form-group" hidden="true">
                            <input type="text" class="form-control" name="idmengajar" value="<?= $a['id_mengajar'] ?>">
                            <input type="text" class="form-control" name="idmapel" value="<?= $a['id_mapel'] ?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="guru">Guru</label>
                                <select name="guru" class="form-control">
                                    <option selected disabled value=""> <?= $a['nama'] ?></option>
                                    <?php foreach ($guru as $b) : ?>
                                        <option><?= $b['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="siswa">Siswa</label>
                                <select name="siswa" class="form-control">
                                    <option selected disabled value="">...Pilih</option>
                                    <?php foreach ($siswa as $b) : ?>
                                        <option><?= $b['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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
    </div>
<?php endforeach; ?>

<!-- Model Tambah -->
<div class="modal fade" id="modaltambahmapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalTambah">Tambah Data Mapel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="isimodalubahguru">
                <form action="<?= base_url('admin/mapel/tambah')  ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="guru">Guru</label>
                            <select name="idmapel" class="form-control">
                                <option selected disabled value="">. . . Pilih</option>
                                <?php foreach ($matapelajaran as $b) : ?>
                                    <option><?= $b['nama_mapel'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="guru">Guru</label>
                            <select name="guru" class="form-control">
                                <option selected disabled value=""> <?= $a['nama'] ?></option>
                                <?php foreach ($guru as $b) : ?>
                                    <option><?= $b['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="siswa">Siswa</label>
                            <select name="siswa" class="form-control">
                                <option selected disabled value="">...Pilih</option>
                                <?php foreach ($siswa as $b) : ?>
                                    <option><?= $b['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
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
</div>