<?php
require_once("conf.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="<?php echo JQ_DIR?>jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php echo JQ_DIR?>jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo D3?>"></script>
		<style>
			body { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}
			
			.box { font: 10px sans-serif;}
			
			.box line,
			.box rect,
			.box circle {
			  fill: #fff;
			  stroke: #000;
			  stroke-width: 1.5px;
			}
			
			.box .center {  stroke-dasharray: 3,3;}
			
			.box .outlier {
			  fill: none;
			  stroke: #ccc;
			}

		</style>
	</head>
	<body>
		
	</body>
</html>