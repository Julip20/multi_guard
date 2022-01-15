<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container"></div>
      <div class="row">
          <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                   <h4>User Login</h4> <hr>
                   <form action="" class="action">
                       <div class="form-group">
                           <label for="email">Email</label>
                            <input type="text" class="form-control name="email" placeholder="Enter email address">
                        </div>

                        <div class="form-group">
                           <label for="password">Password</label>
                            <input type="password" class="form-control name="password" placeholder="Enter password">
                        </div><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <br>
                        <a href="{{ route('user.register') }}" >Create new Account</a>
                   </form>
          </div>  
      </div>
</body>
</html>