<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <section class="vh-100">
        <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="https://media.tenor.com/WrZ199notIAAAAAi/kauppa-kauppareissu.gif" class="img-fluid" alt="Phone image" height="300px" width="600px">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login </p>
                <!-- Username -->
                <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> Username</label>
                <input type="name" id="form1Example13" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="enter your username" style="border-radius:25px ;" required autofocus />

                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
                <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="enter your password" style="border-radius:25px ;" required autocomplete="current-password" />

                </div>

                <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">  {{ __('Forgot your password?') }} </a>
                        @endif
                <!-- Submit button -->
                <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <input type="submit" value="Sign in" name="login" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
                </div>

            </form><br>
            <p align="center">i don't have any account <a href="{{ route('register') }}" class="text-warning" style="font-weight:600;text-decoration:none;">Register Here</a></p>
            </div>
        </div>
        </div>
    </section>







  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
