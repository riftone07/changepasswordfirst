<!DOCTYPE html>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Change Password</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>

  <div class="container">

    <div class="row">

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

        <div class="card-body shadow-lg p-3 my-5 bg-white rounded">


         <!-- /.login-logo -->
         <div class="login-box-body " >

           @if (session('message'))
           <div class="alert alert-success">
            {{ session('message') }}
          </div>
          <a href="{{ url('/') }}">Continuer</a>
          @else
          <div class="alert alert-danger">
           C'est votre premiere connexion veuillez changer le mot de passe.
         </div>
         <form class="form-horizontal" method="POST" action="{{ route('motdepasse.post_expired') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="current_password" class="col-md-12 ">Mot de passe actuel</label>

            <div class="col-md-12">
              <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required="">

              @error('current_password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
          </div>

          <div class="form-group">
            <label for="password" class="col-md-12 ">Nouveau mot de passe</label>

            <div class="col-md-12">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
          </div>

          <div class="form-group">
            <label for="password-confirm" class="col-md-12 ">Confirmer votre mot de passe</label>
            <div class="col-md-12">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">

            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
             <button class="btn btn-primary btn-block "  type="submit"> Modifier mot de passe</button>
           </div>
         </div>
       </form>
       @endif
     </div>
     <!-- /.login-box-body -->

   </div>

 </div>

</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

</body>



</html>

