<?php require('partials/header.php') ?>
<?php include 'partials/nav.php'; ?>
<?php require('partials/banner.php') ?>

<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<a href="/notes" class="text-blue-500 mb-4 inline-block">&#8592; Go back</a>
		<p><?= $note['body'] ?></p>
	</div>
</main>

<?php require('partials/footer.php') ?>