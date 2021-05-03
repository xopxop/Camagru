<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
	<li><a class="nav-link" href="<?php echo URLROOT; ?>">Home</a></li>
	<li><a class="nav-link" href="<?php echo URLROOT; ?>/home/about">About</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
	<?php if (isset($_SESSION['user_id'])) : ?>
	  <li><a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>
	<?php else : ?>
	  <li><a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a></li>
	  <li><a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a></li>
	<?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
