<?php
require_once __DIR__ . '/../src/sanitize.php';

// Contoh: ambil input (POST)
$name = $_POST['name'] ?? null;
$message = $_POST['message'] ?? null;

// Jangan mengandalkan hanya JavaScript pada client-side.
// Selalu escape saat menampilkan ke HTML.
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Contoh Sanitasi XSS</title>
</head>
<body>
  <h1>Contoh Form</h1>

  <form method="post" action="">
    <label>
      Nama: <input type="text" name="name" value="<?= e($name) ?>">
    </label><br><br>

    <label>
      Pesan:<br>
      <textarea name="message"><?= e($message) ?></textarea>
    </label><br><br>

    <button type="submit">Kirim</button>
  </form>

  <?php if ($name || $message): ?>
    <h2>Hasil (aman):</h2>
    <p><strong>Nama:</strong> <?= e($name) ?></p>
    <p><strong>Pesan:</strong><br><?= nl2br(e($message)) ?></p>
  <?php endif; ?>
</body>
</html>
