<?php if (isset($_SESSION['at'])){ ?>
    <div class="alert alert-<?= $_SESSION['at'] ?> alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong><?= $_SESSION['am'] ?></strong>
    </div>

<?php }; unset($_SESSION['at']); unset($_SESSION['am']);  ?>

<?php if (isset($_SESSION['sat'])) : ?>
<div class="alert alert-<?= $_SESSION['sat'] ?> alert-dismissible fade show p-1" role="alert">
      <strong>Opps!</strong> <?= $_SESSION['sam'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; unset($_SESSION['sat']);unset($_SESSION['sam']) ?>
