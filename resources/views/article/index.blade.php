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
        <div class="col-lg-12 my-3">
            <div class="card my-3">
                @foreach($articles as $article)
                    <div class="my-3">
                        <h5 class="card-header">{{$article->category_id}}</h5>
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->description}}</p>
                            <a href="{{route('article.edit',$article->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                            <form action="{{route('article.destroy',$article->id)}}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                               <button class="btn btn-outline-danger">Delete</button>
                            </form>

                        </div>
                    </div>

                @endforeach
            </div>
        </div>

    </div>
</div>
</body>
</html>
