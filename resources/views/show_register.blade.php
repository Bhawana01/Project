<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>

  <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/bootstrap.min.css">

</head>
<body>
<!-- Register showregister --> 
<div class="row">
  <div class="col-md-8">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Contact No.</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($registers as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->firstname}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->contactno}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
      </tr>
        @endforeach
    </tbody>

  </table>
  </div>
  </div>
</div>
</body>
</html>