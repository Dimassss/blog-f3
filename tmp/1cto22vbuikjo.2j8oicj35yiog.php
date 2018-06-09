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
  <script>
    var json = JSON.parse("<?= ($info) ?>");
    alert(json);
  </script>
</head>
<body>
<?= ($info) ?>  <br>
hello
<?= ($m)."
" ?>
</body>
</html>
