<!DOCTYPE html>
<html>
	<head>
		<title><?= $page->title()->html() ?>, <?= $site->title()->html() ?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://use.typekit.net/vez5lsq.css">
		<?= css('assets/css/styles.css') ?>
	</head>
	<body>
		<?= $page->title()->html() ?>
		<div>
			<p>Buttons</p>
			<button>label</button>
			<button class="error">error</button>
			<div class="error"><button>error in div</button></div>
			<button class="disabled">disabled</button>
			<div class="disabled"><button>disabled in div</button></div>
			<button disabled>disabled button</button>
		</div>
	</body>
</html>
