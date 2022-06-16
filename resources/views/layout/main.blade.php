<!doctype html>
<html lang="en">
  <head>
    <title>72200396</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
  <body>
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-primary py-2">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle float-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-heart"></i> User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                      <a class="dropdown-item" href="/user">Data User</a>
                      <a class="dropdown-item" href="/logout">Exit</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link active" href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link" href="#dosen">Dosen</a>
                    <a class="nav-link" href="#staff">Staff</a>
                </div>
            </div>

            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                        {{-- tombol untuk menambahkan data baru --}}
                        <a name="" id="" class="btn btn-info" href="/mahasiswa/tambah" role="button"><i class="bi bi-person-plus"></i> Tambah Data</a>
                        
                        {{-- Formulir pencarian mahasiswa --}}
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search Here!" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body">
                        @if (session('create'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('create') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span>&times;</span>
                                </button>
                            </div>
                        @endif
                
                        @if (session('update'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('update') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span>&times;</span>
                                </button>
                            </div>
                        @endif
                
                        @if (session('delete'))
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>{{ session('delete') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span>&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    {{-- Menampilkan data pada tabel --}}
                    <div class="card-body">
                        <table class="table table-hover table-dark">
                            <thead>
                              <tr>
                                <th scope="col">@yield('k1')</th>
                                <th scope="col">@yield('k2')</th>
                                <th scope="col">@yield('k3')</th>
                                <th scope="col">@yield('k4')</th>
                                <th scope="col">@yield('k5')</th>
                                <th scope="col">@yield('k6')</th>
                                <th scope="col">@yield('k7')</th>
                              </tr>
                            </thead>
                            <tbody>
                                @yield('content')
                            </tbody>
                        </table>
                            <span> Data Per Halaman : {{ $mahasiswa->count() }}</span>
                            <span class="float-right">{{ $mahasiswa->links() }}</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>