<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ruta get</title>
    </head>
    <body>
        any con get
       <form action="{{ url('any') }}" method="get">
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       any con delete
       <form action="{{ url('any') }}" method="post">
           @method('delete')
           @csrf
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       any con post
       <form action="{{ url('any') }}" method="post">
           @csrf
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       any con put
       <form action="{{ url('any') }}" method="post">
           @method('put')
           @csrf
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       get
       <form action="{{ url('get') }}" method="get">
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       delete
       <form action="{{ url('delete') }}" method="post">
           @method('delete')
           @csrf
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       post
       <form action="{{ url('post') }}" method="post">
           @csrf
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       put
       <form action="{{ url('put') }}" method="post">
           @method('put')
           @csrf
           <input type="submit" value="Submit"/>
       </form>
       <hr/>
       put con el método post
       <form action="{{ url('put') }}" method="post">
           @csrf
           <input type="submit" value="Submit"/>
       </form>
    </body>
</html>