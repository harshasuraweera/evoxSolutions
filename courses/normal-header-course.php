<?php $page = basename($_SERVER['PHP_SELF']); ?>

<!-- =========================
        Header 
    =========================== -->
    <header class="header header-light">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

          <a class="navbar-brand" href="index.html">
            <img src="../assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="../assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="index.html" class="nav__item-link">Home</a>
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="why-us.html" class="nav__item-link">Why Choose Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="leadership-team.html" class="nav__item-link">Leadership Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="awards.html" class="nav__item-link">Award & Recognition</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="careers.html" class="nav__item-link">Careers</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Solutions</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="it-solutions.html" class="nav__item-link dropdown-menu-title">Trending Solutions</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="web-design-and-development.html">Web Design & Development</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="seo-services.html">SEO Services</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="software-development.html">Software Development</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-consulting-and-suppport.html">IT Consulting & Support</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="mobile-app-development.html">Mobile App Development</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="site-speed-optimization.html">Site Speed Optimization</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="industries.html" class="nav__item-link dropdown-menu-title">Related Solutions</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link"
                            href="social-media-marketing.html">Social Media Marketing</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                            href="graphic-design.html">Graphic Design</a>
                        </li> <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="blog.html" class="nav__item-link">Blog</a>
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="404.html" class="nav__item-link">Education Hosting</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="404.html" class="nav__item-link">Free Tools</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Marketplace</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="../web-hosting/" target = "_blank" id="thisSubPageIsActive" class="nav__item-link">Online Courses</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="../tools/" class="nav__item-link">Digital Products</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="../contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
            <li class="d-none d-xl-block">
              <a href="../request-quote.html" class="btn action__btn-contact">Request A Quote</a>
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