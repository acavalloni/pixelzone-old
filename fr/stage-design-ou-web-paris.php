<?php include('includes/head.php'); ?>

<body>
	<div id="container">
	
	<?php include('includes/header.php'); ?>
	
<!-- CONTENT
**************************** -->
		<div id="outer">
			<div id="content">
				<div id="message-internship" class="message">
					<h1>Le stagiaire parfait</h1>
					<h2>Raisons pour lesquelles je serais un excellent ajout à votre équipe</h2>
					<div class="break"></div>
					<div class="internship-list" id="technique">
						<span class="internship-list-title bold">Compétences techniques</span>
						<ul>
							<li>Compétent avec Adobe Creative Suite (j'utilise actuellement CS5)</li>
							<li>Formé à la gestion de projet</li>
							<li>Passionné par l'esthétique et l'expérience utilisateur</li>
							<li class="bold">Versatile (web + design)</li>
						</ul>
					</div>
					<div class="internship-list" id="people-skills">
						<span class="internship-list-title bold">Traits de personnalité</span>
						<ul>
							<li>Amical et enthousiaste</li>
							<li>Grandes facilités en relationnel (yep!) et en communication</li>
							<li>Attentif aux détails, méthodique</li>
							<li>Motivé, esprit d'initiative,</li>
							<li>A l'aise avec le multitâche</li>
						</ul>
					</div>
					<div class="clear"></div>
					<span class="when-where when">JUILLET 2012 POUR 6 MOIS</span>
					<span class="when-where"> PARIS, FRANCE </span>
					<!--<div id="internship-additional-info">
						<p>I wish to grow and learn through hands-on experience, gaining an understanding of what it is like to work in an agency and be part of a team of passionate experts.</p>
					</div>-->
				</div>
				<div class="dotted-vertical-border"></div>
				<div id="internship-form">
					<h2>Quelque chose pour moi?</h2>
					<form method="post" action="#" name="internship">
						<label for="select-place">Bonjour, &nbsp</label>
						<select name="select-place" id="select-place">
							<option disabled="disabled" value="">Pick one</option>
							<option disabled="disabled" value="">…</option>
							<option value="digital agency">une agence digital</option>
							<option value="company">une entreprise</option>
							<option value="(other)">autre</option>
						</select> <label for="place-name">appellée</label>
						<input name="place-name" type="text" id="place-name" class="internship-input" />.
						<label for="select-day">Nous aimerions vraiment vous avoir avec nous à partir du</label>
						<select name="select-day" id="select-day">
							<option disabled="disabled" value="">selectionnez un choix</option>
							<option disabled="disabled" value="">…</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option selected="selected" value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
						  	<option value="20">20</option>
						</select> juillet 2012.<br />
						<label for="position">Votre rôle sera </label>
						<input name="position" type="text" id="position" class="internship-input" />
						
						<label for="select-type-position" class="bold">Votre contrat:&nbsp</label> 	<select name="select-type-position" id="select-type-position">
							<option disabled="disabled" value="">selectionnez un choix</option>
							<option disabled="disabled" value="">…</option>
						 	<option value="Part-time">Plein-temps</option>
						  	<option value="Full-time">Mi-temps</option>
						</select>&nbsp
						<select name="select-salary" id="select-salary">
							<option disabled="disabled" value="">selectionnez un choix</option>
							<option disabled="disabled" value="">…</option>
						  	<option value="Paid">Payé</option>
						 	<option value="Unpaid">Non payé</option>
						</select><br />
						
						<label for="select-commitment" class="bold">Charge horaire:&nbsp</label>
						<select name="select-commitment"id="select-commitment">
							<option disabled="disabled" value="">selectionnez un choix</option>
							<option disabled="disabled" value="">…</option>
							<option value="10 to 20">10-20 heures/semaine</option>
							<option value="20 to 30">20-30 heures/semaine</option>
							<option value="30 to 40">30-40 heures/semaine</option>
							<option value="more than 40">plus</option>
						</select>
						<br />
						
						<label for="additional-q-r" class="bold">Questions: </label>
						<input name="additional-q-r" type="text" id="additional-q-r" class="internship-input" /><br />
						
						<label for="website-link" class="bold">Lien vers votre site: </label>
						<input name="website-link" type="text" id="website-link" class="internship-input" />
						
						<br />
						<input type="submit" name="submit" value="ENVOYER  >" class="internship-submit" />
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include('includes/footer.php'); ?>
	
</body>

</html>