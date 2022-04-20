<?php
require_once './daftar_mahasiswa.php';

function getRandomNim($length = 8)
{
    $intMin = (10 ** $length) / 10;
    $intMax = (10 ** $length) - 1;

    $codeRandom = mt_rand($intMin, $intMax);

    return $codeRandom;
}

$mahasiswa1 = new Mahasiswa('Fikri', getRandomNim());
$mahasiswa2 = new Mahasiswa('Ihsan', getRandomNim());
$mahasiswa3 = new Mahasiswa('Zaenal', getRandomNim());
$mahasiswa4 = new Mahasiswa('Firdaus', getRandomNim());


$mahasiswa1->prodi = 'TI';
$mahasiswa2->prodi = 'TI';
$mahasiswa3->prodi = 'SI';
$mahasiswa4->prodi = 'SI';

$mahasiswa1->thn_angkatan = '2019';
$mahasiswa2->thn_angkatan = '2019';
$mahasiswa3->thn_angkatan = '2019';
$mahasiswa4->thn_angkatan = '2019';

$mahasiswa1->ipk = 3.9;
$mahasiswa2->ipk = 2.2;
$mahasiswa3->ipk = 1.3;
$mahasiswa4->ipk = 3.4;



$list_mahasiswa = [
    ['nim' => $mahasiswa1->nim, 'nama' => $mahasiswa1->nama, 'prodi' => $mahasiswa1->prodi, 'thn_angkatan' => $mahasiswa1->thn_angkatan, 'ipk' => $mahasiswa1->ipk, 'predikat' => $mahasiswa1->getPredikat()],
    ['nim' => $mahasiswa2->nim, 'nama' => $mahasiswa2->nama, 'prodi' => $mahasiswa2->prodi, 'thn_angkatan' => $mahasiswa2->thn_angkatan, 'ipk' => $mahasiswa2->ipk, 'predikat' => $mahasiswa2->getPredikat()],
    ['nim' => $mahasiswa3->nim, 'nama' => $mahasiswa3->nama, 'prodi' => $mahasiswa3->prodi, 'thn_angkatan' => $mahasiswa3->thn_angkatan, 'ipk' => $mahasiswa3->ipk, 'predikat' => $mahasiswa3->getPredikat()],
    ['nim' => $mahasiswa4->nim, 'nama' => $mahasiswa4->nama, 'prodi' => $mahasiswa4->prodi, 'thn_angkatan' => $mahasiswa4->thn_angkatan, 'ipk' => $mahasiswa4->ipk, 'predikat' => $mahasiswa4->getPredikat()]
];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-mahasiswa').DataTable();
        });
    </script>

    <title>Daftar Mahasiswa</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WEB02</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Review PHP
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PHP5 OOP
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </ul>
                    <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Login
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
        <div class="table-responsive my-5">
            <table id="table-mahasiswa" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Tahun Angkatan</th>
                        <th>IPK</th>
                        <th>Predikat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($list_mahasiswa as $key_mahasiswa => $value_mahasiswa) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value_mahasiswa['nim'] ?></td>
                            <td><?= $value_mahasiswa['nama'] ?></td>
                            <td><?= $value_mahasiswa['prodi'] ?></td>
                            <td><?= $value_mahasiswa['thn_angkatan'] ?></td>
                            <td><?= $value_mahasiswa['ipk'] ?></td>
                            <td><?= strval($value_mahasiswa['predikat']) ?></td>
                            <td><?= 'download' ?></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer style="padding: 5px; margin-top: 0px;">
        <div class="text-dark px-2 py-1" style="line-height: 0.4;">
            <p><b>Lab Pemrograman Web Lanjutan</b></p>
            <p>Dosen : Sirojul Munir S.Si,M.Kom</p>
            <p>STT-NF - Kampus B</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
