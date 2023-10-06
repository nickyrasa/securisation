<head>
	<meta charset="utf-8" />
	<title>Formulaire</title>
</head>

<body>
	<form action="thanks.php" method="post">
		<div>
			<label for="nom">Nom :</label>
			<input type="text" id="nom" required name="user_name" />
		</div>
		<div>
			<label for="prenom">Prénom :</label>
			<input type="text" id="prenom" required name="user_prenom" />
		</div>
		<div>
			<label for="courriel">E-mail :</label>
			<input type="email" id="courriel" required name="user_email" />
		</div>
		<div>
			<label for="telephone">Téléphone :</label>
			<input type="number" id="telephone" required name="user_telephone" />
		</div>
		<div>
			<label for="sujet">Quel est le sujet de votre message ?</label>
			<select name="sujet" id="sujet" required>
				<option value="" disabled selected hidden>
					Choisissez le sujet de votre message
				</option>
				<option value="probleme-compte">
					Problème avec mon compte
				</option>
				<option value="question-produit">
					Question à propos d'un produit
				</option>
				<option value="suivi-commande">Suivi de ma commande</option>
				<option value="autre">Autre...</option>
			</select>
		</div>
		<div>
			<label for="message">Message :</label>
			<textarea id="message" required name="user_message"></textarea>
		</div>
		<div class="button">
			<button type="submit">Envoyer votre message</button>
		</div>
	</form>
</body>