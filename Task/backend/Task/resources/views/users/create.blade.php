<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>
<body>
    <h1>Create a User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('user.store')}}">
        @csrf
        @method('post')
        <div>
            <label>firstName</label>
            <input type="text" name="first_name" placeholder="firstName" />
        </div>
        <div>
            <label>LastName</label>
            <input type="text" name="last_name" placeholder="LastName" />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" required name="description" placeholder="Password" />
        </div>
        <div>
            <input type="submit" value="Save a New User" />
        </div>
    </form>
</body>
</html>
