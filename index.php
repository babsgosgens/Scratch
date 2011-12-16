<?php
	$columns = 35;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8" />
	<title>Scratch Grid</title>
	<meta name="generator" content="BBEdit 10.1" />
	<link href="scratch/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>

<header><##></header>

<div role="main" class="block">
	<section class="group">
		<article class="stretch-6 right-1"><##></article>
		<article class="stretch-6 left-1">Donec et neque et nulla mollis gravida. Proin tempor turpis in urna facilisis euismod. Ut dictum nulla nec diam ultricies eu aliquam elit feugiat.</article>
	</section>
	<section class="group left-2">
		<article class="stretch-6 right-1">Etiam vestibulum semper adipiscing. In eget nibh mi. Sed ipsum eros, bibendum sit amet mollis placerat, rhoncus ac nibh. Nulla elementum molestie massa, sed posuere neque accumsan a. Donec et neque et nulla mollis gravida. Proin tempor turpis in urna facilisis euismod. Ut dictum nulla nec diam ultricies eu aliquam elit feugiat.</article>
		<article class="stretch-6 left-1"><##></article>
		<aside class="stretch-2 left-3"><##></aside>
	</section>
</div>

<nav role="navigation">
	<ul class="block">
	<li>Why are we so wide?</li>
	<li><##></li>
	<li><##></li>
	</ul>
</nav>

<div class="block">
	<section class="group">
		<article class="stretch-6 right-1"><##></article>
		<article class="stretch-6 left-1">Donec et neque et nulla mollis gravida. Proin tempor turpis in urna facilisis euismod. Ut dictum nulla nec diam ultricies eu aliquam elit feugiat.</article>
		<article class="stretch-6 left-2 right-1"><##></article>
		<article class="stretch-6 left-1"><##></article>
	</section>
	<aside class="stretch-2 left-3"><##></aside>
</div>

<div class="block">
	<section class="group left-8">
		<article class="stretch-6 right-1"><##></article>
		<article class="stretch-14 left-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris suscipit mattis ligula sit amet imperdiet. Sed auctor aliquam tempor. Etiam gravida suscipit dignissim. Phasellus rhoncus felis neque, a pretium dolor. Sed ut mi in mi laoreet imperdiet. Vivamus nec orci in ipsum molestie commodo a in augue. Cras libero arcu, mattis vel sagittis auctor, tristique in tortor. Integer vitae tristique nulla. Cras scelerisque lorem at massa ultricies vel aliquam nibh interdum. Sed pellentesque accumsan fermentum.</article>
	</section>
</div>

<div class="block">
	<?php $c=1; for($i=$columns;$i>0;$i--): ?>
	<div class="stretch-1 <?php echo $i%2 ? 'odd' : 'even' ?>"><?php echo $c ?></div>
	<?php $c++;endfor; ?>
</div>

</body>
</html>
