<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/dropzone/dist/'); ?>dropzone.css">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Ujicoba Dropzone</h1>

    <form action="<?= base_url('banding/upload/tes') ?>" class="dropzone" id="fileupload">

    </form>





    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- dropzone cs -->
    <script src="<?= base_url('assets/dropzone/dist/'); ?>dropzone.js"></script>

    <script>
        // Add restrictions
        Dropzone.options.fileupload = {
            acceptedFiles: 'image/*',
            maxFilesize: 5 // MB
        };
    </script>

</body>

</html>