<?php 
include 'koneksi.php';
// Mengambil data dari tabel menu
$query_menu = mysqli_query($conn, "SELECT * FROM menu");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopimi - Nikmati Secangkir Kopi</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/feather-icons"></script>
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Kopi<span>mi</span>.</a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
            <p>Dibuat dengan dedikasi, disajikan dengan hati. Rasakan sensasi kopi modern.</p>
            <a href="#menu" class="cta">Pesan Sekarang</a>
        </main>
    </section>

    <section id="menu" style="padding: 8rem 7% 2rem;">
        <h2 style="text-align: center; font-size: 2.6rem; margin-bottom: 3rem; color: #fff;"><span>Menu</span> Kami</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <?php while($row = mysqli_fetch_assoc($query_menu)) : ?>
            <div style="border: 1px solid #6f4b27; padding: 2rem; text-align: center; background-color: rgba(255,255,255,0.05); border-radius: 10px;">
                <i data-feather="coffee" style="color: #cb8948; width: 40px; height: 40px;"></i>
                <h3 style="margin: 1.5rem 0; font-size: 1.8rem; color: #fff;"><?= $row['nama']; ?></h3>
                <p style="font-size: 1.1rem; margin-bottom: 1rem; color: #ccc;"><?= $row['deskripsi']; ?></p>
                <div style="color: #cb8948; font-weight: bold; font-size: 1.4rem;">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section id="contact" style="padding: 5rem 7%;">
        <h2 style="text-align: center; font-size: 2.6rem; margin-bottom: 2rem;"><span>Kontak</span> Kami</h2>
        <div style="max-width: 600px; margin: 0 auto; background: #222; padding: 2rem; border-radius: 10px;">
            <form action="proses_kontak.php" method="POST">
                <input type="text" name="nama" placeholder="Nama Lengkap" style="width: 100%; padding: 1rem; margin-bottom: 1rem; background: #333; border: 1px solid #444; color: #fff;" required>
                <input type="email" name="email" placeholder="Email" style="width: 100%; padding: 1rem; margin-bottom: 1rem; background: #333; border: 1px solid #444; color: #fff;" required>
                <textarea name="pesan" placeholder="Pesan Anda" style="width: 100%; padding: 1rem; margin-bottom: 1rem; background: #333; border: 1px solid #444; color: #fff; height: 150px;" required></textarea>
                <button type="submit" class="cta" style="width: 100%; border: none; cursor: pointer;">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <script>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>
</html>