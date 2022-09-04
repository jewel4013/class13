<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Show all Book</title>
</head>
<body>
    <div class="container">
        <h1>All Book List</h1>
        <a href="/books/create" class="btn btn-info">Create a new Book</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Isbn</th>
                    <th>Author</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->isbn}}</td>
                        <td>
                            @foreach ($data->authors as $auth)
                                <li>{{$auth->name}}</li>                                
                            @endforeach
                        </td>
                        <td>
                            <a href="/books/{{$data->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>