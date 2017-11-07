<!-- app/views/cruds/create.blade.php -->

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

<h1>Create a Nerd</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'cruds')) }}

    <div class="form-group">
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
    </div>
      <div class="form-group">
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

       <div class="form-group">
        {{ Form::label('blood_group', 'Blood Group') }}
        {{ Form::text('blood_group', Input::old('blood_group'), array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('phone_number', 'Phone No') }}
        {{ Form::text('phone_number',Input::old('phone_number'), array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
    </div>
  

    {{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>