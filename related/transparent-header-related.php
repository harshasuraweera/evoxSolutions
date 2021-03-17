<?php $page = basename($_SERVER['PHP_SELF']); ?>
<!-- =========================
        Header 
    =========================== -->
    <header class="header header-transparent">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

          <a class="navbar-brand" href="../index.php">
            <img src="../assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="../assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="../" class="nav__item-link">Home</a>
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="../about-us.php" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="../why-us.php" class="nav__item-link">Why Choose Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="leadership-team.php" class="nav__item-link">Leadership Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="../awards.php" class="nav__item-link">Award & Recognition</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="../pricing.php" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.php" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="../careers.php" class="nav__item-link">Careers</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Solutions</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="../trending/" class="nav__item-link dropdown-menu-title">Trending Solutions</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="../trending/web-design-and-development.php">Web Design & Development</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="../trending/seo-services.php">SEO Services</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="../trending/software-development.php">Software Development</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="../trending/it-consulting-and-suppport.php">IT Consulting & Support</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="../trending/mobile-app-development.php">Mobile App Development</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="../trending/site-speed-optimization.php">Site Speed Optimization</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="../related" class="nav__item-link dropdown-menu-title">Related Solutions</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" <?php if($page == 'social-media-marketing.php'){ echo 'id="thisSubPageIsActive"';}?>  href="social-media-marketing.php">Social Media Marketing</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" <?php if($page == 'graphic-design.php'){ echo 'id="thisSubPageIsActive"';}?>  href="graphic-design.php">Graphic Design</a>
                          </li> <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="../blog" class="nav__item-link">Blog</a>
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="../web-hosting" class="nav__item-link">Education Hosting</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="../tools" class="nav__item-link">Free Tools</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Marketplace</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="../courses" target = "_blank" class="nav__item-link">Online Courses</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="../products" class="nav__item-link">Digital Products</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="../contact-us.php" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
            <li class="d-none d-xl-block">
              <a href="../request-quote.php" class="btn action__btn-contact">Request A Quote</a>
            </li>
            <li>
              <button class="action__btn action__btn-login open-login-popup">
                <i class="icon-user"></i><span>Login</span>
              </button>
            </li>
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->