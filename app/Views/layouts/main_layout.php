<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Book</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
</head>
<body>

    <?= $this->renderSection('conteudo') ?>

    <hr>
    <footer class="container">
        <div class="row">
            <div class="col text-center">
                Cash book &copy; <?= date('Y') ?>
            </div>
        </div>
    </footer>
    
    <script src="<?= base_url('assets/bootstrap.bundle.min.css') ?>"></script>
</body>
</html>