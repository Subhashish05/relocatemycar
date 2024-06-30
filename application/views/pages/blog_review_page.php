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
    <link rel="stylesheet" href="<?php echo base_url('css/blog.css')  ?>">
</head>

<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main class="px-50">
        <div class="d-flex pt-5 align-items-center">
            <div class="author_info">
                <span class="d-inline-flex me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512">
                        <path fill="#0D9298" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                    <p class="ms-1">Blog Writer</p>
                </span>
                <span class="d-inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512">
                        <path fill="#0D9298" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                    </svg>
                    <p class="ms-1">01/Jan/2000</p>
                </span>
            </div>
            <span class="mx-2">|</span>
            <div class="breadcrumb mb-0">
                <span>Blog</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path fill="#0D9298" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                </svg>
                <span><?php echo ucfirst(str_replace('-', ' ',$str)); ?></span>
            </div>
        </div>
        <div class="d-flex flex-wrap-reverse">
            <div class="col-md-8 col-12 pe-lg-3">
                <div class="blog_heading">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sed.</p>
                </div>
                <div class="blog_thumbnail">
                    <img src="<?php echo base_url('image/blog.png'); ?>" alt="thumbnail">
                </div>
                <div class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
                        <path fill="#0D9298" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                    </svg>
                    <span class="ms-2 me-4">125 Likes</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512">
                        <path fill="#0D9298" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                    </svg>
                    <span class="ms-2"> 150 Views</span>
                </div>
                <div>
                    <article>
                        <h3>1. heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam esse voluptatem dicta ratione quas est quia totam, amet architecto sunt? Laborum fuga rem similique natus explicabo veniam impedit praesentium aliquid atque dolor? Atque magni ab id hic mollitia rem, molestiae beatae aliquam porro autem quibusdam voluptate dicta culpa consectetur iusto ut dolorem repudiandae aspernatur omnis corporis facere, quisquam suscipit! Culpa, alias. Soluta reiciendis voluptatem doloribus at. Soluta praesentium quis in odio distinctio alias ut ullam molestiae quod itaque, ad totam aut, consequuntur, omnis accusantium? Modi omnis optio porro maiores, dignissimos culpa dolor quos nihil voluptate. Eligendi et delectus soluta facere?</p>
                    </article>
                    <article>
                        <h3>2. heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam esse voluptatem dicta ratione quas est quia totam, amet architecto sunt? Laborum fuga rem similique natus explicabo veniam impedit praesentium aliquid atque dolor? Atque magni ab id hic mollitia rem, molestiae beatae aliquam porro autem quibusdam voluptate dicta culpa consectetur iusto ut dolorem repudiandae aspernatur omnis corporis facere, quisquam suscipit! Culpa, alias. Soluta reiciendis voluptatem doloribus at. Soluta praesentium quis in odio distinctio alias ut ullam molestiae quod itaque, ad totam aut, consequuntur, omnis accusantium? Modi omnis optio porro maiores, dignissimos culpa dolor quos nihil voluptate. Eligendi et delectus soluta facere?</p>
                    </article>
                    <article>
                        <h3>3. heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam esse voluptatem dicta ratione quas est quia totam, amet architecto sunt? Laborum fuga rem similique natus explicabo veniam impedit praesentium aliquid atque dolor? Atque magni ab id hic mollitia rem, molestiae beatae aliquam porro autem quibusdam voluptate dicta culpa consectetur iusto ut dolorem repudiandae aspernatur omnis corporis facere, quisquam suscipit! Culpa, alias. Soluta reiciendis voluptatem doloribus at. Soluta praesentium quis in odio distinctio alias ut ullam molestiae quod itaque, ad totam aut, consequuntur, omnis accusantium? Modi omnis optio porro maiores, dignissimos culpa dolor quos nihil voluptate. Eligendi et delectus soluta facere?</p>
                    </article>
                    <article>
                        <h3>4. heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam esse voluptatem dicta ratione quas est quia totam, amet architecto sunt? Laborum fuga rem similique natus explicabo veniam impedit praesentium aliquid atque dolor? Atque magni ab id hic mollitia rem, molestiae beatae aliquam porro autem quibusdam voluptate dicta culpa consectetur iusto ut dolorem repudiandae aspernatur omnis corporis facere, quisquam suscipit! Culpa, alias. Soluta reiciendis voluptatem doloribus at. Soluta praesentium quis in odio distinctio alias ut ullam molestiae quod itaque, ad totam aut, consequuntur, omnis accusantium? Modi omnis optio porro maiores, dignissimos culpa dolor quos nihil voluptate. Eligendi et delectus soluta facere?</p>
                    </article>
                    <article>
                        <h3>5. heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam esse voluptatem dicta ratione quas est quia totam, amet architecto sunt? Laborum fuga rem similique natus explicabo veniam impedit praesentium aliquid atque dolor? Atque magni ab id hic mollitia rem, molestiae beatae aliquam porro autem quibusdam voluptate dicta culpa consectetur iusto ut dolorem repudiandae aspernatur omnis corporis facere, quisquam suscipit! Culpa, alias. Soluta reiciendis voluptatem doloribus at. Soluta praesentium quis in odio distinctio alias ut ullam molestiae quod itaque, ad totam aut, consequuntur, omnis accusantium? Modi omnis optio porro maiores, dignissimos culpa dolor quos nihil voluptate. Eligendi et delectus soluta facere?</p>
                    </article>
                    <article>
                        <h3>6. heading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam esse voluptatem dicta ratione quas est quia totam, amet architecto sunt? Laborum fuga rem similique natus explicabo veniam impedit praesentium aliquid atque dolor? Atque magni ab id hic mollitia rem, molestiae beatae aliquam porro autem quibusdam voluptate dicta culpa consectetur iusto ut dolorem repudiandae aspernatur omnis corporis facere, quisquam suscipit! Culpa, alias. Soluta reiciendis voluptatem doloribus at. Soluta praesentium quis in odio distinctio alias ut ullam molestiae quod itaque, ad totam aut, consequuntur, omnis accusantium? Modi omnis optio porro maiores, dignissimos culpa dolor quos nihil voluptate. Eligendi et delectus soluta facere?</p>
                    </article>
                </div>
                <div class="py-3">
                    <h3 class="fw-bold">0 Comments</h3>
                </div>
                <div class="py-3">
                    <h3 class="fw-bold">Leave a Comment</h3>
                    <form action="" method="post" class="comment_section">
                        <textarea name="comment" id="comment" rows="5" placeholder="Type here..."></textarea>
                        <input type="text" name="name" id="name" placeholder="Name*">
                        <input type="text" name="email" id="email" placeholder="Email*">
                        <div>
                            <button type="submit" class="theme_btn rounded-3">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-12 ps-lg-3">
                <div class="table_content">
                    <h3 class="fw-bold">Table Of Contents</h3>
                    <ul>
                        <li>Heading</li>
                        <li>Heading</li>
                        <li>Heading</li>
                        <li>Heading</li>
                        <li>Heading</li>
                        <li>Heading</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="py-3 mt-5">
            <h3 class="fw-bold">Recommended Articles</h3>
            <div class="d-flex flex-wrap row-cols-lg-3 row-cols-md-2 row-cols-1">
                <?php
                $i = 0;
                while ($i < 6) {
                    $i++;
                    echo '
                        <div class="py-5 px-md-2 px-lg-3">
                            <a href="' . base_url('blog/get-your-car-relocated') . '" class="blog_card">
                                <div class="blog_thumbnail2 mb-3">
                                    <img src="' . base_url('image/blog.png') . '" alt="blog_thumbnail" >
                                </div>
                                <small class="theme_text ps-3">Location</small>
                                <p class="blog_heading2 ps-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sed.</p>
                                <div class="author_info2">
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
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>