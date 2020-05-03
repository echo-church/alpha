<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ECHO">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
    <meta name="theme-color" content="#fe1e00">
    <title>{{ config('app.name') }}</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/front.css')}}">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="favicon.png" height="140px" class="logo">
        <div class="title m-b-md">
            {{ config('app.name') }}
        </div>

        @if($attendeesCount < $attendeesMaxCount)

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Proszę wypełnij wszystkie pola poprawnie.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 row">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="Imię"
                                   value="{{ old('first_name') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 row">
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Nazwisko"
                                   value="{{ old('last_name') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 row">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                   value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 row">
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="Miejscowość"
                                   value="{{ old('city') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 row">
                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Wiek"
                                   value="{{ old('age') }}" min="13" max="255" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 row">
                        <div class="form-group">
                            <select name="returning" required class="select-css">
                                <option value="">czy brałeś już udział w kursie alpha?</option>
                                <option value="1" @if(old('returned') == '1')selected @endif>tak</option>
                                <option value="0" @if(old('returned') == '0')selected @endif>nie</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 row text-center p-t-m">
                        <button type="submit" class="btn btn-primary">Zapisz się</button>
                    </div>
                </div>

            </form>

        @else
            Aktualnie brak miejsc. Spróbuj ponownie później.
        @endif


        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-error">
                {{ session()->get('error') }}
            </div>
        @endif
    </div>
</div>
</body>
</html>
