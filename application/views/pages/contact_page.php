<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/contact.css')  ?>">
</head>
<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <section class="banner py-50">
            <div class="heading">Contact Us</div>
            <div class="banner_text col-12 col-md-8">
                <a href="mailto:support@relocatemycar.com"><i class="fa fa-envelope"></i> support@relocatemycar.com</a>
                <a href="tel:911234567890"><i class="fa fa-mobile"></i> +91-1234567890 </a>
                <a class="d-flex"> <i class="fa fa-location-dot col-auto pt-2"></i><p class="col-8 text_justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione?</p></a>
            </div>
            <div class="col-12 col-md-4">
                <form action="" method="post" class="border p-3 shadow bg-secondary rounded-1">
                    <p class="text-center mb-3 border-bottom fw-bold fs-2">Send Query</p>
                    <div class="mb-3">
                        <label for="name" class="d-none">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="d-none">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="d-none">Description</label>
                        <textarea name="desc" id="desc" rows="1" class="form-control" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="my-3">
                        <button type="submit" class="theme_btn w-100 rounded-pill">Submit</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="container d-flex flex-wrap py-50">
            <div class="col-12 mx-auto mb-5 pb-3">
                <p class="text-center col-12 mb-3 fw-bold fs-2 border-bottom">Head Office</p>
                <div class="col-lg-6 col-12">
                    <h4>City Name</h4>
                    <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                    <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <p class="text-center col-12 mb-5 fw-bold fs-2 border-bottom pt-4">Other Office</p>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h4>City Name</h4>
                <p class="col-lg-8 col-12 text_justify mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit, iste possimus recusandae itaque ratione</p>
                <a href="" class="text-primary">Get Direction <i class="fa fa-angle-right"></i></a>
            </div>
        </section>
    </main>
    <footer class="text-center theme_bg">all copyright reserved @2024</footer>
</body>
</html>