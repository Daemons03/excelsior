<article id="formaccueil">
				<h2>Une question?</h2>
				<form name="Formulaire" method="POST" action="?page=envoimail">
					<input type="text" name="nom" id="nom" placeholder="Nom" required><br/>
					<input type="text" name="sujet" id="sujet" placeholder="Sujet" required><br/>
					<input type="email" name="email" id="email" placeholder="Email" required><br/>
					<textarea style="width: 300px; height: 100px;" name="message" minlength="50" maxlength="500" placeholder="Votre question, maximum 500 caractères."></textarea><br/>
					<input type="submit" value="Envoyer">
				</form>
				<article id="resultcontact"></article>
			</article>