
<div id="choix{{$m['id']}}" class="modal fade">

    <form action="validechoix" method="POST">
        @csrf
<input type="hidden"name="Candidat_id" value="{{$m['id']}}">
    <div class="container mt-5">
        <div class="card m-1 p-2 text-center">
            <div class="card-head h4 bg-primary p-2">
                <div class="text-center ">Ajouter une nouvelle formation </div>
            </div>
            <div class="card-body">
                <div class="row col-md-12 mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Prenom    :</label>
                    <label for="" class="col-md-7 h5 ">{{$m['prenom']}}</label>
                </div>
                <div class="row col-md-12 mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Email   :</label>
                    <p class="col-md-8 h5">{{$m['email']}}</p>
                </div>
                <div class="row col-md-12 mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">age:</label>
                    <label for="" class="col-md-7 h5 ">{{$m['age']}}</label>
                </div>
                <div class="row col-md-12 mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Niveau   :</label>
                    <label for="" class="col-md-8 h5 ">{{$m['niveauEtude']}}</label>
                </div>
             <div class="row col-md-12 mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">sexe   :</label>
                    <label for="" class="col-md-7 h5 ">{{$m['sexe']}}</label>
                </div>
                <div class="row col-md-12 mt-3">
                    <select class="form-select" aria-label="Default select example"  name="Formation_id" required  class="form-control"> --}}
						 @foreach($formation as $form)
				            <option value="{{$form->id}}">{{$form->nom}} </option>
					@endforeach
                 </select>

</div>
<button type="submit" class="btn btn-danger">ajouter</button>

       </form>
                <div class="row col-md-12 mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Formation suivi   :</label>
                @foreach ($formation as $form)
                <label >{{$form->nom}}</label>

                     @endforeach

                </div>
            </div>
        </div>

    </div>



</div>

