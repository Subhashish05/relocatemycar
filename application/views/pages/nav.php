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
    <script>
        document.querySelector('[data-mobile_nav]').addEventListener('click', () =>{
            if(document.querySelector('[data-mobile_nav]').classList[1] !== 'cross'){
                document.querySelector('[data-mobile_nav]').classList.add('cross');
            }
            else{
                document.querySelector('[data-mobile_nav]').classList.remove('cross');
            }
        })
    </script>
</nav>