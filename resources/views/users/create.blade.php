<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Create User</title>
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
        <h3>Create User</h3>
        <hr>
        <form action="/users/create" method="POST">

        @csrf

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" id="firstname" name="firstname" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" id="lastname" name="lastname" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" id="phone" name="phone" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" id="user_name" name="user_name" value="" placeholder="" class="form-control">
                </div>

                <hr>

                <h1>Profile Information</h1>

                <div class="form-group">
                    <label for="name">Profile Picture</label>
                    <input type="text" id="profile_pic" name="profile_pic" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">User&#39;s Bio</label>
                    <input type="text" id="bio" name="bio" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" id="address" name="address" value="" placeholder="" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create User</button>
                    <a href="{{ asset('/users')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>