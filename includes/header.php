<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Village</a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Large Screen Menu -->
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    
                    <!-- School Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="schoolDropdown" role="button" data-bs-toggle="dropdown">
                            School
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">S.K.N.P.S</a></li>
                            <li><a class="dropdown-item" href="#">Kapil School</a></li>
                            <li><a class="dropdown-item" href="#">Jairam School</a></li>
                            <li><a class="dropdown-item" href="#">Junior High School</a></li>
                            <li><a class="dropdown-item" href="#">Anushuchit School</a></li>
                        </ul>
                    </li>
                    
                    <!-- Shops Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="pages/shops.php" id="shopsDropdown" role="button" data-bs-toggle="dropdown">
                            Shops
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kirana Shop</a></li>
                            <li><a class="dropdown-item" href="#">Medical Shop</a></li>
                            <li><a class="dropdown-item" href="#">Electric Shop</a></li>
                            <li><a class="dropdown-item" href="#">CSC Center</a></li>
                        </ul>
                    </li>
                    
                    <!-- Dropdown for Login -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown">
                            Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">GramPanchayat Login</a></li>
                            <li><a class="dropdown-item" href="#">AB Login</a></li>
                            <li><a class="dropdown-item" href="#">Admin Login</a></li>
                            <li><a class="dropdown-item" href="#">Users Login</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="pages/logout.php">Logout</a></li>
                </ul>
            </div>

            <!-- Mobile Slide Menu -->
            <div class="offcanvas offcanvas-start bg-dark text-white d-lg-none" tabindex="-1" id="mobileMenu">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="gallery.php">Gallery</a></li>
                        
                        <!-- School Dropdown (Mobile) -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">School</a>
                            <ul class="list-unstyled ps-3">
                                <li><a class="nav-link text-white" href="sknps.php">S.K.N.P.S</a></li>
                                <li><a class="nav-link text-white" href="kapil_school.php">Kapil School</a></li>
                                <li><a class="nav-link text-white" href="jairam_school.php">Jairam School</a></li>
                                <li><a class="nav-link text-white" href="junior_high_school.php">Junior High School</a></li>
                                <li><a class="nav-link text-white" href="anushuchit_school.php">Anushuchit School</a></li>
                            </ul>
                        </li>
                        
                        <!-- Shops Dropdown (Mobile) -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Shops</a>
                            <ul class="list-unstyled ps-3">
                                <li><a class="nav-link text-white" href="kirana_shop.php">Kirana Shop</a></li>
                                <li><a class="nav-link text-white" href="medical_shop.php">Medical Shop</a></li>
                                <li><a class="nav-link text-white" href="electric_shop.php">Electric Shop</a></li>
                                <li><a class="nav-link text-white" href="csc_center.php">CSC Center</a></li>
                            </ul>
                        </li>
                        
                        <!-- School Dropdown (Mobile) -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Login</a>
                            <ul class="list-unstyled ps-3">
                                <li><a class="nav-link text-white" href="gram_panchayat_login.php">Gram Panchayat</a></li>
                                <li><a class="nav-link text-white" href="ab_login.php">AnganBadi Login</a></li>
                                <li><a class="nav-link text-white" href="admin_login.php">Admin Login</a></li>
                                <li><a class="nav-link text-white" href="users_login.php">User Login</a></li>
                               
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link text-white" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>