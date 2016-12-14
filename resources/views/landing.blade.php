<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
  <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/bootstrap.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-8">
    <!-- test store -->
        <form class="form-horizontal" action="{{ url('/') }}/user/store"  method="POST" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Firstname:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" name="firstname" placeholder="Firstname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Lastname:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" name="lastname" placeholder="Lastname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Address:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" name="address" placeholder="Address">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Contact No:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" name="contact_no"placeholder="Contact No">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Email:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Password:</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    <label>
                    <input type="checkbox"> Remember me
                    </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Submit">
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <form action="{{ url('/') }}/user/showuser" method="get">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Show all users">
                </div>
            </div>
        </form>
    </div>
     <div class="col-md-4">
        <form action="{{ url('/') }}/user/showregister" method="get">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Show register of all users">
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <div class="panel dark-style">
            <h3>Patan Multiple Campus</h3>
            <p>Patandhoka, Lalitpur</p>
            <p>Affilated to Tribhuwan University</p>
            <p>Near to Krishna Mandir...</p>
        </div>
    </div>
</div>
</body>
</html>