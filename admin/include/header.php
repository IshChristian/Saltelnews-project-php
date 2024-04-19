<div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><h5 class="mb-0 font-weight-normal">Dashboard</h5></a>
          <!-- <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $_SESSION["idd"] ?></h5>
                  <span>Gold Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                
                <div class="dropdown-divider"></div>
                <a href="passwordChange.php" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="addCategory.php">
              <span class="menu-icon">
                <i class="mdi mdi-plus"></i>
              </span>
              <span class="menu-title">Add Category</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="addMember.php">
              <span class="menu-icon">
                <i class="mdi mdi-plus"></i>
              </span>
              <span class="menu-title">Add Member</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="addNews.php">
              <span class="menu-icon">
                <i class="mdi mdi-plus"></i>
              </span>
              <span class="menu-title">Add News</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="addAnnocement.php">
              <span class="menu-icon">
                <i class="mdi mdi-plus"></i>
              </span>
              <span class="menu-title">Add Annocement</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="feedback.php">
              <span class="menu-icon">
                <i class="mdi mdi-message"></i>
              </span>
              <span class="menu-title">View Feedback</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="reqAdverstising.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Adverstising Request</span>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="report.php">
              <span class="menu-icon">
                <i class="mdi mdi-print"></i>
              </span>
              <span class="menu-title">Report</span>
            </a>
          </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="logout.php">
              <span class="menu-icon">
                <i class="mdi mdi-logout"></i>
              </span>
              <span class="menu-title">Logout</span>
            </a>
          </li>
          
        </ul>
      </nav>