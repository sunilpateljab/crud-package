<!-- list.blade.php -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
<div class="row column_title">
 <div class="col-md-12">
    <div class="page_title">
       <h2>Department List</h2>
    </div>
 </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
           
           <a href="{{ route('departments.create') }}" class="btn btn-primary">Add Department</a>
           
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table table-hover">
                <thead>
                    <tr>
                      <td>S.No.</td>
                      <td>Department Name</td>
                      <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departmentlist as $key => $departmentlist_value)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$departmentlist_value->name}}</td>
                        <td>
                            <form action="{{ route('departments.destroy', $departmentlist_value->id) }}" method="post">

                                <a href="{{ route('departments.edit', $departmentlist_value->id) }}" class="btn btn-primary">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Delete</button>
                                
                             </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
</div>