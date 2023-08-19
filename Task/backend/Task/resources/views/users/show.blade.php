<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>
<body>
    <h1>Show a User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form>

        <div>
            <label>firstName</label>
            <input disabled type="text" name="first_name" placeholder="first_name" value="{{$user->first_name}}" />
        </div>
        <div>
            <label>lastName</label>
            <input disabled type="text" name="last_name" placeholder="last_name" value="{{$user->last_name}}" />
        </div>
        <div>
            <label>Email</label>
            <input  disabled type="email" name="email" placeholder="email" value="{{$user->email}}" />
        </div>
        <div>
            <label>Password</label>
            <input disabled type="password" name="password" placeholder="password" value="{{$user->password}}" />
        </div>

    </form>
</body>
</html>
