<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container box">
        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            {{-- <strong>danger</strong> --}}
        </div>

        @endif

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>

        @endif
        <form action="{{url('contactmail')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="Enter your name">Recipients name</label>
                <input type="text" name="full_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="Enter your email">Your mail</label>
                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="Enter your email">Subject</label>
                <input type="text" name="subject" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="Enter your message">Enter your message</label>
                <textarea name="content" id="" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Send mail</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
