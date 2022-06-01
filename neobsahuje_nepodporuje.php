 <?php require_once('jazyky.php'); ?>
 <!DOCTYPE html>
 <html lang="SK-sk">
 
		<head>
								 <?php include ("index2.php"); ?>
				<title><b><h1>Základné parametre</h1></b></title>
		</head>
	
		<body>

		
				<article id="neobsahuje">
					<h2>Tento mobil neobsahuje:</h2>
						<ul>
						
							<li><p>IrDA (infraport)</p></li>
						  
							<li><p>Zvýšená odoľnosť proti vode</p></li>
						  
							<li><p>Stereo repro</p></li>
		  
							<li><p>USV OTG</p></li>
						  
						</ul>   
				</article>

				<div class = "kontakt">					
					<h2>Kontakt na tvorcu stránky</h2>

					<form method="GET" action="mailto:test@example.com" enctype="text/plain">
				<div>Predmet</div>
					<input type="text" name="predmet" />

				<div>Meno</div>
					<input name="meno" />

				<div>E-Mail</div>
					<input name="E-Mail Address" />

				<div>Správa</div>
					<textarea name="sprava"></textarea>

				<br/>
				
					<input type="submit" value="Poslať" />

					<input type="hidden" name="body" />
					
					</form>
				</div>
				
				<div class="druhy_gif">
					<img class="animated-gif" src="Gify/gif_2.gif" alt="gif2">
				</div>		
				
			
			<footer><strong>Copyright© Michaela Hanková</strong></footer>
			
		</body>
</html>
