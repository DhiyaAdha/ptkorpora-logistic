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
    <!-- start include script -->
    <?= $this->include('includes/Landing/script') ?>
    <!-- end include script -->

</head>

<body>

    <!-- Start Navbar -->
    <!-- End Navbar -->

    <!-- start sweetalert -->
    <?= $this->include('includes/alerts/sweetalert') ?>
    <!-- end sweetalert -->

    <?= $this->renderSection('content') ?>

    <?= $this->include('includes/landing/footer') ?>

</body>

</html>