<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">CRUD PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <table class="table table-striped">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Sekolah</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Akademik</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td width="20%" class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-danger btn-sm p-2"><i class="fa fa-trash"></i> Hapus Data</a>
                                <a href="#" class="btn btn-warning btn-sm ms-2 p-2"><i class="fa fa-edit"></i> Edit Data</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td width="20%" class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-danger btn-sm p-2"><i class="fa fa-trash"></i> Hapus Data</a>
                                <a href="#" class="btn btn-warning btn-sm ms-2 p-2"><i class="fa fa-edit"></i> Edit Data</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td width="20%" class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-danger btn-sm p-2"><i class="fa fa-trash"></i> Hapus Data</a>
                                <a href="#" class="btn btn-warning btn-sm ms-2 p-2"><i class="fa fa-edit"></i> Edit Data</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td width="20%" class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-danger btn-sm p-2"><i class="fa fa-trash"></i> Hapus Data</a>
                                <a href="#" class="btn btn-warning btn-sm ms-2 p-2"><i class="fa fa-edit"></i> Edit Data</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td width="20%" class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-danger btn-sm p-2"><i class="fa fa-trash"></i> Hapus Data</a>
                                <a href="#" class="btn btn-warning btn-sm ms-2 p-2"><i class="fa fa-edit"></i> Edit Data</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td width="20%" class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-danger btn-sm p-2"><i class="fa fa-trash"></i> Hapus Data</a>
                                <a href="#" class="btn btn-warning btn-sm ms-2 p-2"><i class="fa fa-edit"></i> Edit Data</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>