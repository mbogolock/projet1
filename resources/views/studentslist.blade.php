<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Liste des etudiants</h5>
        <p class="card-text">Vous pouvez rechercher toutes les informations d'un etudiant a partir de ce systeme</p>
    
    <div class="card">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>
                    
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit <i class="fa fa-trash"></i></a>
                    
                    <form action="{{ url('/destroy/'.$student->id) }}" method="post" class="d-inline" onsubmit="return confirm('voulez vous supprimer?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">Delete
                             <i class="fa fa-trash"></i>
                        </button>
                    </form>


                    {{--<a href="{{ url('/destroy/'.$student->id) }}" class="btn btn-sm btn-danger">DELETE</a>--}}
                                 
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

