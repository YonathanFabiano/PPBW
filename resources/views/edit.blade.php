<!doctype html>
<html lang="en">
  <head>
    <title>UPDATE</title>
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
            <div class="col-lg-12 bg-primary py-4"></div>
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
                    <div class="card-body">

                        <div class="container-fluid mt-4">
                            @php
                                $minat = explode(',',$mahasiswa->bidang_minat);
                            @endphp
                            <form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
                            @csrf
                            @method('PUT')
                              <div class="form-group w-25">
                                    <label>NIM</label>
                                    <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
                              </div>
                  
                              <div class="form-group w-25">
                                  <label>Nama Mahasiswa</label>
                                  <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                              </div>
                  
                              <label>Gender</label>
                                  <div class="form-check w-25">
                                      <input type="radio" name="gender" value="Pria" {{ $mahasiswa->gender = 'Pria' ? 'checked':'' }} class="form-check-input">
                                      <label>Pria</label>
                                  </div>
                                  <div class="form-check w-25">
                                      <input type="radio" name="gender" value="Wanita" {{ $mahasiswa->gender = 'Wanita' ? 'checked':'' }} class="form-check-input">
                                      <label>Wanita</label>
                                  </div>
                  
                              <div class="form-group w-25">
                                  <label>Jurusan</label>
                                  <select name="jurusan" class="form-control">
                                      <option value="0">Pilih Jurusan</option>
                                      <option value="PT Hidayat Tbk" {{ $mahasiswa->jurusan = 'PT Hidayat Tbk' ? 'selected':'' }}>PT Hidayat Tbk</option>
                                      <option value="PT Samosir (Persero) Tbk" {{ $mahasiswa->jurusan = 'PT Samosir (Persero) Tbk' ? 'selected':'' }}>PT Samosir (Persero) Tbk</option>
                                      <option value="PT Tamba (Persero) Tbk" {{ $mahasiswa->jurusan = 'PT Tamba (Persero) Tbk' ? 'selected':'' }}>PT Tamba (Persero) Tbk</option>
                                      <option value="CV Kuswandari" {{ $mahasiswa->jurusan = 'CV Kuswandari' ? 'selected':'' }}>CV Kuswandari</option>
                                      <option value="CV Hastuti (Persero) Tbk" {{ $mahasiswa->jurusan = 'CV Hastuti (Persero) Tbk' ? 'selected':'' }}>CV Hastuti (Persero) Tbk</option>
                                      <option value="CV Mangunsong Padmasari" {{ $mahasiswa->jurusan = 'CV Mangunsong Padmasari' ? 'selected':'' }}>CV Mangunsong Padmasari</option>
                                      <option value="CV Suwarno (Persero) Tbk" {{ $mahasiswa->jurusan = 'CV Suwarno (Persero) Tbk' ? 'selected':'' }}>CV Suwarno (Persero) Tbk</option>
                                      <option value="UD Manullang Tbk" {{ $mahasiswa->jurusan = 'UD Manullang Tbk' ? 'selected':'' }}>UD Manullang Tbk</option>
                                      <option value="Perum Wasita" {{ $mahasiswa->jurusan = 'Perum Wasita' ? 'selected':'' }}>Perum Wasita</option>
                                  </select>
                              </div>
                  
                              <label>Bidang Minat</label>
                                  <div class="form-check w-25">
                                      <input type="checkbox" name="minat[]" value="Dokter" {{ in_array('Dokter', $minat) ? 'checked':'' }} class="form-check-input">
                                      <label>Dokter</label>
                                  </div>
                                  <div class="form-check w-25">
                                      <input type="checkbox" name="minat[]" value="Arsitek" {{ in_array('Arsitek', $minat) ? 'checked':'' }} class="form-check-input">
                                      <label>Arsitek</label>
                                  </div>
                                  <div class="form-check w-25">
                                      <input type="checkbox" name="minat[]" value="Pengacara" {{ in_array('Pengacara', $minat) ? 'checked':'' }} class="form-check-input">
                                      <label>Pengacara</label>
                                  </div>
                                  <div class="form-check w-25">
                                      <input type="checkbox" name="minat[]" value="Desainer" {{ in_array('Desainer', $minat) ? 'checked':'' }} class="form-check-input">
                                      <label>Desainer</label>
                                  </div>
                                  <div class="form-check w-25">
                                      <input type="checkbox" name="minat[]" value="Hakim" {{ in_array('Hakim', $minat) ? 'checked':'' }} class="form-check-input">
                                      <label>Hakim</label>
                                  </div>
                                  <div class="form-check w-25">
                                      <input type="checkbox" name="minat[]" value="POLRI" {{ in_array('POLRI', $minat) ? 'checked':'' }} class="form-check-input">
                                      <label>POLRI</label>
                                  </div>
                                
                                <div class="form-group pt-4">
                                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                                </div>
                  
                            </form>
                        </div>
                        
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