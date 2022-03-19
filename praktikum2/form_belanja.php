<?php
$arr_barang = ['TV' => 4200000, 'KULKAS' => 3100000, 'MESINCUCI' => 3800000];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja Online</title>
</head>

<body>
    <div class="container">
        <h1 class="mb-5">Belanja Online</h1>
        <div class="row">
            <div class="col-sm-12 col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Daftar Harga
                    </div>
                    <div class="card-body">
                        <?php
                        foreach ($arr_barang as $barang_key => $barang_val) {
                        ?>
                            <p class="card-text"><?= $barang_key . ' : ' . number_format($barang_val, 2, ',', '.'); ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="card-footer">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Customer</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="tv" type="radio" class="custom-control-input" value="TV">
                                <label for="tv" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="kulkas" type="radio" class="custom-control-input" value="KULKAS">
                                <label for="kulkas" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="mesin_cuci" type="radio" class="custom-control-input" value="MESINCUCI">
                                <label for="mesin_cuci" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label>
                        <div class="col-8">
                            <input id="jumlah_beli" name="jumlah_beli" placeholder="Jumlah Beli" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input name="proses" type="submit" class="btn btn-primary"></input>
                        </div>
                    </div>
                </form>
            </div>


            <?php
            $proses = $_POST['proses'];
            $nama = $_POST['nama'];
            $barang = $_POST['radio'];
            $jumlah_beli = $_POST['jumlah_beli'];

            $total_belanja = $arr_barang[$barang] * $jumlah_beli;
            $arr_customer = ['Proses' => $proses, 'Nama Customer' => $nama, 'Produk Pilihan' => $barang, 'Jumlah Beli' => $jumlah_beli, 'Total Belanja' => number_format($total_belanja, 2, ',', '.')];


            if (!empty($proses)) {
                foreach ($arr_customer as $form_key => $form_value) {
                    if ($form_key === "Proses") continue;
                    echo "$form_key : $form_value <br />";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>
