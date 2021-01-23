<?php session_start();
   if(!isset($_SESSION["cetak"])) {
      header("Location: http://localhost/cv-generator/app/create/");
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo htmlspecialchars($_POST["namaDepan"]); echo htmlspecialchars($_POST["namaBelakang"]); ?> | by CV Generator</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="http://localhost/cv-generator/app/create/style.css">
   <link rel="shortcut icon" href="http://localhost/cv-generator/public/img/resume.png">
</head>
<body data-bs-spy="scroll">

   <main>
      <section>
         <div class="container mt-5">
            <div class="row">
               <div class="col col-lg-5 bg-sdark text-center">
               <div class="row">
                  <div class="col">
                     <img src="http://localhost/cv-generator/public/img/resume.png" alt="404" width="140" class="mt-5"> 
                     <hr class="bg-cream">
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h4 class="mt-2 bg-cream p-3">Ringkasan Diri</h4>
                     <p class="text-start teks-pale"><?php echo htmlspecialchars($_POST["ringkasanDiri"]); ?>.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h4 class="mt-5 bg-cream p-3">Hubungi Saya</h4>
                     <p class="text-start mb-1 teks-pale"><b>Email : </b> <?php echo htmlspecialchars($_POST["email"]); ?></p>
                     <p class="text-start mb-1 teks-pale"><b>Facebook : </b> <?php echo htmlspecialchars($_POST["fb"]); ?></p>
                     <p class="text-start mb-1 teks-pale"><b>Instagram : </b> <?php echo htmlspecialchars($_POST["ig"]); ?></p>
                     <p class="text-start mb-1 teks-pale"><b>LinkedIn : </b> <?php echo htmlspecialchars($_POST["linkedin"]); ?></p>
                  </div>
               </div>
               </div>
               <div class="col text-center">
                  <div class="row p-5 bg-name">
                     <div class="col">
                        <h2 class="mt-4 mb-3"><?php echo htmlspecialchars($_POST["namaDepan"]) . " "; echo htmlspecialchars($_POST["namaBelakang"]); ?></h2>
                        <h5><?php echo htmlspecialchars($_POST["job"]); ?></h5>
                     </div>
                  </div>
                  <div class="row ms-1">
                     <div class="col">
                        <h4 class="mt-5 bg-cream p-3">Pengalaman Kerja</h4>
                        <p class="fw-bold text-start mb-0"><?php echo htmlspecialchars($_POST["p1"]); ?></p>
                        <p class="fst-italic text-start mb-1"><?php echo htmlspecialchars($_POST["jabatan"]) . " " . "|"; echo htmlspecialchars($_POST["lmKerja"]) . " " . "| " . " ";  echo htmlspecialchars($_POST["mulai"]) . " - "; echo htmlspecialchars($_POST["akhir"]); ?></p>
                        <p class="text-start mb-1">- <?php echo htmlspecialchars($_POST["jenisPekerjaan"]); ?></p>
                     </div>
                  </div>

                  <div class="row ms-1">
                     <div class="col">
                        <h4 class="mt-5 bg-cream p-3 text-body">Latar Belakang Pendidikan</h4>
                        <p class="fw-bold text-start mb-0"><?php echo htmlspecialchars($_POST["pendidikan1"]); ?></p>
                        <p class="fst-italic text-start mb-1"><?php echo htmlspecialchars($_POST["jurusan"]); ?> | <?php echo htmlspecialchars($_POST["thAkademik"]); ?></p>
                        <p class="fw-bold text-start mb-0"><?php echo htmlspecialchars($_POST["pendidikan2"]); ?></p>
                        <p class="fst-italic text-start mb-1"><?php echo htmlspecialchars($_POST["jurusanSMA"]); ?> | <?php echo htmlspecialchars($_POST["thAkademin"]); ?></p>
                     </div>
                  </div>

                  <div class="row mt-3 ms-1">
                     <div class="col">
                        <h4 class="bg-cream p-3">Skills</h4>
                        <p class="text-start mb-1 p-2 rounded text-body"><b class="badge bg-light text-body"><?php echo $_POST["nmSkills"]; ?></b> | <?php echo htmlspecialchars($_POST["tingkatan"]); ?></p>
                        <p class="text-start mb-1 p-2 rounded text-body"><b class="badge bg-light text-body"><?php echo htmlspecialchars($_POST["nmSkills2"]); ?></b> | <?php echo htmlspecialchars($_POST["tingkatan2"]); ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   <script>
      if(confirm('apakah anda ingin mencetak?')) {
         window.print();
      }
   </script>
</body>
</html>