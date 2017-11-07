<!-- app/views/cruds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('cruds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cruds') }}">View All cruds</a></li>
        <li><a href="{{ URL::to('cruds/create') }}">Create a Nerd</a>
    </ul>
</nav>

<h1>Showing {{ $crud->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $crud->name }}</h2>
        <p>
            <strong>Name:</strong> {{ $crud->first_name }} <span>&nbsp;</span>{{$crud->last_name}}<br>
           <strong>Email:</strong> {{ $crud->email }}<br>
            <strong>Blood Group:</strong> {{ $crud->blood_group }}<br>
            <strong>Phone No:</strong> {{ $crud->phone_number }}<br>
            <strong>Address:</strong> {{ $crud->address }}<br>
        </p>
    </div>

</div>
</body>
</html>