<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Modiry A Book</title>
</head>
<body>
    <div class="container">
        <h1>Modify your Book</h1>
        <a href="/books" class="btn btn-info">Show all book list</a>

        <form action="/books/{{$sbook->id}}/edit" class="form" method="POST">
            @csrf
            @method('patch')

            <div class="form-group mt-2">
                <label for="name">Book Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$sbook->name}}">
            </div>
            <div class="form-group mt-2">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="05" rows="05">{{$sbook->description}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="isbn">Isbn</label>
                <input type="text" class="form-control" name="isbn" id="isbn" value="{{$sbook->isbn}}">
            </div>

            <div class="form-group mt-2">
                <label for="author_id">Authors</label>
                @foreach ($sbook->authors as $item)
                    <li>{{$item->name}}</li>
                @endforeach
                <select class="form-control" name="author_id[]" id="author_id" multiple>
                    @foreach ($sauthor as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-success mt-3">Submit</button>

        </form>
    </div>
</body>
</html>