<form action="/updatePeople/{{$show->id}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" value="{{$show->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
        <input type="number" name="age" class="form-control" value="{{$show->age}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" name="email" class="form-control" value="{{$show->email}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{$show->phone}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>