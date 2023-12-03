<?php require('partials/header.php') ?>
<?php include 'partials/nav.php'; ?>
<?php require('partials/banner.php') ?>

<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<?php foreach( $notes as $note ) : ?>
			<li><a href="/note?id=<?= $note['id'] ?>" class="text-blue-600 hover:underline"><?= $note['body'] ?></li></a>
		<?php endforeach; ?>
	</div>
</main>

<?php require('partials/footer.php') ?>