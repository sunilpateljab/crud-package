<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Department</h2>
  <form action="{{ route('departments.store') }}" method="post">

    @csrf
    <div class="col-md-6">
        <div class="form-group">
          <label >Name:</label>
          <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    
  </form>
</div>

</body>
</html>
