<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($DBpeople as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td><a class="btn btn-info" href="/showPeople/{{$item->id}}">Details</a></td>
            <td><a class="btn btn-success" href="/editPeople/{{$item->id}}">Edit</a></td>
        </tr>
      @endforeach
    </tbody>
</table>