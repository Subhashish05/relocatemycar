<nav class="px-50">
    <a href="<?php echo base_url("")  ?>">
        <img src="<?php echo base_url("image/logo.png")  ?>" alt="logo">
    </a>
    <ul class="nav_links">
        <li><a href="<?php echo base_url("")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 19, ) == "" ? "active" : ""); ?>" >Home</a></li>
        <li><a href="<?php echo base_url("location")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 19, ) == "location" ? "active" : ""); ?>">Location</a></li>
        <li><a href="<?php echo base_url("about")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 19, ) == "about" ? "active" : ""); ?>">About</a></li>
        <li><a href="<?php echo base_url("contact")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 19, ) == "contact" ? "active" : ""); ?>">Contact</a></li>
    </ul>
    <div class="mobile_nav" data-mobile_nav="">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="mobile_nav_link" data-mobile_nav_link="">
        <div class="w-100 text-center" style="background-color: #222d2d;">
            <img src="<?php echo base_url("image/logo.png") ?>" alt="logo" style="width: 90%; height: auto; margin: 4% auto;">
        </div>
        <ul class="mobile_nav_links">
            <li><a href="<?php echo base_url("")  ?>">Home</a></li>
            <li><a href="<?php echo base_url("location")  ?>">Location</a></li>
            <li><a href="<?php echo base_url("about")  ?>">About</a></li>
            <li><a href="<?php echo base_url("contact")  ?>">Contact</a></li>
            <li><a href="<?php echo base_url("gallery")  ?>">Gallery</a></li>
            <li><a href="<?php echo base_url("blog")  ?>">Blog</a></li>
            <li><a href="<?php echo base_url("review")  ?>">Review</a></li>
            <li><a href="<?php echo base_url("sitemap")  ?>">Sitemap</a></li>
        </ul>
    </div>
    <script>
        document.querySelector('[data-mobile_nav]').addEventListener('click', () => {
            if (document.querySelector('[data-mobile_nav]').classList[1] !== 'cross') {
                document.querySelector('[data-mobile_nav]').classList.add('cross');
                document.querySelector('[data-mobile_nav_link]').classList.add('show');
            } else {
                document.querySelector('[data-mobile_nav]').classList.remove('cross');
                document.querySelector('[data-mobile_nav_link]').classList.remove('show');
            }
        })
    </script>
</nav>