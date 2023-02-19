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
			<form action="typeregiste" method="POST">
			@csrf

				<div class="modal-header">
 					<h4 class="modal-title">ajout Candidat</h4>
				</div>
                <div>

                    <div class="form-group">
						<label>libelle</label>
						<input type="text" class="form-control" name="libelle" required>
					</div>

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>











