<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

@include('welcome')


	<div class="modal-dialog">
		<div class="modal-content">
			<form action="registercandidat" method="POST">
			@csrf

				<div class="modal-header">
 					<h4 class="modal-title">ajout Candidat</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Non</label>
						<input type="text" class="form-control" name="nom" required>
					</div>
                    <div class="form-group">
						<label>Prenon</label>
						<input type="text" class="form-control" name="prenom" required>
					</div>

                    <div class="form-group">
						<label>Niveau  d'etude</label>
						<input type="text" class="form-control" name="niveauEtude" required>
					</div>
                    <div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" required>
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="number" class="form-control" name="age" required>
					</div>

					<div class="form-group">
                        <label >Sexe</label>
                        <br>
                        <input type="radio" id="contactChoice1"
                        name="sexe" value="male">
                        <label for="contactChoice1">Homme</label>

                        <input type="radio" id="contactChoice1"
                        name="sexe" value="femelle">
                       <label for="contactChoice1">Femme</label>



					</div>
                    <div class="form-group">
						<label>date debut</label>
						<input type="date" class="form-control"  name="date_debut" required>
					</div>


				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>










