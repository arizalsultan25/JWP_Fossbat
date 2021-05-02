<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Identitas Pemain <?= $pemain[0]->nama_lengkap ?></title>

    <style>
        .judul {
            position: absolute;
            top: 106px;
            left: 97px;
            padding-top: 3px;
            padding-left: 100px;
            color: black;
            font-weight: bold;
            display: inline-block;
        }

        /* Container holding the image and the text */
        .containerrr {
            position: relative;
            text-align: center;
            color: white;
            width: 800px;
        }

        .foto {
            border-radius: 50%;
            height: 120px;
            position: absolute;
            top: 120px;
            left: 120px;
            padding-top: 100px;
            padding-left: 40px;
        }

        .qr {
            height: 90px;
            position: absolute;
            top: 100px;
            left: 550px;
            padding-left: 270px;
            padding-bottom: 30px;
        }

        .data {
            position: absolute;
            top: 157px;
            left: 280px;
            text-align: left;
            color: black;
            padding-top: 0;
        }

        .expired {
            position: absolute;
            top: 294px;
            left: 470px;
            text-align: left;
            color: black;
            padding-top: 0;
        }

        .tebal {
            font-weight: bold;
        }

        .logo_pssi {
            position: absolute;
            top: 288px;
            left: 100px;
            height: 70px;
            padding-top: 10px;
            padding-left: 10px;
        }

        .logo_fossbat {
            position: absolute;
            top: 310px;
            left: 190px;
            height: 40px;
            padding-bottom: 10px;
        }

        .background {
            background: url("<?= base_url('assets/img/background.png') ?>") no-repeat 0 0;
            background-image-resize: 3;
            position: relative;
            height: 340px;
        }
    </style>
</head>

<body>
    <div class="background">
        <img src="<?= base_url('uploads/profile/' . $pemain[0]->foto) ?>" alt="" class="foto">
        <img src="<?= base_url('uploads/qr/' . $pemain[0]->qr) ?>" alt="" class="qr"> <br>
        <img src="<?= base_url('assets/img/logo_PSSI.png') ?>" class="logo_pssi">
        <img src="<?= base_url('assets/img/logo fossbat.png') ?>" class="logo_fossbat">

    </div>
    <h3 class="judul">Kartu Identitas Pemain (KIP)</h3>
    <div class="data">
        ID : CM221402<?= $pemain[0]->id_pemain ?> <br> <br>
        Nama : <br>
        <span class="tebal"> <?= $pemain[0]->nama_lengkap ?> </span><br>
        Alamat : <br>
        <span class="tebal"><?= $pemain[0]->alamat ?> </span><br> <br>
        Handphone : <br>
        <span class="tebal">+62 - 8912355123</span><br>
    </div>

    <div class="expired">
        Berlaku hingga : <br>
        <?php
        $tahun = (int)substr($pemain[0]->created_at, 0, 4);
        $tahun = $tahun + 5 ?>
        <span class="tebal"><?= date("d M ", strtotime($pemain[0]->created_at)) . $tahun ?></span>
    </div>
</body>

</html>