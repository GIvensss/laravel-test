<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Simple dimple</title>
</head>
<body>
<div class="row">
    <div class="container">
        <div class="col-md-6">
            <form method="post" action="/user/post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Choose game</label>
                    <select name="game" class="form-select">
                        @foreach($games as $game)
                            <option value={{$game->id}}>{{$game->game}}</option>
                        @endforeach
                    </select>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your interests with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1" >Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Game</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">
                        {{$post->id}}
                    </th>
                    <td>
                        {{$post->name}}
                    </td>
                    <td>
                        {{$post->gameId}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
