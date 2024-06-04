<nav>
    <a href="<?php echo base_url("pages/home")  ?>">
        <img src="<?php echo base_url("image/logo.png")  ?>" alt="logo">
    </a>
    <ul class="nav_links">
        <li><a href="<?php echo base_url("pages/home")  ?>">Home</a></li>
        <li><a href="<?php echo base_url("pages/location")  ?>">Location</a></li>
        <li><a href="<?php echo base_url("pages/about")  ?>">About</a></li>
        <li><a href="<?php echo base_url("pages/contact")  ?>">Contact</a></li>
    </ul>
    <div class="mobile_nav" data-mobile_nav="">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="mobile_nav_link" data-mobile_nav_link="">
        <p>RelocateMyCar.in</p>
        <ul class="mobile_nav_links">
            <li><a href="<?php echo base_url("pages/home")  ?>">Home</a></li>
            <li><a href="<?php echo base_url("pages/location")  ?>">Location</a></li>
            <li><a href="<?php echo base_url("pages/about")  ?>">About</a></li>
            <li><a href="<?php echo base_url("pages/contact")  ?>">Contact</a></li>
        </ul>
    </div>
    <script>
        document.querySelector('[data-mobile_nav]').addEventListener('click', () =>{
            if(document.querySelector('[data-mobile_nav]').classList[1] !== 'cross'){
                document.querySelector('[data-mobile_nav]').classList.add('cross');
                document.querySelector('[data-mobile_nav_link]').classList.add('show');
            }
            else{
                document.querySelector('[data-mobile_nav]').classList.remove('cross');
                document.querySelector('[data-mobile_nav_link]').classList.remove('show');
            }
        })
    </script>
</nav>