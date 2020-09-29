@extends('layouts.default')
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
<!-- row -->

<div class="container-fluid">
    <!-- row -->
    <div class="row">
          <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mouvements</h4>
                                <div class="bootstrap-modal">
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Recherche sur les mouvements</button>
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tous les mouvements</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                     <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Les mouvements journaliers</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Prenom</th>
                                                <th>Telephone</th>
                                                <th>ID Piece</th>
                                                <th>Ref ID</th>
                                                <th>Type de piece</th>
                                                <th>Mouvement</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all as $item)
                                                <tr>
                                                <td>{{ $item->prenom }}</td>
                                                <td>{{ $item->telephone }}</td>
                                                <td>{{ $item->pieces }}</td>
                                                <td>{{ $item->nfc }}</td>
                                                <td>{{ $item->type_pieces }}</td>
                                                <td>{{ $item->type_mvt }}</td>
                                                <td>{{ $item->created_at }}</td>
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
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Total des mouvements</button>
                                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Total des mouvements</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <h6>TOTAL  : <strong>{{ $nb }} traversant</strong> <br><br>
                                                ENTREES : {{ $allENTRER }} traversant<br><br>
                                                SORTIES : {{ $allSortie }} traversant
                                                </h6>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </div>
        
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste des access a la frontiere</h4>
                    <div class="basic-list-group">
                        <ul class="list-group">
                            @foreach ($allAcces as $item)
                        <li class="list-group-item">{{ $item->username}} pour {{ $item->tag}} et statut est {{ $item->etat }}</li>  
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  
<!-- #/ container -->
</div>
</div>

@endsection