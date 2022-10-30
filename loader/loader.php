<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./loader.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</head>
<body>
    
	<!-- Preloader -->
		<div id="preloader">
			<div id="container" class="container-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span preloader-text="G" class="characters">G</span>
						
						<span preloader-text="A" class="characters">A</span>
						
						<span preloader-text="L" class="characters">L</span>
						
						<span preloader-text="E" class="characters">E</span>
						
						<span preloader-text="R" class="characters">R</span>
						
						<span preloader-text="I" class="characters">I</span>
						
						<span preloader-text="E" class="characters">E</span>
            <span preloader-text="S" class="characters">S</span>
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>	

        <script>

$(document).ready(function() {
  setTimeout(function() {
    $('#container').addClass('loaded');
    // Once the container has finished, the scroll appears
    if ($('#container').hasClass('loaded')) {
      // It is so that once the container is gone, the entire preloader section is deleted
      $('#preloader').delay(1000).queue(function() {
        $(this).remove();
      });}
  }, 1000);});


        </script>



</body>
</html>