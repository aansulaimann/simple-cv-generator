<?php session_start();
   if(isset($_POST["makeCV"])) {
      $_SESSION["cetak"] = true;
      // $_POST;
      // header("Location: http://localhost/cv-generator/app/create/cv.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE CV | CV Generator</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="http://localhost/cv-generator/public/css/style.css">
   <link rel="shortcut icon" href="http://localhost/cv-generator/public/img/resume.png">
</head>
<body data-bs-spy="scroll"> 
   <header>
      <nav class="navbar navbar-expand-lg navbar-light mt-3">
         <div class="container">
            <a class="navbar-brand" href="http://localhost/cv-generator/"><b>CV Generator</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav ms-auto">
                  <a class="nav-link active me-4" aria-current="page" href="#">Home</a>
                  <a class="nav-link me-4" href="#">Features</a>
                  <a class="nav-link me-4" href="#">Pricing</a>
                  <a class="btn btn-outline-warning ms-4 px-4" href="http://localhost/cv-generator/app/create">Create CV</a>
               </div>
            </div>
         </div>
      </nav>
   </header>

   <main>
      <section>
         <div class="container">
            <div class="row mt-3">
               <div class="col col-lg-3 mt-2">
                  <div id="list-example" class="list-group">
                     <a class="list-group-item list-group-item-action" href="#list-item-1">Data Diri</a>
                     <a class="list-group-item list-group-item-action" href="#list-item-6">Kontak</a>
                     <a class="list-group-item list-group-item-action" href="#list-item-2">Ringkasan Diri</a>
                     <a class="list-group-item list-group-item-action" href="#list-item-7">Pendidikan</a>
                     <a class="list-group-item list-group-item-action" href="#list-item-3">Pengalaman Kerja</a>
                     <a class="list-group-item list-group-item-action" href="#list-item-4">Skills</a>
                     <a class="list-group-item list-group-item-action" href="#list-item-5">Make CV</a>
                  </div>
               </div>
               <div class="col bg-white">
                  <form method="post" action="cv.php">
                     <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example px-4" tabindex="0">
                        <!-- data diri -->
                        <h4 id="list-item-1"><b>Data Diri</b></h4>
                        <div class="mb-3">
                           <label for="namaDepan" class="form-label">Nama Depan</label>
                           <input type="text" class="form-control" id="namaDepan" name="namaDepan" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="namaBelakang" class="form-label">Nama Belakang</label>
                           <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="job" class="form-label">Job Title</label>
                           <input type="text" class="form-control" id="job" name="job" required autocomplete="off">
                        </div>

                        <h4 id="list-item-6"><b>Contact</b></h4>
                        <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="text" class="form-control" id="email" name="email" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="linkedin" class="form-label">LinkedIn</label>
                           <input type="text" class="form-control" id="linkedin" name="linkedin" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="ig" class="form-label">Instagram</label>
                           <input type="text" class="form-control" id="ig" name="ig" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="fb" class="form-label">Facebook</label>
                           <input type="text" class="form-control" id="fb" name="fb" required autocomplete="off">
                        </div>

                        <h4 id="list-item-2"><b>Ringkasan Diri</b></h4>
                        <div class="mb-3">
                           <label for="ringkasanDiri" class="form-label">Ringkasan Diri</label>
                           <textarea class="form-control" id="ringkasanDiri" rows="3" required name="ringkasanDiri"></textarea>
                        </div>

                        <h4 id="list-item-7"><b>Pendidikan</b></h4>
                        <div class="mb-3">
                           <label for="pendidikan1" class="form-label">Nama Instansi Pendidikan</label>
                           <input type="text" class="form-control" id="pendidikan1" name="pendidikan1" required autocomplete="off" placeholder="cth: universitas abc">
                        </div>
                        <div class="mb-3">
                           <label for="jurusan" class="form-label">Jurusan Akademik</label>
                           <input type="text" class="form-control" id="jurusan" name="jurusan" required autocomplete="off" placeholder="cth: Teknik Sipil">
                        </div>
                        <div class="mb-3">
                           <label for="thAkademik" class="form-label">Tahun Akademik</label>
                           <input type="text" class="form-control" id="thAkademik" name="thAkademik" required autocomplete="off" placeholder="cth: 2010 - 2014">
                        </div>
                        <div class="mb-3">
                           <label for="pendidikan2" class="form-label">Nama Instansi Pendidikan</label>
                           <input type="text" class="form-control" id="pendidikan2" name="pendidikan2" required autocomplete="off" placeholder="SMA Negri 70">
                        </div>
                        <div class="mb-3">
                           <label for="jurusanSMA" class="form-label">Jurusan Akademik</label>
                           <input type="text" class="form-control" id="jurusanSMA" name="jurusanSMA" required autocomplete="off" placeholder="cth: IPA">
                        </div>
                        <div class="mb-3">
                           <label for="thAkademin" class="form-label">Tahun Akademik</label>
                           <input type="text" class="form-control" id="thAkademin" name="thAkademin" required autocomplete="off" placeholder="cth: 2007 - 2010">
                        </div>

                        <h4 id="list-item-3"><b>Pengalaman Kerja</b></h4>
                        <div class="mb-3">
                           <label for="p1" class="form-label">Nama Perusahaan</label>
                           <input type="text" class="form-control" id="p1" name="p1" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="jabatan" class="form-label">jabatan Kerja</label>
                           <input type="text" class="form-control" id="jabatan" name="jabatan" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="lmKerja" class="form-label">Lama Kerja</label>
                           <input type="text" class="form-control" id="lmKerja" name="lmKerja" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                           <label for="mulai" class="form-label">Mulai</label>
                           <input type="number" class="form-control" id="mulai" name="mulai" required autocomplete="off" placeholder="2000" min="0">
                        </div>
                        <div class="mb-3">
                           <label for="akhir" class="form-label">Akhir</label>
                           <input type="number" class="form-control" id="akhir" name="akhir" required autocomplete="off" placeholder="2001">
                        </div>
                        <div class="mb-3">
                           <label for="jenisPekerjaan" class="form-label">Jenis Pekerjaan</label>
                           <input type="tekx" class="form-control" id="jenisPekerjaan" name="jenisPekerjaan" required autocomplete="off" placeholder="cth: membuat desain animasi">
                        </div>

                        <h4 id="list-item-4"><b>Skills</b></h4>
                        <div class="mb-3">
                           <label for="nmSkills" class="form-label">Nama Skill</label>
                           <input type="text" class="form-control" id="nmSkills" name="nmSkills" required autocomplete="off" placeholder="cth: illustrator, photoshop">
                        </div>
                        <div class="mb-3">
                           <label for="tingkatan" class="form-label">Tingkatan</label>
                           <select class="form-select" aria-label="Default select example" id="tingkatan" name="tingkatan">
                              <option selected></option>
                              <option value="Mahir">Mahir</option>
                              <option value="Menengah">Menengah</option>
                              <option value="Pemula">Pemula</option>
                           </select>
                        </div>
                        <div class="mb-3">
                           <label for="nmSkills2" class="form-label">Nama Skill</label>
                           <input type="text" class="form-control" id="nmSkills2" name="nmSkills2" autocomplete="off" placeholder="cth: CorelDraw, 3Ddesain">
                        </div>
                        <div class="mb-3">
                           <label for="tingkatan2" class="form-label">Tingkatan</label>
                           <select class="form-select" aria-label="Default select example" id="tingkatan2" name="tingkatan2">
                              <option selected></option>
                              <option value="Mahir">Mahir</option>
                              <option value="Menengah">Menengah</option>
                              <option value="Pemula">Pemula</option>
                           </select>
                        </div>

                        <h4 id="list-item-5"><b>Buat CV</b></h4>
                        <button type="submit" class="btn btn-primary shadow mb-5" name="makeCV">Buat CV</button>
                        <button type="button" class="btn btn-outline-primary ms-3 mb-5">Batal</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </main>
   
   <footer>
      <div class="container">
         <div class="row">
            <div class="col text-center text-secondary mt-5">
               <h6>All right Reserved &copy 2021 | Created by aan</h4>
            </div>
         </div>
      </div>
   </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>