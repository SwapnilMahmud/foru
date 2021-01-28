<html>
     <head>
       <title>@yield('title')</title>
     </head>
     <body>
        <h1>Main Page</h1>
        <div id="header">
          <h1>Header section</h1>
        </div>
        <div id="container">
          @section('container')
          <h5>BANGLADESH</h5>
          @show
        </div>
        <div id="footer">
            <h1>Footer section</h1>
        </div>
     </body>
</html>
