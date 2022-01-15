<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container"></div>
      <div class="row">
          <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                   <h4>User Register</h4> <hr>
                   <form action="{{ route('user.create') }}" method="POST">
                      @csrf  
                     <div class="form-group">
                           <label for="name">Name</label>
                            <input type="text" class="form-control name="name" placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                           <label for="email">Email</label>
                            <input type="text" class="form-control name="email" placeholder="Enter email address">
                        </div>

                        <div class="form-group">
                           <label for="password">Password</label>
                            <input type="password" class="form-control name="password" placeholder="Enter password">
                        </div>

                        <div class="form-group">
                           <label for="Confirm Password">Confirm Password</label>
                            <input type="password" class="form-control name="cpassword" placeholder="Enter Confirm password">
                        </div><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <br>
                        <a href="{{ route('user.login') }}">I already have an account</a>
                   </form>
          </div>  
      </div>
</body>
</html>