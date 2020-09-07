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
         <table class="table">
             <thead>
                 <th scope="col">#</th>
                 <th scope="col">Nome</th>
                 <th scope="col">CPF</th>
                 <th scope="col">Número da Camisa</th>
                 <th scope="col">Criando</th>
                 <th scope="col">Ações</th>
             </thead>
             <tbody>
             @foreach($jogador as $r)
                    
                <tr>
                 <td scope="row">{{$r->id}}</td>
                 <td>{{$r->Nome}}</td>
                 <td>{{$r->CPF}}</td>
                 <td>{{$r->Numerodacamiseta}}</td>
                 <td>{{$r->created_at}}</td>
                 <td><a  href="">Edita</a>/ <a href="{{route('jogador.store')}}">Excluir</a></td>
                </tr>
                 @endforeach
                 
             </tbody>
         </table>
        </div>  
    </body>
</html>
