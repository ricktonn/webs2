@extends('layouts.app')

@section('content')


    <h1>Admin page</h1>
    <section class="admin-section">
    <div class="d-flex flex-row mt-2">
        <ul class="nav nav-tabs nav-tabs--left" role="navigation">
            <li class="nav-item">
                <a href="#product" class="nav-link active" data-toggle="tab" role="tab" aria-controls="product">Producten beheren</a>
            </li>
            <li class="nav-item">
                <a href="#user" class="nav-link" data-toggle="tab" role="tab" aria-controls="user">Categorieën beheren</a>
            </li>
            <li class="nav-item">
                <a href="#meme" class="nav-link" data-toggle="tab" role="tab" aria-controls="meme">Meme page</a>
            </li>
            <li class="nav-item">
                <a href="#sit-amet" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">Swag</a>
            </li>
        </ul>

    </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="product" role="tabpanel">
                <h1>Add product</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                <form method="post" action="{{ url('products') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Product naam</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-goup">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Image name</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="startersets">Starter sets</option>
                            <option value="liquid">E-liquid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="seo">SEO</label>
                        <input type="text" name="seo" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add product</button>
                    </div>
                </form>
                <hr style="margin: 3rem 0; background-color: transparent;">
                <h1>All products</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>SEO</th>
                        <th >Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product['id']}}</td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['desc']}}</td>
                            <td>{{$product['category']}}</td>
                            <td>{{$product['img']}}</td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product['seo']}}</td>
                            {{--<td><a href="{{action('ProductController@edit', $product['id'])}}" class="btn btn-warning">Edit</a></td>--}}
                            <td>
                                <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="user" role="tabpanel">
                <h1>hiero</h1>
            </div>
            <div class="tab-pane fade" id="meme" role="tabpanel">
                <h1>kut</h1>
            </div>
            <div class="tab-pane fade" id="sit-amet" role="tabpanel">
                <h1>rick</h1>
            </div>
        </div>
    </section>
@endsection()