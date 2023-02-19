@include('welcome')
<link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
<body background="black">
    @if(session('message'))
    <div class="alert alert-success"><h3>{{(session('message'))}}</h3></div>
    @endif

<div class="container">
    <div class="row" style="margin:15px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                   <center> <h2>Liste <b>Referenciel</b></h2></center>

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
                                    <th>libelle</th>
                                    <th>horaire</th>
                                    <th>type</th>
                                    <th>Actions</th>


        </tr>
    </thead>
    <tbody >
        <tr>
        @foreach ($referenciel as $m)
            <td>
                <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                </span>
            </td>
            <td>{{$m->id}}</td>
            <td>{{$m->libelle}}</td>
            <td>{{$m->horaire}}</td>
            @foreach ($type  as $typ )
            @if ($typ->id==$m->type_id)
            <td>{{$typ->libelle}}</td>
            @endif
            @endforeach

            <td>
                <form action="/supprimerref"method="POST">
            @csrf

           <input type="hidden" value="{{ $m->id }}" name="idreferenciel">

                <button  name="delete"class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
           </td>
          </form>


        </tr>
        @endforeach
    </tbody>

</table>
</body>
