<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    </head>
    <body>
        <div class="container">
        <h1>Edit Movies form</h1><br>
        <form action="/edit" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden"  id="id" name="id" value="{{$movie->id}}">
            <div class="form-group">
              <label for="name">movie_name</label>
              <input type="text" class="form-control" id="name" placeholder="name" name="name" required value="{{$movie->movie_name}}">
            </div>
            <div class="form-group">
                <label for="gener">movie_gener</label>
                <input type="text" class="form-control" id="gener" placeholder="gener" name="gener" value="{{$movie->movie_gener}}" required>
              </div>
              <label class="form-label" for="customFile">Image Movie</label>
            <input type="file" class="form-control" id="customFile" name="img" value="{{$movie->movie_imag}}" required/>
            <div class="form-group">
              <label for="description">movie description</label>
              <textarea class="form-control"name="description" id="description" rows="3" placeholder="{{$movie->movie_description}}" required></textarea>
            </div>
            <button type="submit" class="btn btn-default">Edit movie</button>
          </form>
        </div>

    </body>
</html>
