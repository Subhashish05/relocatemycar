<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
    <style>
        .blog_card {
            display: inline-block;
            position: relative;
            border-radius: 5px;
        }

        .blog_thumbnail>img {
            width: 100%;
            aspect-ratio: 1.91/1;
        }

        .blog_heading {
            color: #3a3a3a;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            height: auto;
            line-height: 27px;
            margin: 1rem 0;
        }

        .author_info {
            color: #4f6173;
            font-size: 14px;
            padding-left: 1rem;
        }

        @media (width < 768px) {
            .blog_heading {
                font-size: 14px;
                line-height: 20px;
            }

            .author_info {
                font-size: 12px;
            }
        }

        .author_info>span {
            display: inline-flex;
            margin-right: 1.5rem;
        }

        .author_info>span>svg {
            margin-right: 5px;
        }

        .pagination {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination > *{
            margin-top: 20px;
        }
        .pagination > span{
            flex: 1 1 10px;
        }
        .pagination button {
            background: var(--theme-color);
            color: #fff;
            border: none;
            outline: none;
            font-size: 16px;
            padding: 5px 15px;
            border-radius: 5px;
        }

        .pagination button:disabled {
            background: #aaa;
        }
    </style>
</head>

<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <section style="background: #555" class="py-50">
            <h1 class="top_banner_text">Blogs</h1>
        </section>
        <!-- blog -->
        <section class="blog py-50 px-50">
            <div class="d-flex flex-wrap row-cols-lg-3 row-cols-md-2 row-cols-1">
                <?php
                $num = 9;
                $i = $num * ($iteration - 1);
                $final = $i + $num;
                while ($i < $final) {
                    $i++;
                    echo '
                        <div class="py-5 px-md-2 px-lg-3">
                            <a href="' . base_url('blog/get-your-car-relocated') . '" class="blog_card">
                                <div class="blog_thumbnail mb-3">
                                    <img src="' . base_url('image/blog.png') . '" alt="blog_thumbnail" >
                                </div>
                                <small class="theme_text ps-3">Location</small>
                                <p class="blog_heading ps-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sed.</p>
                                <div class="author_info">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                        <p class="ms-1">Blog Writer</p>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                        <p class="ms-1">01/Jan/2000</p>
                                    </span>
                                </div>
                                <button type="button" class="more_btn">Read More</button>
                            </a>
                        </div>
                    ';
                }
                ?>
            </div>
            <div class="pagination">
                    <a href="<?php echo base_url('blog/' . ($iteration - 1)) ?>"><button <?php echo ($iteration > 1 ? '' : 'disabled') ?>>prev</button></a>
                    <span></span>
                    <?php
                    $times = 0;
                    $j = $iteration;
                    if ($j + 5 > $total / $num) {
                        $j = (($total / $num - 3 > 0) ? ($total / $num - 3) : 1);
                    }
                    while ($times < 5 && $j <= $total / $num) {
                        $times++;
                        echo '<a href="' . base_url('blog/' . $j) . '" class="mx-2"><button>' . $j . '</button></a>';
                        $j++;
                    }
                    ?>
                    <span></span>
                    <a href="<?php echo base_url('blog/' . ($iteration + 1)) ?>"><button <?php echo (($iteration < $total / $num) ? '' : 'disabled') ?>>next</button></a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>