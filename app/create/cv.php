<?php 
   // require 'functions.php';
   // var_dump($data);

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
            <div class="row">
               <div class="col">
                  <div class="card">
                     <div class="card-body">
                        <?php echo $_POST["namaDepan"]; ?>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card">
                     <div class="card-body">
                        This is some text within a card body.
                     </div>
                  </div>
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