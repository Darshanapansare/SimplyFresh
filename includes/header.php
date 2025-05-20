<nav id="simplyFreshNav" class="navbar navbar-expand-lg navbar-dark px-0 py-3">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="assets/img/sf-logo.svg" class="img-fluid" alt="Simply Fresh">
        </a>
        <!-- Navbar toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Nav -->
            <div class="navbar-nav sf-nav-menu">
                <a class="nav-item nav-link  <?php if ($page == 'index') {
                    echo "active";
                } ?>" href="index.php" aria-current="page">Home</a>

                <a class="nav-item nav-link <?php if ($page == 'stories') {
                    echo "active";
                } ?>" href="stories.php">Stories</a>


                <a class="nav-item nav-link <?php if ($page == 'products') {
                    echo "active";
                } ?>" href="products.php">Products</a>

                <a class="nav-item nav-link <?php if ($page == 'about-us') {
                    echo "active";
                } ?>" href="about-us.php">About Us</a>

                <a class="nav-item nav-link <?php if ($page == 'contact-us') {
                    echo "active";
                } ?>" href="contact-us.php">Contact Us</a>

                <!-- <a class="nav-item nav-link <?php if ($page == 'rakho-iraade-fresh') {
                    echo "active";
                } ?>" href="rakho-iraade-fresh.php">Rakho
                    Iraade Fresh</a> -->




            </div>

            <!-- Right navigation -->

        </div>
    </div>
</nav>

<a id="button"></a>