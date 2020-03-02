<header class="clearfix">
    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
    <?php if (isset($_SESSION['username'])): ?>
      <ul>
        <li><a href="../../index.php">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    <?php endif; ?>
    </nav>
  </header>