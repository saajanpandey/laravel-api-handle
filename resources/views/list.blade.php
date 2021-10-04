<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Animes</title>
</head>
<body>
     <form action="{{url('post')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Save the data in database</button>
    </form>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Anime Name</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datas['data'] as $data)
            <tr>
                <td>{{$data['anime_name']}}</td>
                <td><img src="{{$data['anime_img']}}" alt="" style="width: 100px;height:100px"></td>
              </tr>
            @endforeach

        </tbody>
      </table>
</body>
</html>
