<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>
<body>
    <h1>User</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('user.create')}}">Create a User</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->first_name}}</td>
                    <td>{{$product->last_name}}</td>
                    <td>{{$product->email}}</td>
                    <td>
                        <a href="{{route('user.show', ['id' => $product->id])}}">Show</a>
                    </td>
                    <td>
                        <a href="{{route('user.edit', ['id' => $product->id])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('user.destroy', ['id' => $product->id])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
