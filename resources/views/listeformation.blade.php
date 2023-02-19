@include('welcome')
<link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
<body background="black">
    @if(session('message'))
    <div class="alert alert-success"><h3>{{(session('message'))}}</h3></div>
    @endif

<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                   <center> <h2>liste <b>Formation</b></h2></center>

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
                                    <th>Description</th>
                                    <th>Date de debut</th>
                                    <th>Referenciel</th>
                                    <th>Actions</th>


        </tr>
    </thead>
    <tbody >
        <tr>
        @foreach ($formation as $m)
            <td>
                <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                </span>
            </td>
            <td>{{$m->id}}</td>
            <td>{{$m->nom}}</td>
            <td>{{$m->description}}</td>
            <td>{{$m->date_debut}}</td>
            {{-- <td>{{$formation->referenciel->libelle}}</td> --}}
            @foreach ( $referenciel as $ref )
            @if($ref->id==$m->Referenciel_id)
            <td>{{$ref->libelle}}</td>
            @endif
            @endforeach

            <td>

            <input type="hidden" value="{{ $m->id }}" name="id">

                <form action="/supprimerforma"method="POST">
            @csrf

           <input type="hidden" value="{{ $m->id }}" name="idformation">
           <td>
                <button  name="delete"class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
            </td></td>
          </form>


        </tr>
        @endforeach
    </tbody>

</table>
</body>
