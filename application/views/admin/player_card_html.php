<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <style>

        .judul {
            position: absolute;
            top: 67px;
            left: 166px;
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

        .foto{
            border-radius: 50%;
            height: 150px;
            position: absolute;
            top: 120px;
            left: 120px;
        }

        .qr{
            height: 120px;
            position: absolute;
            top: 120px;
            left: 550px;
        }

        .data {
            position: absolute;
            top: 120px;
            left: 320px;
            text-align: left;
            color: black;
            padding-top: 0;
        }

        .expired {
            position: absolute;
            top: 288px;
            left: 520px;
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
        }

        .logo_fossbat {
            position: absolute;
            top: 310px;
            left: 190px;
            height: 40px;
        }

    </style>
</head>

<body onload="print()">
    <div class="container mt-4">
        <div class="col-md-5">
            
            <div class="containerrr">
                <img src="<?= base_url('assets/img/background.png') ?>" alt="Snow" style="height:400px;">
                <h5 class="judul">Kartu Identitas Pemain (KIP)</h5>

                <img src="<?= base_url('uploads/profile/'. $pemain[0]->foto) ?>" alt="" class="foto">

                <img src="<?= base_url('uploads/qr/'. $pemain[0]->qr) ?>" alt="" class="qr">

                <img src="<?= base_url('assets/img/logo_PSSI.png') ?>" class="logo_pssi">

                <img src="<?= base_url('assets/img/logo fossbat.png') ?>" class="logo_fossbat">


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
                    <span class="tebal"><?= date("d M ",strtotime($pemain[0]->created_at)) . $tahun ?></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>