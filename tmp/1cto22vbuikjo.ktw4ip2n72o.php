<!doctype>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
		function write(json){
			$.post( "test/e", { info: JSON.stringify(json) })
		  .done(function( data ) {
		    alert( "Data Loaded: " + data );
		  });
		}
	</script>
</head>
<body>
	<?= ($json)."
" ?>
</body>
</html>
