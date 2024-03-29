@include('welcome')
<link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

<body background="black">
    @if(session('message'))
    <div class="alert alert-success"><h3>{{(session('message'))}}</h3></div>
    @endif

<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                   <center> <h2>liste <b>Candidat</b></h2></center>

				</div>

			</div>
                </div>
                <div class="card-body">
                    <br> <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>prenom</th>
                                    <th>age</th>
                                    <th>niveau</th>
                                    <th>sexe</th>
                                    <th>Actions</th>


        </tr>
    </thead>
    <tbody >
        <tr>
            @foreach ($candidats as $candidat)
         {{-- @foreach ($candidat as$candidat) --}}
            <td>
                <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                </span>
            </td>
            <td>{{$candidat->id}}</td>
            <td>{{$candidat->nom}}</td>
            <td>{{$candidat->prenom}}</td>
            <td>{{$candidat->age}}</td>
            <td>{{$candidat->niveauEtude}}</td>
            <td>{{$candidat->sexe}}</td>


            <td> @include('modal.choixformation')</td>

            <td>
               

    <input type="hidden" value="{{$candidat->id}}" name="idcan">

    <a href="#" class="btn btn-danger" class="choixformation" data-toggle="modal" data-target="#choix{{$candidat->id}}">choisir formation</a>


                <form action="/supprimercan"method="POST">
            @csrf

           <input type="hidden" value="{{$candidat->id }}" name="idcan">
           <td>
                <button  name="delete"class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
            </td></td>
          </form>


        </tr>
        @endforeach
    </tbody>

</table>
</body>
