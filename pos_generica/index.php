<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Just a Landing Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

	<div class="body_div">
		<div class="top_row">
			<div class="top_left">
				<div class="col_left">
					<div class="col_left_top">
						esquerdo topo
					</div>

					<div class="col_left_bottom">
						esquerdo rodapé
					</div>
				</div>
			</div>

			<div class="top_right">

				<div class="form_container">
					<div class="form_top">
						<div class="form_top_left"></div>
						<div class="form_top_center">Um texto para o Topo do Form</div>
						<div class="form_top_right"></div>
					</div>
					<div class="form_body">
						<?php
						$counter=0;
						while( $counter < 50){
						echo "Eu sou o corpo do form<br>";
						$counter++;
					    }

						?>
					</div>
				</div>

			</div>
		</div>

		<div class="bottom_row">
			<div class="bottom_left">
				<div class="logo_bottom_left">
					sou o logo do rodapé esquerdo
				</div>
			</div>

			<div class="bottom_right">
				<div class="logo_bottom_right">
					sou o logo do rodapé direito
				</div>
			</div>
		</div>
	</div>

</body>

</html>