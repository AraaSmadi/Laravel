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
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">movie name</th>
                    <th scope="col">movie imag</th>
                    <th scope="col">movie gener</th>
                    <th scope="col">movie description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->movie_name}}</td>
                    <td> <img src="{{url('public/image/'.$value->movie_image)}}" alt=""></td>
                    <td>{{$value->movie_gener}}</td>
                    <td>{{$value->movie_description}}</td>
                    <td>
                        <a class="btn btn-warning " href={{"show/".$value->id}}>Show</a>
                        <a class="btn btn-danger" href={{"delete/".$value->id}} > Delete </a>
                        <a class="btn btn-info" href={{"edit/".$value->id}}> Edit </a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
    </body>
</html>
