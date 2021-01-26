<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>New Project</title>
</head>
<body>
    <div id="container">
        {{-- header --}}
        @include('components.header')

        {{-- main --}}
        @yield('content')

        {{-- footer --}}
        @include('components.footer')
    </div>
</body>

{{-- GOAL: basandosi sull'array pagamenti in allegato, creare 2 rotte:
- pagamenti: in cui verranno listati tutti i pagamenti stampati con due colori diversi un colore per riga (come visto a lezione verde/rosso)
- pagamentipending: in cui verranno listati con la stessa grafica precedente i soli pagamenti pending
NOTE: come sempre generare progetto nuovo con scafolding base (include/yield/extends + css + js); basta lanciare la create-project nella stessa cartella della repo di ieri --}}
</html>