@extends('layout.landing_layout')

@section('content')
    <div class="mt-16">
        <h1 class="font-bold text-8xl">
            Genewisa
        </h1>
        <h1 class="font-bold text-8xl">
            for admin
        </h1>

        <h1 class="text-3xl mt-12">
            website khusus admin genewisa.
        </h1>

        <button class="mt-12 text-2xl text-white bg-gradient-to-br from-indigo-400 to-teal-400 rounded-xl px-16 py-2">
            Login
        </button>
    </div>

    <script>
        $("button").click(function() {
            location.href = '/login';
        });
    </script>
@endsection
