@extends('layout.tplAdmin')

@section('content')

<div class="card" style="margin-bottom:15px">
            <div class="card-header">
                <h5>
                    Liste des Dialectes
                    <span class="mx-3">
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-plus fa-sm fa-fw text-gray-400"></i>
                            Nouveau 
                        </a>
                    </span>
                </h5>
            </div>
            <div class="card-body table-responsive">
                    <!-- verification du nombre de categorie dans la base de données -->
                 {{-- @if($categorie->count() > 0) --}}
                    <!-- liste les enregistrements de la categorie dans une boucle -->
                        <table class='table table-striped'>
                            <thead>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                 {{-- @foreach($categorie as $cat) --}}
                                    <tr>
                                        <td>1
                                             {{-- {{ $n = $n + 1 }}  --}}
                                        </td>
                                        <td>
                                            Soussou
                                            {{--{{ $cat->nom }}  --}}
                                        </td>
                                        <td>
                                            <a href="#modifier" class="btn btn-success">
                                                <i class="fas fa-edit fa-cog"></i>
                                            </a>
                                            <a href="#supprimer" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2
                                             {{-- {{ $n = $n + 1 }}  --}}
                                        </td>
                                        <td>
                                            Poulard
                                            {{--{{ $cat->nom }}  --}}
                                        </td>
                                        <td>
                                            <a href="#modifier" class="btn btn-success">
                                                <i class="fas fa-edit fa-cog"></i>
                                            </a>
                                            <a href="#supprimer" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                 {{-- @endforeach --}}
                            </tbody>
                        </table>
                    <!-- fin de la liste des categorie -->
                {{-- @else --}}  
                  {{-- <span>Il y a {{$categorie->count()}} enregistrement(s) d'utilisateur </span> --}}
                 {{-- @endif --}} 
            </div>
        <!-- fin de la verification du nombre dans le Bd -->
    </div>
 
@endsection