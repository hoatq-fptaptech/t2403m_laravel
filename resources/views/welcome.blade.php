@extends("layout")
@section("main")
<div class="container">
    <h1>Home page</h1>
    <div class="row">
        <aside class="col-3">
            <ul class="list-group">
                @foreach($categories as $item)
                <li class="list-group-item"><a href="#">{{$item["name"]}}</a></li>     
                @endforeach     
            </ul>
        </aside>
        <div class="col">

        </div>
    </div>
</div>
@endsection