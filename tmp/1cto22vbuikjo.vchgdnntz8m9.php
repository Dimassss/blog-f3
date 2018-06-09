<!--<p>ID of user is <?= ($id) ?></p>
<p>He is at <?= ($message) ?> message's port</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function write(){
	$.get( "/getMessage", function( data ) {
		alert( "Data Loaded: " + data );
	});
}
</script>-->
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
<table>
<?php foreach (($blogs?:[]) as $blogs): ?>
	<tr>
		<td>
			<p>
				<a href="/user/<?= ($blogs['owner']) ?>/"><?= ($users->getById($blogs['owner'])[0]->username) ?></a> - <?= ($blogs['time'])."
" ?>
				<h3><b><?= ($blogs['name']) ?></b></h3>
			</p>
			<p><?= ($blogs['body']) ?></p>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>
