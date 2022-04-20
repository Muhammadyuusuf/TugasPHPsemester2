<?php
require_once './class_nilaimahasiswa.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Check Nilai Mahasiswa</title>
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

        <div class="container px-4 my-4">
            <form id="contactForm" method="post" action="index.php">
                <div class="mb-3">
                    <label class="form-label" for="nim">NIM</label>
                    <input class="form-control" name="nim" id="nim" type="text" placeholder="NIM" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="matkul">Pilih MK</label>
                    <select class="form-select" name="matkul" id="matkul" aria-label="Pilih MK" required>
                        <option value="Pemweb 1">Pemweb 1</option>
                        <option value="Jarkom">Jarkom</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nilai">Nilai</label>
                    <input class="form-control" id="nilai" name="nilai" type="text" placeholder="Nilai" required />
                </div>
                <input class="btn btn-success" name="proses" id="submitButton" type="submit"></input>
            </form>

            <?php
            $proses = $_POST['proses'];

            if (!empty($proses)) {
                $mahasiswa = new NilaiMahasiswa($_POST['matkul'], $_POST['nilai'], $_POST['nim']);
            ?>
                <div class="card my-4">
                    <div class="card-header">
                        Hasil check nilai mahasiswa
                    </div>
                    <div class="card-body" style="line-height: 0.6;">
                        <p class="card-text">NIM : <?= $mahasiswa->nim ?></p>
                        <p class="card-text">Nama Mata Kuliah : <?= $mahasiswa->matakuliah ?></p>
                        <p class="card-text">Nilai : <?= $mahasiswa->nilai ?></p>
                        <p class="card-text">Hasil Ujian : <?= $mahasiswa->grade() ?></p>
                        <p class="card-text">Grade : <?= $mahasiswa->hasil() ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
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
