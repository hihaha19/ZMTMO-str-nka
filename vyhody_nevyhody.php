<?php require_once('jazyky.php'); ?>
<!DOCTYPE html>
<html lang="SK-sk">
		<head>
				<?php include ("index2.php"); ?>
				<title><b><h1>Výhody a nevýhody</h1></b></title>
		</head>
	
		<body>
				
				<article id = "vyhody">
					<h2>Výhody:</h2>
						<ol>
							<li>Čítačka odtlačkov prstov</li>
							<li>Dobrý jas</li>
							<li>Podpora microSD kariet</li>
							<li>Optimalizácia</li>
							<li>Prehľadnosť a jednoduchosť</li>
							<li>Výborná sila signálu</li>
							<li>Hlasný reproduktor</li>
							<li>Výdrž batérie</li>
							<li>Bohaté nastavenia fotoaparátu</li>
						</ol>
				</article>
				
				<div class = "vyhody_obrazok">
				<div class = "animate-flicker">
					<img src="obrazky/vyhody_obrazok.jpg"  alt="vyhody_obrazok" width = "180">   
				</div>
				</div> 

				
				<article id = "nevyhody">
					<h2>Nevýhody:</h2>
						<ol>
							<li>Použitý plast na zadnej strane</li>
							<li>Nepresvedčivá kvalita zvuku</li>
							<li>Nižšia kvalita fotiek za zhoršených svetelných podmienok</li>
							<li>Pomalšia wifi</li>
						</ol>
				</article>

				<div class = "krizik">
				<div class = "animate-flicker">
					<img src="obrazky/xko.jpg" alt="krizik" width = "180">    
				</div>
				</div>
				
				<div class = "komentare">
				 <form action="" method="POST">

				   <label> Meno: 
					<input type="text" name="Name" class="Input" style="width: 225px" required>
				   </label>
				   <br><br>
				   <label> Komentár: <br>
					<textarea name="Comment" class="Input" style="width: 300px" required></textarea>
				   </label>
				   <br><br>
				   <input type="submit" name="Submit" value="Poslať" class="Submit">
				   </form>
				 </div>
				   
				   <?php include ("komentare.php"); ?>
	
		</body>
</html>