<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

</head>

<body onload="print()">
    <div class="container">
        <div class="col-12 mb-3 mt-4" style="margin-bottom: 140px">
            <h3 class="text-center my-auto">FORMULIR DATA DIRI PEMAIN</h3>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                NAMA LENGKAP <br>
                NAMA PANGGILAN <br>
                ALAMAT <br>
                <br>
                SSB PEMAIN SAAT INI <br>
                NAMA AYAH <br>
                NAMA IBU <br>
            </div>
            <div class="col-md-4">
                : <?= $pemain[0]->nama_lengkap ?> <br>
                : <?= $pemain[0]->nama_panggilan ?> <br>
                : <?= $pemain[0]->alamat ?> <br>
                <br>
                : <?= $pemain[0]->ssb ?> <br>
                : <?= $pemain[0]->nama_ayah ?> <br>
                : <?= $pemain[0]->nama_ibu ?> <br>

            </div>
            <div class="col-md-3">
                <img src="<?= base_url('uploads/profile/' . $pemain[0]->foto) ?>" alt="" class="foto" width="100%">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                ADMINISTRASI PEMAIN <br>
                GOLONGAN DARAH <br>
                JENIS KELAMIN <br>
                BERAT BADAN <br>
                TINGGI BADAN <br>
            </div>

            <?php 
                $administrasi = explode(', ', $pemain[0]->administrasi);
            ?>

            <div class="col-md-8">
                : <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" disabled <?= (in_array('Akte Kelahiran', $administrasi)) ? "checked" : "" ?>>
                    <label class="form-check-label" for="inlineCheckbox1">AKTE</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" disabled <?= (in_array('NISN', $administrasi)) ? "checked" : "" ?>>
                    <label class="form-check-label" for="inlineCheckbox2">NISN</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" disabled <?= (in_array('KK', $administrasi)) ? "checked" : "" ?>>
                    <label class="form-check-label" for="inlineCheckbox2">KK</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" disabled <?= (in_array('Raport', $administrasi)) ? "checked" : "" ?>>
                    <label class="form-check-label" for="inlineCheckbox2">RAPORT</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" disabled <?= (in_array('Passport', $administrasi)) ? "checked" : "" ?>>
                    <label class="form-check-label" for="inlineCheckbox2">PASSPORT</label>
                </div> <br>

                : <?= $pemain[0]->gol_darah ?> <br>
                : <?= $pemain[0]->jenis_kelamin ?> <br>
                : <?= $pemain[0]->berat ?> Kg<br>
                : <?= $pemain[0]->tinggi ?> cm<br>
            </div>
        </div>

        <div class="col-12 mb-3 mt-4" style="margin-bottom: 140px">
            <h3 class="text-center my-auto">RIWAYAT PENDIDIKAN FORMAL</h3>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                SEKOLAH DASAR <br>
                SEKOLAH MENENGAH PERTAMA <br>
            </div>

  

            <div class="col-md-8">

                : <?= $pemain[0]->riwayat_sd ?> <br>
                : <?= $pemain[0]->riwayat_smp ?> <br>
            </div>
        </div>

        <div class="col-12 mb-3 mt-4" style="margin-bottom: 140px">
            <h3 class="text-center my-auto">RIWAYAT PENDIDIKAN SEKOLAH SEPAK BOLA</h3>
        </div>

        <div class="col-12">
            <table border="1" width="100%">
                <thead>
                    <th style="padding:10px" class="text-center">Nama SSB</th>
                    <th class="text-center">Kabupaten</th>
                    <th class="text-center">Provinsi</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center">Posisi</th>
                </thead>
                <tbody>
                    <?php
                        $data = explode(', ', $pemain[0]->riwayat_ssb);
                        $kab = explode(', ', $pemain[0]->riwayat_kabupaten);
                        $prov = explode(', ', $pemain[0]->riwayat_provinsi);
                        $tahun = explode(', ', $pemain[0]->riwayat_tahun);
                        $posisi = explode(', ', $pemain[0]->riwayat_posisi);

                        $jml = count($data);

                        for ($n = 0; $n < $jml; $n++) { ?>
                    <tr>
                        <td><?= $data[$n] ?></td>
                        <td><?= $kab[$n] ?></td>
                        <td><?= $prov[$n] ?></td>
                        <td><?= $tahun[$n] ?></td>
                        <td><?= $posisi[$n] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="col-12 mb-3 mt-4" style="margin-bottom: 140px">
            <h3 class="text-center my-auto">PRESTASI SEPAK BOLA</h3>
        </div>

        <div class="col-12">
            <table border="1" width="100%">
                <thead>
                    <th style="padding:10px" class="text-center">Nama SSB</th>
                    <th class="text-center">Kompetisi</th>
                    <th class="text-center">Prestasi</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center">Posisi</th>
                </thead>
                <tbody>
                    <?php
                        $data = explode(', ', $pemain[0]->prestasi_ssb);
                        $kab = explode(', ', $pemain[0]->prestasi_kompetisi);
                        $prov = explode(', ', $pemain[0]->prestasi);
                        $tahun = explode(', ', $pemain[0]->prestasi_tahun);
                        $posisi = explode(', ', $pemain[0]->prestasi_posisi);

                        $jml = count($data);

                        for ($n = 0; $n < $jml; $n++) { ?>
                    <tr>
                        <td><?= $data[$n] ?></td>
                        <td><?= $kab[$n] ?></td>
                        <td><?= $prov[$n] ?></td>
                        <td><?= $tahun[$n] ?></td>
                        <td><?= $posisi[$n] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="col-12 mt-4">
            <p class="text-center">Dengan ini setuju untuk ikut serta dalam LIGA U-13 FOSSBAT</p>
            <br>
            <p class="text-center">Batam, ............................................. <?= date('Y') ?></p> <br>

            <div class="row">
                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="text-center">(...............................................................)</p>
                    <p class="text-center">(Pemain)</p>
                </div>
                <div class="col-md-4">
                <br>
                    <br>
                    <br>
                    <br>
                    <p class="text-center">(...............................................................)</p>
                    <p class="text-center">(Manajer Tim)</p>
                </div>
                <div class="col-md-4">
                <br>
                    <br>
                    <br>
                    <br>
                    <p class="text-center">(...............................................................)</p>
                    <p class="text-center">(Orang tua / Wali)</p>
                </div>
            </div>

            <div class="col-md-12">
                <p class="text-center font-italic">Nb: Satu pemain satu lembar (mohon untuk memperbanyak / copy lembar ini)</p>                            
            </div>
        </div>
    </div>
</body>

</html>