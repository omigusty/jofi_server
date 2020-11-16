<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/aos.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/pekerjaan.css">
</head>

<body>

    <?= $this->include('Components/jobs/NavbarJobs'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('Components/jobs/FooterJobs'); ?>

    <!-- Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
        });
    </script>
    <script src="js/script.js"></script>
</body>

</html>