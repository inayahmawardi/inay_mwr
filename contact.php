<?php 
$title = "Kontak";
include "header.php"; 
?>

<div class="container mt-5">
  <h2>Hubungi Saya</h2>
  <form method="POST" action="">
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Pesan</label>
      <textarea name="pesan" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>

<?php include "footer.php"; ?>
