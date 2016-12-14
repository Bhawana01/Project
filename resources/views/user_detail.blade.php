<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>

  <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/bootstrap.min.css">

</head>
<body>
<div class="row">
  <div class="col-md-8">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
      </tr>
        @endforeach
    </tbody>

  </table>
  </div>
  <div class="col-md-4">
      <div class="panel dark-style">
        <h3>Patan Multiple Campus</h3>
        <p>Patandhoka, Lalitpur</p>
        <p>Affilated to Tribhuwan University</p>
        <p>Near to Krishna Mandir...</p>
        <!-- <ul class="side-list">
          <li><a href="#">Patandhoka</a></li>
          <li><a href="#">Latipur</a></li>
          <li><a href="#">Affilated to Tribhuwan University</a></li>
        </ul> -->
      </div>
  </div>
</div>
</body>
</html>