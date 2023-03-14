<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
    <link rel="shortcut icon" href="<?=BASEURL?>/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=BASEURL?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=BASEURL?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=BASEURL?>/favicon-16x16.png">
    <link rel="manifest" href="<?=BASEURL?>/site.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="<?=BASEURL?>"><?=APPTITLE?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="<?=BASEURL?>">Home</a>
        <a class="nav-link" href="<?=BASEURL?>/mahasiswa">Mahasiswa</a>
        <a class="nav-link" href="<?=BASEURL?>/about">About</a>
      </div>
    </div>
  </div>
</nav>