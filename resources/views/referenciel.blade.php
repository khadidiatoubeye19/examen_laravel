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
			<form action="referenciel" method="POST">
			@csrf

				<div class="modal-header">
 					<h4 class="modal-title">Ajouter Referenciel</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>libele</label>
						<input type="text" class="form-control" name="libelle" required>
					</div>
                    <div class="form-group">
						<label>Horaire</label>
						<input type="time" class="form-control" name="horaire" required>
					</div>

					<div class="form-group">
                        <label ></label>
                        <br>
                        <input type="radio" id="contactChoice1"
                        name="valider" value="1">
                        <label for="contactChoice1">valider</label>
					</div>
                    <div>
                        <label >type</label>
                        <select class="form-select" aria-label="Default select example"  name="type_id" required  class="form-control"> --}}
                            @foreach($type as $types)
                               <option value="{{$types->id}}">{{$types->libelle}} </option>
                       @endforeach
                    </select>
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










