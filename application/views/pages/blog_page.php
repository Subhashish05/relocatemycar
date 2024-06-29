<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
</head>

<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <section style="height: 250px; background: #555" class="py-50">
            <h1 class="top_banner_text">Blogs</h1>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>