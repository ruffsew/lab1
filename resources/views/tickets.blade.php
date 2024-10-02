 <!DOCTYPE html>
   <html lang="ru">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>tik</title>
   </head>
   <body>
       <h1>tickets</h1>
       
        <ul>
           @foreach($tickets as $tickets)
           <li>
                   <strong>Тема:</strong> {{ $tickets['theme'] }} <br>
                   <strong>Email:</strong> {{ $tickets['email'] }} <br>
                   <strong>Дата:</strong> {{ $tickets['date'] }}</li>
           @endforeach
        </ul>
       
   </body>
   </html>   
   