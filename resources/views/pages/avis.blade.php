@extends('layouts/default')
@section('content')
<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
 <div class="container-fluid">
       <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Configuration de deplacement</h4>
                                <div class="bootstrap-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ouvrir formulaire @mdo</button>
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ACCES DES TRAVERSANTS</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                     @if($message = Session::get('success'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">{{ $message }}</button>
                                    <div class="alert alert-success">{{ $message }}
                                        <a href="#" class="alert-link"></a>..</div>
                                        

                                </div>

                                @endif


                                @if(count($errors) > 0)

                                <div class="alert alert-danger">
                                    validation Error <br><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>

                                        @endforeach
                                    </ul>
                                </div>
                                @elseif($message == 'Enregistrement réussi')
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <div class="alert alert-success">{{ $message }}
                                        <a href="#" class="alert-link"></a>..</div>

                                </div>
                                @endif
                                 </div>
                                <div class="modal-body">
                                   <form method="POST" action="{{ route('store_tag') }}">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" name="id" class="form-control input-default" placeholder="IDENTIFIANT">
                                        </div>
                            
                                        <div class="form-group">
                                           <select class="form-control form-control-lg" name="mvt">
                                                <option value="Entree">Selectionnez type des pieces</option>
                                                <option value="Carte l'electeur">Carte l'electeur</option>
                                                <option value="Passport">Passport</option>
                                                <option value="Pieces d'Identité">Pieces d'Identité</option>
                                               
                                            </select>
                                        </div>
                                         <div class="form-group">
                                           <select class="form-control form-control-lg" name="etat">
                                                <option value="Actif">Selectionnez Statut</option>
                                                <option value="Actif">Autoriser</option>
                                                <option value="Non actif">Non autoriser</option>
                                               
                                            </select>
                                        </div>
                              
                                       
                                    
                                                </div>
                                    <div class="modal-footer">
                                          <div class="card">
                                            <div class="card-body">
                               
                                                 <div class="card-content">
                                                     <div class="toastr m-t-15">
                                                         <div class="text-left">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                     <button type="submit" id="toastr-success-top-right" class="btn btn-success m-b-15 m-l-10">Modifier acces</button>
                                               </div>
                                                      </div>
                                                       </div>
                                                        </div>
                                                </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
 <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">LES IDENTITES </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>NOM</th>
                                                <th>POSTNOM</th>
                                                <th>PRENOM</th>
                                                <th>ID PIECE</th>
                                                <th>ID CARTE</th>
                                                <th>STATUT</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allCl as $item)
                                                <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nom }}</td>
                                                <td>{{ $item->postnom }}</td>
                                                <td>{{ $item->prenom }}</td>
                                                <td>{{ $item->id_pieces }}</td>
                                                <td>{{ $item->id_carte }}</td>
                                                <td>{{ $item->statut }}</td>
                                                <td>
                                                </td>
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
 </div>

<!-- #/ container -->
</div>
<!--**********************************
Content body end
***********************************-->

@endsection