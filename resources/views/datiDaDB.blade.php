<html>
    <head>
        <title> DATI DA DB </title>
    </head>
    <body>

        <ul>
        
        @foreach($taskss as $tasks)

        <li> {{ $tasks->body }}</li> 

        @endforeach

        </ul>   
    </body>
</html>