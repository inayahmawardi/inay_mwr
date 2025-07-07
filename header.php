<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'Portofolio'; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
  <script src="assets/script.js" defer></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">[Nama Kamu]</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="project.php">Proyek</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>
