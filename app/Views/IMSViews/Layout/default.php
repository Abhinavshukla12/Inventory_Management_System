<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>Inventary-management-system</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootswatch CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/flatly/bootstrap.min.css" integrity="sha512-qoT4KwnRpAQ9uczPsw7GunsNmhRnYwSlE2KRCUPRQHSkDuLulCtDXuC2P/P6oqr3M5hoGagUG9pgHDPkD2zCDA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--custom css-->
    <link rel="stylesheet" href="<?=base_url('assets/css/feature/main.css')?>">
    <!-- Load custom CSS -->
    <?php
    if (isset($css)) {
        foreach ($css as $style):
            echo '<link href="' . base_url('' . $style) . '" rel="stylesheet">';
        endforeach;
    }
    ?>
</head>

<body>

<!-- navbar start here -->
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url('IMS/home')?>">IMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?=base_url('IMS/home')?>">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('IMS/feature')?>">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('IMS/pricing')?>">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('IMS/about')?>">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?=base_url('IMS/profile')?>">Your Profile</a>
            <a class="dropdown-item" href="<?=base_url('IMS/login')?>">Login</a>
            <a class="dropdown-item" href="<?=base_url('IMS/change_password')?>">Change password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=base_url('IMS/logout')?>">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar end here -->

<!-- the main content goes here -->
<div class="container mt-2 content-area">
  <?= $this->renderSection('content') ?>
</div>
<!-- the main content end here -->

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


<script type="text/javascript">
    $.ajaxPrefilter(function (options, originalData, xhr) {
      var data = "<?php echo  csrf_token(). '=' . csrf_hash(); ?>" + "&random=" + Math.random();
        if (options.data) {
          options.data += "&" + data;
        } else {
           options.data = data;
        }
    });
</script>

<!-- Load custom JS -->
<?php
if (isset($js)) {
  foreach ($js as $script):
    echo '<script src="' . base_url('' . $script) . '"></script>';
      endforeach;
}
?>

</body>
</html>