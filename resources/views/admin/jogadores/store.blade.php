<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Styles -->
        
    </head>
    <body>
    <div class="container">
        <h2>Stacked form</h2>
    <form action="{{route('jogador.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" id="Nome" placeholder="Enter email" name="Nome" value="{{old('Nome')}}">
                @if( $errors->has('Nome') )
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('Nome')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="CPF">CPF:</label>
                <input type="text" class="form-control" id="CPF" placeholder="Enter password" name="CPF" value="{{old('CPF')}}">
                @if( $errors->has('CPF') )
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('CPF')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="Numerodacamiseta">Número da camiseta:</label>
                <input type="text" class="form-control" id="Numerodacamiseta" placeholder="Enter password" name="Numerodacamiseta" value="{{old('Numerodacamiseta')}}">
                @if( $errors->has('Numerodacamiseta') )
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('Numerodacamiseta')}}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>  
    </body>
</html>
