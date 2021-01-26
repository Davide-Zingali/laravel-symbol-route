@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>
            Pagamenti
        </h2>

        {{-- ciclo per stampare ogni elemento --}}
        @foreach ($pagamenti as $element)
                @if ($loop -> even)
                    <p class="verde">
                        @foreach ($element as $key => $item)
                            {{$key}}: {{$item}};
                        @endforeach
                    </p>
                @else
                    <p class="giallo">
                        @foreach ($element as $key => $item)
                            {{$key}}: {{$item}};
                        @endforeach
                    </p>
                @endif
        @endforeach
    </main>
@endsection