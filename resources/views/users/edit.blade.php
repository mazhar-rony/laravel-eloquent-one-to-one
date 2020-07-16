<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Update User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/users" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        <h3>Update User</h3>
        <hr>
        <form action="/users/{{ $user->id }}/edit" method="POST">

        @csrf
        @method('patch')

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" id="firstname" name="firstname" value="{{ $user->firstname }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" id="phone" name="phone" value="{{ $user->phone }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="{{ $user->date_of_birth }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" id="user_name" name="user_name" value="{{ $user->user_name }}" placeholder="" class="form-control">
                </div>

                <hr>

                <h1>Profile Information</h1>

                <div class="form-group">
                    <label for="name">Profile Picture</label>
                    <input type="text" id="profile_pic" name="profile_pic" value="{{ $user->profile->profile_pic }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">User&#39;s Bio</label>
                    <input type="text" id="bio" name="bio" value="{{ $user->profile->bio }}" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" id="address" name="address" value="{{ $user->profile->address }}" placeholder="" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ asset('/users')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>