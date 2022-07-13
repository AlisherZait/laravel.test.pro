@extends('layout')
@section('title')
    Каталог
@endsection
@section('content')


        <div class="row row-cols-1 row-cols-md-3 g-4 bg-dark" style="margin:5px 0px 0px 0px">
            @foreach($articles as $article)

            <div class="col">
                <div class="card h-100">
                    <img width="200" height="222" src="{{$article->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name_article}}</h5>
                        <p class="card-text">
                            <?php echo mb_strimwidth($article->article, 0, 150, "..."); ?>
                        </p>
                    </div>
                    <div class="card-details" style="margin: 5px 5px 5px 10px">
                        <button class="btn btn-warning" ><a  style="text-decoration:none; color: black" href="{{route('one-article', $article->id)}}">Подробнее</a></button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{$article->updated_at}}</small>
                    </div>
                </div>
            </div>
    @endforeach
        </div>
@endsection

