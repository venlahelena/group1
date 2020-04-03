<html>
    <head>
        <title>DiscoverCommerce</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
        <link rel="stylesheet"href="<?php echo base_url(); ?>/assets/css/style.css">
    </head>
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <h1 class="navbar-brand">Discover Commerce</h1>
               <div class="shopping-cart">
                <a href="#">Shopping cart</a>
               </div>
            </nav>
        </header>
    </nav>

    <div class="container">

    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>