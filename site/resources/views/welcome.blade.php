<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }
             table {
                border-spacing:0;
             }
             table td{
                border: 1px solid #000;
                text-align: center;
                padding: 3px;
             }
        </style>
    </head>
    <body class="antialiased">
        <div style="margin:30px 0 0 25px;">

            <form method="post">
                {{ csrf_field() }}
                Дата: <input type="text" name="date" value="{{ old('date') }}" style="border:1px solid #000;">
                <input type="submit">
            </form>

            @if ($errors->has('date'))
            <p style="color:red;">{{ $errors->first('date') }}</p>
            @endif

            @if (isset($temp))
            <p>
            Температура {{$temp}} градусов
            </p>
            @endif

            @if (isset($lastDays))

            <br>
            <table>

                <tr><td>Дата</td><td>Температура</td></tr>

                @foreach ($lastDays as $lastDay)

                <tr><td> {{ $lastDay['date_at'] }} </td><td> {{ $lastDay['temp'] }} </td></tr>

                @endforeach

            </table>

            @endif

        </div>
    </body>
</html>
