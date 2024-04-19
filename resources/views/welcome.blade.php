<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        <!-- Script JS -->
        <script src="/js/script.js"></script>
    </head>
    <body class="antialiased">
        <h1>HOME</h1>
        <img src="/img/banner.jpg" alt="banner" title="Banner">
        <p>Author: {{$nome}}</p>
        @if(10 > 5)
            <h3>Resultado TRUE</h3>
        @endif

        @if($nome == "clerison")
            <h3>O nome é {{$nome}}, tem {{$idade}} anos.</h3>
            <h3>Sua profissão é {{$profissao}}.</h3>
        @elseif($nome == "juliana")
            <h3>O nome é {{$nome}}</h3>
        @else
            <h3>O nome não é identificado</h3>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p> Valor = {{ $arr[$i]}}, indice = {{$i}}</p>
            @if($i == 2)
                <p>O indice é 2</p>
            @endif
        @endfor

        @php
            $name = "João";
            echo $name;
        @endphp

        @foreach($nomes as $nome)
            <p>{{$loop->index}} {{$nome}}</p>
        @endforeach

        <!-- Comentário do HTML -->
        {{-- Comentário do BLADE --}}
    </body>
</html>
