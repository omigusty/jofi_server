<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/post_pekerjaan.css">
</head>

<body>
    <?= $this->renderSection('content'); ?>
    <!-- Javascript -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
    <script>
    function previewImg(){
        const sampul = document.querySelector('#logoBrand')
        const imgPreview = document.querySelector('.img-preview')

        const fileSampul = new FileReader()
        fileSampul.readAsDataURL(sampul.files[0])

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    </script>
</body>

</html>