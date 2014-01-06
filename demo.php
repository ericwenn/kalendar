<?php
	include('/home/u/u0056300/www/ericwenn/php/prehtml.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@ericwenn">
	<meta name="twitter:creator" content="@ericwenn">
	<meta name="twitter:title" content="kalendar, a customizable jquery plugin">
	<meta name="twitter:description" content="">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>kalendar, a demo</title>
	<link href="http://ericwenn.se/css/a.css" rel="stylesheet">
	<link href="http://ericwenn.se/_playground/released/kalendar/kalendar.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

</head>
<body class="playground">
<!-- WWW.ERICWENN.SE SPECIFIC -->
<?php
$loc = 'PLAYGROUND';
include('/home/u/u0056300/www/ericwenn/php/header.php');
?>
<!-- END WWW.ERICWENN.SE SPECIFIC -->
<main>



<div class="kalendar">
</div>




</main>


<!-- WWW.ERICWENN.SE SPECIFIC -->
<?php
	include('/home/u/u0056300/www/ericwenn/php/footer.php');
?>
<script src="http://ericwenn.se/js/a.js"></script>
<script src="http://ericwenn.se/_playground/released/kalendar/kalendar.js"></script>

<!-- END WWW.ERICWENN.SE SPECIFIC -->
<script>
$(document).ready(function() {
	$('.kalendar').kalendar({ 
		events: [
			{
				title:"Mulberry Festival",
				url: "http://www.google.se",
				start: {
					date: 20131215,
					time: "12.00"
				},
				end: {
					date: "20131216",
					time: "14.00"
				},
				location: "London",

			},
			{
				title:"Way Out West",
				start: {
					date: 20131230,
					time: "12.00"
				},
				end: {
					date: "20140106",
					time: "14.00"
				},
				location: "Gothenburg",

			}
		],
		color: "green",
		firstDayOfWeek: "Sunday"
	});

});
</script>
</body>

</html>