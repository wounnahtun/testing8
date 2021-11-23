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
            <div class="col-lg-4">
                <form action="{{route('article.update',$article->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="my-3">
                        <label for="" class="form-label">Article Title</label>
                        <input type="text" name="title" class="form-control" value="{{$article->title}}">
                    </div>
                    <div class="my-3">
                        <select name="category" id="" class="form-select">
                            @foreach(\App\Models\Category::all() as $c)
                                <option value="{{$c->id}}">{{$c->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="10" rows="5" class="form-control">{{$article->description}} </textarea>
                    </div>
                    <button class="btn btn-outline-primary float-end">Add Article</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
