<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Custom CSS -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/login.js') }}"></script>
    <title>Login MR Bauunternehmung</title>
</head>
<body>
<div class="container">
    <div class="login-page">
        <div class="form">
            <form  class="login-form" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" name="email" type="text" placeholder="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" placeholder="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit">
                    Login
                </button>
                <p class="message"><a href="#">Passwort vergessen?</a></p>
                <p class="message"><a href="{{ route('register') }}">Neuen Benutzer anlegen</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>