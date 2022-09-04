<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Creating A New Author</title>
</head>
<body>
    <div class="container">
        <h1>Create a new author</h1>
        <a href="/authors" class="btn btn-info">Show all author list</a>

        <form action="/authors/create" class="form" method="POST">
            @csrf

            <div class="form-group mt-2">
                <label for="name">Author Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group mt-2">
                <label for="email">Author Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            
            
            <button type="submit" class="btn btn-success mt-3">Submit</button>

        </form>
    </div>
</body>
</html>