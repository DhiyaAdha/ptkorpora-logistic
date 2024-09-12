<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start include meta -->
    <?= $this->include('includes/Landing/meta') ?>
    <!-- end include meta -->
    <title>Document</title>
    <!-- start include style -->
    <?= $this->include('includes/Landing/style') ?>
    <!-- end include style -->


</head>

<body>

    <!-- Start Navbar -->
    <!-- End Navbar -->

    <!-- start sweetalert -->
    <!-- | sweetalert -->
    <!-- end sweetalert -->


    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <?=  $this->include('Components/Landing/preloader'); ?> 
        <!-- end preloader -->

        <!-- Start header-navbar -->
            <?= $this->include('Components/Landing/navbar') ?>
        <!-- end of header-navbar -->

        <!-- start of home-content -->
        <?= $this->renderSection('content'); ?>
        <!-- end of home-content -->

        <!-- start site-footer -->
        <?= $this->include('includes/Landing/footer') ?>
        <!-- end site-footer -->


    </div>
    <!-- end of page-wrapper -->


    <!-- start include script -->
    <?= $this->include('includes/Landing/script') ?>
    <!-- end include script -->

</body>

</html>