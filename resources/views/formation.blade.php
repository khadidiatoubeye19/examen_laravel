
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
            @if($errors->any())

  <div class="alert alert-danger" role="alert">
     la date de debut ne peut pas anterieur
    </div>

@endif
			<form action="registerformation" method="POST">
			@csrf

				<div class="modal-header">
 					<h4 class="modal-title">ajout formation</h4>

				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="nom" required>
					</div>

					<div class="form-group">
						<label> description</label>
						<textarea class="form-control" name="description" required></textarea>
					</div>
					<div class="form-group">
						<label>Duree</label>
						<input type="number" class="form-control" name="duree" required>
					</div>

					<div class="form-group">

                        <input type="checkbox" id="contactChoice1"
                        name="isStarted" >

                       <label for="contactChoice1">En cours</label>
					</div>

                    <div class="form-group">
						<label>date debut</label>
						<input type="date" class="form-control"  name="date_debut" required>
					</div>
                    <div class="form-group">
                        <label for="">referenciel</label>
                    <select class="form-select" aria-label="Default select example"  name="Referenciel_id" required  class="form-control">
                        @foreach($referenciel as $ref)
                           <option value="{{$ref->id}}">{{$ref->libelle}} </option>
                   @endforeach
                </select>
            </div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Ajouter">
				</div>
			</form>
		</div>
	</div>
</div>


