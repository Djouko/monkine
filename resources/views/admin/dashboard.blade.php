<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
    <div id="wrapper">
        @include('admin.nav')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-heading">
                        <h2 class="d-sm-flex align-items-center justify-content-between mb-4"><i
                                class="fa fa-bar-chart-o"></i> Liste des catégories</h2>
                    </div>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Voici une liste de toutes les catégories disponibles. Vous pouvez les modifier, les supprimer ou
                        en créer de nouvelles.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-right">
                    <a href=" {{ route('categories.create') }}" class="btn btn-info">creer new <i class="fa fa-plus">
                        </i></a><br><br><br>
                    <div class="panel panel-primary">

                        <div class="col-md-12 text-center">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="font-weight: 300">Nom</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Image</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>{{ $category->nom }}</td>
                                            </td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                @if ($category->image)
                                                    <img src="{{ asset('imgCat/' . $category->image) }}"
                                                        alt="{{ $category->name }}" width="100">
                                                @else
                                                    Aucune image
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('categories.destroy', $category->id) }}"onclick="return confirm('are you sure to delete this category ? ')" class="d-inline" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h3>{{ __('Data Empty') }}</h3>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tr>
                                    <td colspan="9">
                                        <div class="float-right">
                                            {!! $categories->links() !!}
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
</body>

</html>
