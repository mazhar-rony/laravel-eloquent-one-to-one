<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - User List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
            {{--  <a href="{{ asset('/countries')}}" class="btn btn-primary"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Show Countries</a>  --}}
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        
        <div class="row">
            <div class="col-md-6"><h3>User List</h3></div>
            <div class="col-md-6">
                {{-- <a href="{{ asset('/countries')}}" class="btn btn-primary offset-md-4"><i class="fa fa-user-plus" aria-hidden="true"></i>Show Countries</a> --}}
                <a href="{{ asset('/profiles')}}" class="btn btn-primary offset-md-5"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Show Profiles</a>
                <a href="{{ asset('/users/create')}}" class="btn btn-success pull-right"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>User Name</th>
                        {{--  <th>Created On</th>
                        <th>Updated On</th>  --}}
                        <th colspan="3" style="text-align: center">Action</th>
                    </tr>
                     
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->date_of_birth->format('d-m-Y') }}</td>
                            <td>{{ $user->user_name }}</td>
                            {{--  <td>{{ $user->created_at->format('d-m-Y') }}</td>
                            <td>{{ $user->updated_at->diffForHumans() }}</td>  --}}
                            
                            <td><a href="/users/{{$user->id}}/show" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Profile</a></td>
                            <td><a href="/users/{{$user->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a></td>
                            
                            <td>
                                <form action="/users/{{$user->id}}/delete" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button> 
                            </td>        
                                </form>        
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">Record not found.</td>
                        </tr
                    @endforelse
                                       
                </table>
            </div>
        </div>
        
    </div>

</body>
</html>