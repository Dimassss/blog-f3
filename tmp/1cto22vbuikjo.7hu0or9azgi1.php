<!doctype>
<html>
<head>
	<style type="text/css">
		td {
			background-color:#f1f1f1;
			color:#170;
			border: 10px solid black;
			padding: 20px;
		}
		h3{
			color:red;
		}
	</style>
</head>
<body>
<p><a href="/">Main Page </a><br><Br></p>
<div>
<p> Username - <?= ($username) ?></p>
<p> <a href="/user/<?= ($id) ?>/profile">Profile of user</a> </p>
<?php if($ownerMessageButton !== ''): ?> <p><i><?= ($ownerMessageButton) ?></i></p><?php endif ?>
</div>
<table>
<?php foreach (($blogs?:[]) as $blogs): ?>
	<tr>
		<td>
			<p>
				<b><?= ($username) ?></b> - <?= ($blogs['time']) ?> <?php if($ownerBlogButton !== ''): ?>- <i><?= ($ownerBlogButton) ?></i><?php endif ?>
				<h3><b><?= ($blogs['name']) ?></b></h3>
			</p>
			<p><?= ($blogs['body']) ?></p>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>
