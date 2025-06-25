<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/bengkel.png') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      position: relative;
      color: #fff;
    }
    .overlay {
      background-color: rgba(0, 0, 0, 0.6);
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      z-index: 0;
    }
    .status-container {
      position: relative;
      z-index: 1;
      max-width: 800px;
      margin: auto;
      padding: 40px;
      margin-top: 60px;
      background-color: rgba(255,255,255,0.95);
      color: #000;
      border-radius: 10px;
    }
    .card-result {
      background-color: #f8f9fa;
      border-left: 5px solid #0d6efd;
      margin-bottom: 20px;
      padding: 15px;
    }
  </style>
</head>
<body>
    <div class="overlay"></div>

  <div class="status-container">
    <h2 class="text-center mb-4">Cek Status Service</h2>

    <form method="POST" class="mb-4">
      <div class="mb-3">
        <label for="plat" class="form-label">Masukkan Nomor Plat Kendaraan:</label>
        <input type="text" name="plat" id="plat" class="form-control" placeholder="Contoh: B 1234 XYZ" required>
      </div>
      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Cek Status</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
      </div>
    </form>
    <h1>Cek Status</h1>
</body>
</html>