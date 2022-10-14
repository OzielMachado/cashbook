<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('moviments') ?>

<div class="container">
    <div class="row">
        <div class="col p-3">
            <h3>Cash book</h3>
        </div>
        <div class="col text-right p-3">
            <a href="<?= site_url('main/newMoviment') ?>" class="btn btn-primary">Add</a>
        </div>
    </div>
</div>
<hr>

<?php if(count($moviments) == 0):?>

<p class="text-center">Não existem movimentos.</p>

<?php else:?>

<table class="table table-striped table-sm">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Date</th>
            <th>Value</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($moviments as $moviment): ?>
            <tr>
                <td><?= $moviment->id ?></td>
                <td><?= $moviment->description ?></td>
                <td><?= $moviment->date ?></td>
                <td><?= $moviment->value ?></td>
                <td><?= $moviment->type ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p>N.º de Movimentos: <strong><?= count($moviments) ?></strong></p>  

<?php endif;?>

<?= $this->endSection() ?>
