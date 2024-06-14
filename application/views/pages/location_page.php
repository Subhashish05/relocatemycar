<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Calcutta");
$date = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <meta name="description" content="Best car relocation company in India">
    <link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/location.css')  ?>">
</head>

<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <!-- banner -->
        <section class="banner py-50">
            <div class="text-container">
                <div class="d-flex mb-3">
                    <img src="<?php echo base_url('image/rating.png') ?>" alt="stars" style="width: 70px">
                    <p class="ps-1 theme_sub_heading">Rated 4.6+ on Google Reviews</p>
                </div>
                <h1 class="f_bold" style="color: #192121">Best Car Relocation in <span class="theme_text">Mumbai</span></h1>
                <p>Simplify car relocation with us! Trust our dedicated team for safe, efficient transport. Say goodbye
                    to stress, hello to peace of mind!</p>
            </div>
            <div class="btn_container">
                <div class="col-8 col-md-6 col-lg-2 p-2">
                    <button class="theme_btn w-100 rounded-2 border border-2 py-3 px-2" type="button">Get Quote</button>
                </div>
            </div>
        </section>

        <div class="video_container">
            <div class="play-btn-container">
                <img alt="play" width="48px" height="48px" loading="lazy" title="Play Video" class="play-btn" src="<?php echo base_url('image/play-button.png') ?>">
            </div>
        </div>

        <!-- how we work -->
		<section class="container d-flex flex-column align-items-center py-50">
			<h2 class="text-center col-sm-6 theme_heading mb-3">How we work at <span class="theme_text">Relocate My Car.</span></h2>
			<div class="text-center col-sm-8 mb-5 theme_sub_heading">We’re a professional local moving company created to move more than just your boxes. We’ll move you with our hard work and genuine smiles.</div>
			<div class="steps">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3 class="fw-bold">Step 1</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus saepe obcaecati et repudiandae tenetur.</p>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3 class="fw-bold">Step 2</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsa illum est facilis, necessitatibus laboriosam!</p>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3 class="fw-bold">Step 3</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamu sequi architecto quis voluptas aperiam maxime.</p>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3 class="fw-bold">Step 4</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam minima maiores sunt.</p>
				</div>
			</div>
		</section>

        <!-- main article -->
        <article class="py-50 container">
            <h3 class="text-center theme_heading">Your Seamless <span class="theme_text">Car Transport</span> Solutions</h3>
            <p class="text_justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto vel soluta
                eveniet quis quam sunt itaque similique quo quos. Et totam error corporis quaerat ipsa sed, aliquam
                assumenda ut quas autem neque porro omnis est architecto? Blanditiis voluptates exercitationem
                voluptatem facere id. Magnam distinctio saepe ab molestiae accusantium praesentium ipsum quis sit enim
                corrupti, nulla officia nesciunt mollitia at. Explicabo reiciendis iusto eum reprehenderit at, enim
                quas? Recusandae voluptates rem sapiente laboriosam ipsam? Officia autem amet odit iusto. Deleniti vero
                quod sit. Eos ad tempora perspiciatis voluptatum officiis, quidem maxime, quae enim saepe cupiditate
                quis, doloribus libero vero suscipit doloremque.</p>
        </article>

        <!-- review -->
        <article class="review py-50 px-5">
            <h3 class="text-center theme_heading col-12 mb-5">Some words from our <span class="text-white">happy customers!</span></h3>
            <button type="button" class="prev" aria-label="previous button" data-prev="" title="Previous">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="12.5" viewBox="0 0 320 512"><path fill="#ffffff" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            </button>
            <div class="review_container">
                <div class="reviews" data-review="" style="left: 0%;">
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">J</div>
                            <div class="col-9 ps-3 fs-4 text-white">Jhon Deo</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit assumenda
                            corrupti debitis minus ex doloribus sed provident? Quas excepturi illum laborum,"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">R</div>
                            <div class="col-9 ps-3 fs-4 text-white">Ram Kumar</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ab nulla
                            quae quam officia esse, quisquam sequi necessitatibus quidem elige"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">J</div>
                            <div class="col-9 ps-3 fs-4 text-white">Jay Singh</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga accusantium
                            ducimus, nobis expedita quae dignissimos. Sint voluptatum quos aspernatur tenetur"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">D</div>
                            <div class="col-9 ps-3 fs-4 text-white">Devi Roy</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore commodi
                            suscipit impedit! Consequatur rerum architecto ipsam culpa voluptatem nemo qui a"</p>
                    </div>

                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">J</div>
                            <div class="col-9 ps-3 fs-4 text-white">Jhon Deo</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit assumenda
                            corrupti debitis minus ex doloribus sed provident? Quas excepturi illum laborum,"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">R</div>
                            <div class="col-9 ps-3 fs-4 text-white">Ram Kumar</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ab nulla
                            quae quam officia esse, quisquam sequi necessitatibus quidem elige"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">J</div>
                            <div class="col-9 ps-3 fs-4 text-white">Jay Singh</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga accusantium
                            ducimus, nobis expedita quae dignissimos. Sint voluptatum quos aspernatur tenetur"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">D</div>
                            <div class="col-9 ps-3 fs-4 text-white">Devi Roy</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore commodi
                            suscipit impedit! Consequatur rerum architecto ipsam culpa voluptatem nemo qui a"</p>
                    </div>

                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">J</div>
                            <div class="col-9 ps-3 fs-4 text-white">Jhon Deo</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit assumenda
                            corrupti debitis minus ex doloribus sed provident? Quas excepturi illum laborum,"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">R</div>
                            <div class="col-9 ps-3 fs-4 text-white">Ram Kumar</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ab nulla
                            quae quam officia esse, quisquam sequi necessitatibus quidem elige"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">J</div>
                            <div class="col-9 ps-3 fs-4 text-white">Jay Singh</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga accusantium
                            ducimus, nobis expedita quae dignissimos. Sint voluptatum quos aspernatur tenetur"</p>
                    </div>
                    <div class="review_card">
                        <div class="d-flex px-3 pt-3">
                            <div class="col-3 review_img">D</div>
                            <div class="col-9 ps-3 fs-4 text-white">Devi Roy</div>
                        </div>
                        <p class="p-3 pt-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore commodi
                            suscipit impedit! Consequatur rerum architecto ipsam culpa voluptatem nemo qui a"</p>
                    </div>
                </div>
            </div>
            <button type="button" class="next" aria-label="next button" data-next="" title="Next">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="12.5" viewBox="0 0 320 512"><path fill="#ffffff" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
            </button>
            <script>
                const a = document.querySelector('[data-review]');
                const b = (window.innerWidth - 100);
                for (let i = 0; i < a.children.length; i++) {
                    a.children[i].style.width = b / 2 +"px" ;
                }
                
                let i = 0;
                const c = a.children.length / 2 - 1;
                document.querySelector('[data-next]').addEventListener('click', () =>{
                    if( i > -b * c){
                        i-= b;
                        a.style.left = i + "px";
                    }
                });
                document.querySelector('[data-prev]').addEventListener('click', () =>{
                    if(i < 0){
                        i+= b;
                        a.style.left = i + "px";
                    }
                });
            </script>
        </article>

        <!-- location -->
        <section class="py-50 border-top mx-sm-2 mx-lg-5">
            <h3 class="theme_heading text-center">Car <span class="theme_text">Relocation Services</span> Near You</h3>
            <h5 class="ps-2 my-3 border-bottom">Relocation at your Locality</h5>
            <div class="d-flex flex-wrap ps-2">
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Bandra</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Bhandup</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Borivali</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Chembur</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Colaba</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Dadar</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Dahisar</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Ghatkopar</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Goregaon</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Jogeshwari</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kalwa</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kandivali</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kanjurmarg</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Goregaon East</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Goregaon West</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kandivali East</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kandivali West</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kurla</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Lower Parel</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Juhu</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Vile Parle</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Virar West</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Malad East</span>
                </div>
            </div>

            <h5 class="ps-2 mt-5 mb-3 border-bottom">Relocation at other Cities</h5>
            <div class="d-flex flex-wrap ps-2">
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Bandra</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Bhandup</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Borivali</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Chembur</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Colaba</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Dadar</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Dahisar</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Ghatkopar</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Goregaon</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Jogeshwari</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kalwa</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kandivali</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kanjurmarg</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Goregaon East</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Goregaon West</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kandivali East</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kandivali West</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Kurla</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Lower Parel</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Juhu</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Vile Parle</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Virar West</span>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                        <path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <span>Packers And Movers In Malad East</span>
                </div>
            </div>
        </section>

        <!-- faq -->
        <section class="container d-flex flex-column align-items-center py-50 faq">
            <h2 class="text-center theme_heading"><span class="theme_text">F</span>requently <span class="theme_text">A</span>sked <span class="theme_text">Q</span>uestions</h2>
            <div class="text-center col-sm-8 mt-2 mb-4">Discover the perfect fit for your budget! Our Transportation Rates section
                lays out all the details you need to know about moving your car hassle-free.</div>

            <div>
                <div class="faq_card">
                    <div class="questions">Why would I need car relocation services?</div>
                    <div class="ans">
                        There are several reasons why you might need to relocate a car:
                        <ul>
                            <li>1. Moving to a new city or state.</li>
                            <li>2. Purchasing a car from a distant seller.</li>
                            <li>3. Transporting a classic or luxury vehicle safely.</li>
                            <li>4. Shipping a car for a temporary stay, such as a vacation or a seasonal residence.</li>
                        </ul>
                    </div>
                </div>
                <div class="faq_card">
                    <div class="questions">What is car relocation?</div>
                    <div class="ans">Car relocation typically involves hiring a professional auto transport company.
                        Once you provide details about your car and desired destination, the company will give you a
                        quote and schedule a pickup. They'll transport your car using either an open or enclosed
                        trailer, depending on your preference and budget.</div>
                </div>
                <div class="faq_card">
                    <div class="questions">How long does car relocation take?</div>
                    <div class="ans">The time it takes to relocate a car depends on several factors, including the
                        distance, the transport company's schedule, and any unforeseen delays like weather or road
                        conditions. Generally, it can take anywhere from a few days to a couple of weeks for domestic
                        shipments. International shipments may take longer due to customs clearance and other logistical
                        factors.</div>
                </div>
                <div class="faq_card">
                    <div class="questions">Is my car insured during relocation?</div>
                    <div class="ans">Most reputable auto transport companies provide insurance coverage for the vehicles
                        they transport. However, it's essential to clarify the extent of coverage with the company
                        before shipping your car and consider purchasing additional insurance if necessary.</div>
                </div>
                <div class="faq_card">
                    <div class="questions">How should I prepare my car for relocation?</div>
                    <div class="ans">Here are some essential steps to prepare your car for relocation:
                        <ul>
                            <li>1. Wash your car and document any existing damage with photographs.</li>
                            <li>2. Remove personal belongings and valuables from the car.</li>
                            <li>3. Ensure that your car has no more than a quarter tank of gas.</li>
                            <li>4. Disable the car alarm system if it's active.</li>
                            <li>5. Check for any fluid leaks and address them if necessary.</li>
                            <li>6. Retract or remove any custom attachments like spoilers or antennas.</li>
                        </ul>
                    </div>
                </div>
                <div class="faq_card">
                    <div class="questions">How much does car relocation cost?

                    </div>
                    <div class="ans">The cost of car relocation varies depending on factors such as the distance, the
                        type of vehicle, the transport method (open or enclosed trailer), and the time of year. You can
                        request quotes from multiple auto transport companies to compare prices and services.
                    </div>
                </div>
                <div class="faq_card">
                    <div class="questions">Can I track my car during relocation?</div>
                    <div class="ans">Many auto transport companies offer tracking services that allow you to monitor the
                        progress of your car shipment online or via mobile app. This provides peace of mind and allows
                        you to stay informed about your car's whereabouts throughout the relocation process.</div>
                </div>
                <div class="faq_card">
                    <div class="questions">Can I ship multiple cars at once?</div>
                    <div class="ans">Yes, most auto transport companies can accommodate shipping multiple cars at once,
                        either on the same trailer or on separate trailers depending on your needs and the company's
                        capabilities. However, shipping multiple cars together may affect the overall cost and delivery
                        timeline.</div>
                </div>
                <div class="faq_card">
                    <div class="questions">What should I do if there are issues with my car upon delivery?</div>
                    <div class="ans">Upon delivery, carefully inspect your car for any new damage or discrepancies
                        compared to the documentation you provided before shipment. If you notice any issues, document
                        them thoroughly and report them to the auto transport company immediately. They should work with
                        you to resolve any concerns and, if necessary, initiate an insurance claim for damages incurred
                        during transit.</div>
                </div>
            </div>
        </section>

        <!-- blog -->
        <section class="blog py-50">
            <h2 class="theme_heading text-center">Check out our latest <span class="theme_text">blog</span>!</h2>
            <div class="d-flex flex-wrap px-5">
                <div class="col-lg-3 col-sm-2 col-12 py-3 px-3">
                    <div class="blog_card">
                        <img src="<?php echo base_url('image/blog.png') ?>" alt="blog_thumbnail" >
                        <h4 class="theme_text">Lorem ipsum dolor sit amet consectetur...</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsa accusantium nobis voluptate odit! Aliquam error repellendus quisquam accusamus aspernatur at odit, qui voluptate earum deserunt, laborum ea. Quod, voluptates.</p>
                        <a href="" class="theme_btn rounded-2 ms-3">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-2 col-12 py-3 px-3">
                    <div class="blog_card">
                        <img src="<?php echo base_url('image/blog.png') ?>" alt="blog_thumbnail" >
                        <h4 class="theme_text">Lorem ipsum dolor sit amet consectetur...</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsa accusantium nobis voluptate odit! Aliquam error repellendus quisquam accusamus aspernatur at odit, qui voluptate earum deserunt, laborum ea. Quod, voluptates.</p>
                        <a href="" class="theme_btn rounded-2 ms-3">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-2 col-12 py-3 px-3">
                    <div class="blog_card">
                        <img src="<?php echo base_url('image/blog.png') ?>" alt="blog_thumbnail" >
                        <h4 class="theme_text">Lorem ipsum dolor sit amet consectetur...</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsa accusantium nobis voluptate odit! Aliquam error repellendus quisquam accusamus aspernatur at odit, qui voluptate earum deserunt, laborum ea. Quod, voluptates.</p>
                        <a href="" class="theme_btn rounded-2 ms-3">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-2 col-12 py-3 px-3">
                    <div class="blog_card">
                        <img src="<?php echo base_url('image/blog.png') ?>" alt="blog_thumbnail" >
                        <h4 class="theme_text">Lorem ipsum dolor sit amet consectetur...</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsa accusantium nobis voluptate odit! Aliquam error repellendus quisquam accusamus aspernatur at odit, qui voluptate earum deserunt, laborum ea. Quod, voluptates.</p>
                        <a href="" class="theme_btn rounded-2 ms-3">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center theme_bg">all copyright reserved @2024</footer>
    <script>
        const ques = document.querySelectorAll(".questions");
        ques.forEach(e => {
            e.addEventListener('click', () => {
                ques.forEach(e2 => {
                    if (e2 !== e) {
                        e2.classList.remove('open');
                        e2.nextElementSibling.classList.remove('open');
                        e2.nextElementSibling.style.height = 0 + 'px';
                    }
                });
                if (e.classList[1] !== 'open') {
                    e.nextElementSibling.style.height = e.nextElementSibling.scrollHeight + 20 + 'px';
                } else {
                    e.nextElementSibling.style.height = 0 + 'px';
                }
                e.classList.toggle('open');
                e.nextElementSibling.classList.toggle('open');
            })
        })
    </script>
</body>

</html>