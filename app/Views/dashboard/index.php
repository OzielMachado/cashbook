<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('dashboard') ?>

<div class="container">
    <div class="row pt-3">
        <div class="col-md-4 offset-4">
            <h4> <?= $title?> </h4>
            <hr>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            Name
                        </th>
                        <th scope="col">
                            Email
                        </th>
                        <th scope="col">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $userInfo['name'] ?>
                        </td>
                        <td>
                            <?= $userInfo['email'] ?>
                        </td>
                        <td>
                            <a href="<?= site_url('auth/logout') ?>">Log out</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>