<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/review.css')  ?>">
</head>

<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <section style="background: #555" class="py-50">
            <h1 class="top_banner_text">Review</h1>
        </section>
        <section class="px-50 py-50 position-relative">
            <div class="d-flex flex-wrap row-cols-1 row-cols-md-2 row-cols-lg-3">
                <?php
                $num = 9;
                $i = $num * ($iteration - 1);
                $final = $i + $num;
                while ($i < $final) {
                    $i++;
                    echo '
                        <div class="p-2 review_container">
                            <div class="review_card">
                                <div class="reviewer_name">
                                    <div class="me-3">
                                        <div class="img_placeholder">' . substr('Jhon Doe', 0, 1) . '</div>
                                        <!-- <img src="" alt="profile image"> -->
                                    </div>
                                    <div class="col-auto">
                                        <p class="reviewer">Jhon Doe</p>
                                        <div>
                                            <span>' . $star . '</span>
                                            <span>' . $star . '</span>
                                            <span>' . $star . '</span>
                                            <span>' . $star . '</span>
                                            <span>' . $holo_star . '</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam totam voluptas adipisci labore laboriosam nesciunt cumque. Culpa recusandae porro rem totam alias. Eveniet amet voluptate perspiciatis eaque corrupti cupiditate qui.
                                </div>
                                <div class="review_date"> Reviewed on : 01/01/2000</div>
                            </div>
                        </div>
                    ';
                }
                ?>
            </div>
            <div class="pagination">
                <a href="<?php echo base_url('review/' . ($iteration - 1)) ?>"><button <?php echo ($iteration > 1 ? '' : 'disabled') ?>>prev</button></a>
                <span></span>
                <?php
                $times = 0;
                $j = $iteration;
                if ($j + 5 > $total / $num) {
                    $j = (($total / $num - 3 > 0) ? ($total / $num - 3) : 1);
                }
                while ($times < 5 && $j <= $total / $num) {
                    $times++;
                    echo '<a href="' . base_url('review/' . $j) . '" class="mx-2"><button>' . $j . '</button></a>';
                    $j++;
                }
                ?>
                <span></span>
                <a href="<?php echo base_url('review/' . ($iteration + 1)) ?>"><button <?php echo (($iteration < $total / $num) ? '' : 'disabled') ?>>next</button></a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script>
        const review_containers = document.querySelectorAll('.review_container');
        review_containers.forEach(review => {
            review.addEventListener('click', (e) => {
                if (review.classList[2] == 'zoomed') {
                    review.classList.remove('zoomed');
                } else {
                    review.classList.add('zoomed');
                }
            })
        })
    </script>
</body>

</html>