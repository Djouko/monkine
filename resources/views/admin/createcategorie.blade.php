<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
    <div id="wrapper">
        @include('admin.nav')
        <h1 class="col-md-12 text-center">{{ __('create Category') }}</h1>

        <div class="col-md-12 text-center">
            <a href="{{ route('categories.index') }}" class="btn btn-info"><i class="fa fa-home"></i>{{ __('Go Back') }}</a><br> <br>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name:</label> <input type="text" class="form-control" id="name"
                                        placeholder="Enter category name" name="nom">

                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" placeholder="Enter category description" name="description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <p class="help-block">
                                    Allowed formats: jpeg, jpg, gif, png
                                </p><br><br>

                                <button type="submit" class="btn btn-info">save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
