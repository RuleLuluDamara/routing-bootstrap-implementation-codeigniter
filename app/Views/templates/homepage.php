<!-- app/Views/templates/homepage.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Homepage</title>
    <!-- Include any necessary CSS or meta tags -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link href="<?= base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <link rel="stylesheet" href="css/style.css" />

    <div>
        <link href="./style.css" rel="stylesheet" />

        <div class="container fluid">
            <div class="homepage-homepage">

                <?= $this->include('templates/navbar'); ?>
                <?= $this->renderSection('content'); ?>
                <?= $this->include('templates/footer'); ?>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>