<?php include('includes/head.php'); ?>

<body>
	<div id="container">
	
	<?php include('includes/header.php'); ?>
	
<!-- CONTENT
**************************** -->
		<div id="outer">
			<div id="content">
				<div id="message-internship" class="message">
					<h1>The perfect intern</h1>
					<h2>Reasons why I'd be a great addition to your team</h2>
					<div class="break"></div>
					<div class="internship-list" id="technique">
						<span class="internship-list-title bold">Technical strengths</span>
						<ul>
							<li>Proficient with Adobe Creative Suite (currently using CS5)</li>
							<li>Focused on usability & readability</li>
							<li>Familiar with project management</li>
							<li>Passionate about design aesthetic & user experience</li>
							<li class="bold">Versatile (web + design)</li>
						</ul>
					</div>
					<div class="internship-list" id="people-skills">
						<span class="internship-list-title bold">Personality traits</span>
						<ul>
							<li>Outgoing, friendly and enthusiastic</li>
							<li>Great interpersonal (yup!) and communication skills</li>
							<li>Attentive to detail, methodical</li>
							<li>Motivated self-starter, fast learner</li>
							<li>Ability to multitask and be efficient</li>
							<li class="bold">Creative, outside-the-box thinker</li>
						</ul>
					</div>
					<div class="clear"></div>
					<span class="when-where when">JULY 2012 FOR 6 MONTHS</span>
					<span class="when-where"> PARIS, FRANCE </span>
					<!--<div id="internship-additional-info">
						<p>I wish to grow and learn through hands-on experience, gaining an understanding of what it is like to work in an agency and be part of a team of passionate experts.</p>
					</div>-->
				</div>
				<div class="dotted-vertical-border"></div>
				<div id="internship-form">
					<h2>Got something for me?</h2>
					<form method="post" action="#" name="internship">
						<label for="select-place">Hello, we are&nbsp</label>
						<select name="select-place" id="select-place">
							<option disabled="disabled" value="">Pick one</option>
							<option disabled="disabled" value="">…</option>
							<option value="digital agency">a digital agency</option>
							<option value="company">a company</option>
							<option value="non-profit organization">a non profit-organization</option>
							<option value="(other)">other</option>
						</select> <label for="place-name">called </label>
						<input name="place-name" type="text" id="place-name" class="internship-input" />.
						<label for="select-day">We're interested in having you work with us as an intern for six months starting July </label>
						<select name="select-day" id="select-day">
							<option disabled="disabled" value="">Pick one</option>
							<option disabled="disabled" value="">…</option>
							<option value="10">10th</option>
							<option value="11">11th</option>
							<option value="12">12th</option>
							<option value="13">13th</option>
							<option value="14">14th</option>
							<option value="15">15th</option>
							<option selected="selected" value="16">16th</option>
							<option value="17">17th</option>
							<option value="18">18th</option>
							<option value="19">19th</option>
						  	<option value="20">20th</option>
						</select>, 2012.<br />
						<label for="position">You'll be doing </label>
						<input name="position" type="text" id="position" class="internship-input" />
						
						<label for="select-type-position" class="bold">Type of position:&nbsp</label> 	<select name="select-type-position" id="select-type-position">
							<option disabled="disabled" value="">Pick one</option>
							<option disabled="disabled" value="">…</option>
						 	<option value="Part-time">Part-time</option>
						  	<option value="Full-time">Full-time</option>
						</select>&nbsp
						<select name="select-salary" id="select-salary">
							<option disabled="disabled" value="">Pick one</option>
							<option disabled="disabled" value="">…</option>
						  	<option value="Paid">Paid</option>
						 	<option value="Unpaid">Unpaid</option>
						</select><br />
						
						<label for="select-commitment" class="bold">Commitment:&nbsp</label>
						<select name="select-commitment"id="select-commitment">
							<option disabled="disabled" value="">Pick one</option>
							<option disabled="disabled" value="">…</option>
							<option value="10 to 20">10-20 hours/week</option>
							<option value="20 to 30">20-30 hours/week</option>
							<option value="30 to 40">30-40 hours/week</option>
							<option value="more than 40">more</option>
						</select>
						<br />
						
						<label for="additional-q-r" class="bold">Questions/Requirements: </label>
						<input name="additional-q-r" type="text" id="additional-q-r" class="internship-input" /><br />
						
						<label for="website-link" class="bold">Link to our website: </label>
						<input name="website-link" type="text" id="website-link" class="internship-input" />
						
						<br />
						<input type="submit" name="submit" value="SEND IT  >" class="internship-submit" />
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include('includes/footer.php'); ?>
	
</body>

</html>