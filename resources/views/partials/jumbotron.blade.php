<section class="mt-5">
    <div class="jumbotron">
        <h1 class="display-4">{{$show->name}}</h1>
        <p class="lead">{{$show->age}}</p>
        <p class="lead">{{$show->email}}</p>
        <p class="lead">{{$show->phone}}</p>
        <hr class="my-4">
        <form action="/deletePeople/{{$show->id}}" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</section>