<?php
// Define Arr Header
$arr_header = ['ID', 'NIM', 'UTS', 'UAS', 'TUGAS'];

// Define Array Data
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Nilai</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-5">Daftar Nilai Siswa</h3>
        <div class="table-responsive mt-1   ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <?php
                        foreach ($arr_header as $header) {
                        ?>
                            <th scope="col"><?= $header ?></th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ar_nilai as $nilai) {
                    ?>
                        <tr>
                            <td scope="col"><?= $nilai['id'] ?></td>
                            <td scope="col"><?= $nilai['nim'] ?></td>
                            <td scope="col"><?= $nilai['uts'] ?></td>
                            <td scope="col"><?= $nilai['uas'] ?></td>
                            <td scope="col"><?= $nilai['tugas'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
