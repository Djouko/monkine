<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
    <div id="wrapper">
        @include('admin.nav')

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Side</h2>
                            <div class="panel panel-default">
                                <div class="panel-heading">Annonces récentes</div>
                                <div class="panel-body">
                                    @foreach ($annonces->take(3) as $annonce)
                                        <h3>{{ $annonce->titre }}</h3><br>
                                        <p>  {!! nl2br(e(Str::limit($annonce->description, 10,' . . .voir plius'))) !!}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('admin.indexannonces') }}" class="btn btn-info btn-sm">Toutes les
                                        annonces</a>
                                </div><br><br>
                            </div>
                            <hr />
                            <div class="panel panel-default">
                                <div class="panel-heading">Catégories</div>
                                <div class="panel-body">
                                    @foreach ($categories->take(9) as $category)
                                        <a href="{{ route('admin.findByCategoty', ['category' => $category->id]) }}"
                                            class="btn btn-info">{{ $category->nom }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="panel-heading">
                        <h2 class="d-sm-flex align-items-center justify-content-between mb-4"><i
                            class="fa fa-bar-chart-o"></i> Liste des Annonces</h2>                    </div>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Voici une liste de toutes les annonces disponibles. Vous pouvez les modifier, les supprimer ou
                        en créer de nouvelles.
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($annonces as $annonce)
                                <tr>
                                    <td>{{ $annonce->titre }}</td>
                                    <td> {!! nl2br(e(Str::limit($annonce->description, 50,' . . .voir plius'))) !!}
                                    </td>
                                    <td>{{ $annonce->prix }} FCFA</td>
                                    <td>
                                        <a href="{{ route('annonces.edit', $annonce->id) }}"
                                            class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
</body>

</html>
