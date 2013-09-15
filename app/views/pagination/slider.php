<?php
$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
<div>
<ul class="pagination pagination-sm text-center">
<?php echo $presenter->render(); ?>
</ul>
</div>
<?php endif; ?>