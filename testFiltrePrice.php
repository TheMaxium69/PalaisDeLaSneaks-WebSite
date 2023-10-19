<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>range</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="range.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/fd9dba5260.js"></script>
	<script src="range.js"></script>

    <style> 
    /**********************************************************GENERAL***************************************************************************/
body { 
	font-family: 'Ubuntu', sans-serif;
	font-weight: bold;
}

.slider-selection {
	background: #f77500 !important;
}
.slider-success .slider-selection {
	background-color: #5cb85c !important;
}
.slider-primary .slider-selection {
	background-color: #428bca !important;
}
.slider-info .slider-selection {
	background-color: #5bc0de !important;
}
.slider-warning .slider-selection {
	background-color: #f0ad4e !important;
}
.slider-danger .slider-selection {
	background-color: #d9534f !important;
}
.slider.slider-horizontal {
    width: 100% !important;
    height: 20px;
}
.slider-handle {
	background-color: #fff !important;
	background-image: none !important;
	-webkit-box-shadow: 1px 1px 24px -2px rgba(0,0,0,0.75) !important;
	-moz-box-shadow: 1px 1px 24px -2px rgba(0,0,0,0.75) !important;
	box-shadow: 1px 1px 24px -2px rgba(0,0,0,0.75) !important;
}

.slider-strips .slider-selection {
	background-image: repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important;
	background-image: -ms-repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important;
	background-image: -o-repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important;
	background-image: -webkit-repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important; 
}
.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #bdbdbd !important;
    text-align: center;
    background-color: transparent !important;
    border-radius: 4px;
}
.tooltip.top .tooltip-arrow {
    display: none !important;
}
.slider .tooltip.top {
    margin-top: -25px !important;
}
.well {
	background: transparent !important;
	border: none !important;
	box-shadow: none !important;
	width: 100% !important;
	padding: 0;
}
.slider-ghost .slider-track {
	height: 5px !important;
}
.slider-ghost .slider-handle {
	top: -2px !important;
	border: 5px solid #f77500;
}
.slider-success.slider-ghost .slider-handle {
	border-color: #5cb85c;
}
.slider-primary.slider-ghost .slider-handle {
	border-color: #428bca;
}
.slider-info.slider-ghost .slider-handle {
	border-color: #5bc0de;
}
.slider-warning.slider-ghost .slider-handle {
	border-color: #f0ad4e;
}
.slider-danger.slider-ghost .slider-handle {
	border-color: #d9534f;
}

    </style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-top: 50px;">
			<div class="slider-wrapper">
				<input class="input-range"  data-slider-id='ex12cSlider' type="text" data-slider-step="1" data-slider-value="50, 60" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
			</div>
		</div>
	</div>
</div>

<script>
    (function( $ ){
$( document ).ready( function() {
	$( '.input-range').each(function(){
		var value = $(this).attr('data-slider-value');
		var separator = value.indexOf(',');
		if( separator !== -1 ){
			value = value.split(',');
			value.forEach(function(item, i, arr) {
				arr[ i ] = parseFloat( item );
			});
		} else {
			value = parseFloat( value );
		}
		$( this ).slider({
			formatter: function(value) {
				console.log(value);
				return '$' + value;
			},
			min: parseFloat( $( this ).attr('data-slider-min') ),
			max: parseFloat( $( this ).attr('data-slider-max') ), 
			range: $( this ).attr('data-slider-range'),
			value: value,
			tooltip_split: $( this ).attr('data-slider-tooltip_split'),
			tooltip: $( this ).attr('data-slider-tooltip')
		});
	});
	
 } );
} )( jQuery );
    </script>
</body>
</html>