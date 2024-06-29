<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
    <style>
        .image_container {
            cursor: zoom-in;
        }

        .image_container.zoomed {
            cursor: zoom-out;
            position: fixed;
            top: 0;
            width: calc(100vw - 10px);
            height: 100vh;
            left: 0;
            background: #00000090;
            backdrop-filter: blur(7px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #fff;
        }

        .image_container.zoomed>img {
            width: auto;
            height: 90%;
        }

        .image_container.zoomed>p {
            color: #fff;
            font-weight: 700;
            font-size: 24px;
            margin-top: 20px;
            letter-spacing: 1.5px;
        }

        .pagination {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 40px;
        }

        button {
            background: var(--theme-color);
            color: #fff;
            border: none;
            outline: none;
            font-size: 16px;
            padding: 5px 15px;
            border-radius: 5px;
        }

        button:disabled {
            background: #aaa;
        }
    </style>
</head>

<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <section style="height: 250px; background: #555" class="py-50">
            <h1 class="top_banner_text">Gallery</h1>
        </section>
        <section class="px-50 py-50 position-relative">
            <h3 class="text-center theme_heading">Image Gallery</h3>
            <div class="d-flex flex-wrap row-cols-2 row-cols-md-3 row-cols-lg-4">
                <?php
                $current_img = $iteration_img;
                $current_vid = $iteration_vid;

                $num_img = 12;
                $i = $num_img * ($iteration_img - 1);
                $final = $i + $num_img;
                while ($i < $final) {
                    $i++;
                    echo '
                        <div class="p-3 image_container">
                            <img src="' . base_url('image/gallery_img.jpg') . '" alt="demo image" class="img-fluid">
                            <p class="text-center"> Image Title ' . $i . '.</p>
                        </div>';
                }
                ?>
            </div>
            <div class="pagination">
                <div>
                    <a href="<?php echo base_url('pages/gallery/' . ($iteration_img - 1) . '/' . $current_vid) ?>"><button <?php echo ($iteration_img > 1 ? '' : 'disabled') ?>>prev</button></a>
                </div>
                <div>
                    <?php
                    $times = 0;
                    $j = $iteration_img;
                    if ($j + 5 > $total_img / $num_img) {
                        $j = (($total_img / $num_img - 4 > 0 )? ($total_img / $num_img - 4) : 1);
                    }
                    while ($times < 5 && $j <= $total_img / $num_img) {
                        $times++;
                        echo '<a href="' . base_url('pages/gallery/' . $j . '/' . $current_vid) . '" class="mx-2"><button>' . $j . '</button></a>';
                        $j++;
                    }
                    ?>
                </div>
                <div>
                    <a href="<?php echo base_url('pages/gallery/' . ($iteration_img + 1) . '/' . $current_vid) ?>"><button <?php echo (($iteration_img < $total_img / $num_img) ? '' : 'disabled') ?>>next</button></a>
                </div>
            </div>
        </section>

        <section class="px-50 py-50">
            <h3 class="text-center theme_heading">Video Gallery</h3>
            <div class="d-flex flex-wrap row-cols-2 row-cols-md-3 row-cols-lg-4">
                <?php
                $num_vid = 4;
                $k = $iteration_vid;
                $i = $num_vid * ($iteration_vid - 1);
                $final2 = $i + $num_vid;
                while ($i < $final2) {
                    $i++;
                    echo '
                        <div class="p-3 video_container">
                            <video src="' . base_url('image/gallery_video.mp4') . '" controls class="img-fluid">
                            </video>
                            <p class="text-center"> Video Title ' . $i . '</p>
                        </div>';
                }
                ?>
            </div>
            <div class="pagination">
                <div>
                    <a href="<?php echo base_url('pages/gallery/' . $current_img . '/' . $iteration_vid - 1) ?>"><button <?php echo ($iteration_vid > 1 ? '' : 'disabled') ?>>prev</button></a>
                </div>
                <div>
                    <?php
                    $times2 = 0;
                    if ($k + 3 > $total_vid / $num_vid) {
                        $k = (($total_vid / $num_vid - 2 > 0)? ($total_vid / $num_vid - 2) : 1);
                    }
                    while ($times2 < 5 && $k <= $total_vid / $num_vid) {
                        $times2++;
                        echo '<a href="' . base_url('pages/gallery/' . $current_img . '/' . $k) . '" class="mx-2"><button>' . $k . '</button></a>';
                        $k++;
                    }
                    ?>
                </div>
                <div>
                    <a href="<?php echo base_url('pages/gallery/' . $current_img . '/' . $iteration_vid + 1) ?>"><button <?php echo (($iteration_vid < $total_vid / $num_vid) ? '' : 'disabled') ?>>next</button></a>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script>
        const image_containers = document.querySelectorAll('.image_container');
        image_containers.forEach(image => {
            image.addEventListener('click', (e) => {
                if (image.classList[2] == 'zoomed') {
                    image.classList.remove('zoomed');
                } else {
                    image.classList.add('zoomed');
                }
            })
        })
    </script>
</body>

</html>