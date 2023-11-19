<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
    <div id="wrapper">
        @include('admin.nav')
        <div>
            <div class="row text-center">
                <h1 class="h3 mb-0 text-gray-800">{{ __('create new') }}</h1>
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
            <form action="{{ route('annonces.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title" class="col-md-2">
                        Title:
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="title" placeholder="Enter Title"
                            name="titre">
                    </div>
                </div>
                <div>
                    <label for="description" class="col-md-2">
                        Description:
                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="description" placeholder="Enter Description" name="description"></textarea>
                    </div>
                </div>
                <div>
                    <label for="price" class="col-md-2">
                        Price:
                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="price" placeholder="Enter Price"
                            name="prix">
                    </div>
                </div>
                <div>
                    <label for="category" class="col-md-2">
                        Category:
                    </label>
                    <div class="col-md-9">
                        {{--  <select name="category" id="category" class="form-control">
                    <option>--Please Select--</option>
                    <option>Electronics</option>
                    <option>Fashion</option>
                    <option>Home and Garden</option>
                    <option>Sports and Outdoors</option>
                    <option>Toys and Games</option>
                    <option>Other</option>
                </select> --}}

                        <select name="categorie_id" id="categories" class="form-control">
                            <option disabled>--Please Select--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('categories') == $category->id ? 'selected' : '' }}>{{ $category->nom }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div>
                    <label for="uploadimage" class="col-md-2">
                        Upload Image:
                    </label>
                    <div class="col-md-10">
                        <input type="file" class="form-control" id="uploadimage" name="fichier">
                    </div>
                </div>
                <div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <label>
                            <input type="checkbox">I hereby accept the terms and conditions for using this site</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-info">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
