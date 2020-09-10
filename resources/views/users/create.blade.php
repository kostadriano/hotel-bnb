<form action="/users" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="name"  name="name">
    </div>
    <div class="form-group">
        <label for="title">email</label>
        <input type="text" class="form-control" id="email"  name="email">
    </div>
    <div class="form-group">
        <label for="title">Password</label>
        <input type="text" class="form-control" id="password"  name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>