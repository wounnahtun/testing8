<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="my-3 d-inline-block">
                        <label for="" class="form-label">Category Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <button class="btn btn-outline-primary d-inline-block">Click</button>
                </form>
                <table class="table-hover table-striped table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Title</th>
                        <th>Control</th>
                        <th>Date / Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Category::all() as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->title}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                <form action="{{route('category.destroy',$category->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                            <td>{{$category->created_at}}</td>


                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
