<DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href='./'>Pocetna</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href='?controller=students&action=index'>Studenti</a>
              <a class="nav-link" href='?controller=departments&action=index'>Odjeli</a>
              <a class="nav-link" href='?controller=marks&action=index'>Ocjene</a>
			  <a class="nav-link" href='?controller=pages&action=login'>Login</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

      <div class="container" style="margin-top: 30px;">

        <?php require_once('routes.php'); ?>
      </div>

    <footer>
      <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
        ----------------
        <br>
        RNWA Zadaca
      </div>

    </footer>
  <body>
<html>