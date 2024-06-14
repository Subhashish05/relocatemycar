<nav>
    <a href="<?php echo base_url("pages/home")  ?>">
        <img src="<?php echo base_url("image/logo.png")  ?>" alt="logo">
    </a>
    <ul class="nav_links">
        <li><a href="<?php echo base_url("pages/home")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 25, ) == "home" ? "active" : ""); ?>" >Home</a></li>
        <li><a href="<?php echo base_url("pages/location")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 25, ) == "location" ? "active" : ""); ?>">Location</a></li>
        <li><a href="<?php echo base_url("pages/about")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 25, ) == "about" ? "active" : ""); ?>">About</a></li>
        <li><a href="<?php echo base_url("pages/contact")  ?>" class="<?php echo (substr($_SERVER['REQUEST_URI'], 25, ) == "contact" ? "active" : ""); ?>">Contact</a></li>
    </ul>
    <div class="mobile_nav" data-mobile_nav="">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="mobile_nav_link" data-mobile_nav_link="">
        <img src="<?php echo base_url("image/logo.png") ?>" alt="logo" style="width: 90%; height: auto;">
        <ul class="mobile_nav_links">
            <li><a href="<?php echo base_url("pages/home")  ?>">Home</a></li>
            <li><a href="<?php echo base_url("pages/location")  ?>">Location</a></li>
            <li><a href="<?php echo base_url("pages/about")  ?>">About</a></li>
            <li><a href="<?php echo base_url("pages/contact")  ?>">Contact</a></li>
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