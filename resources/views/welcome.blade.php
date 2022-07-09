<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIRE</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>



<style>

body{
    background: gray;
}

.my-font-color{
    color:#FBFAF5;
}

.my-rounded-logo{
    border-radius: 30%;
}

.my-link-style{
    /* background-color: rgb(40,45,51); */
    /* background-color: #323949; */
    /* border-radius: 22%; */
    font-size: 1.5em;
}

/* p{
    color: rgba(255, 255, 255, .5);
} */

</style>

<body class="text-center">

    <div class=" d-flex h-100 p-3 mx-auto flex-column ">
      <header class="masthead mb-auto">
        <div class="inner">
          {{-- <h3 class="masthead-brand">Control escolar</h3> --}}
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link my-font-color my-link-style mx-3" href="{{route('login')}}">Iniciar sesión</a>
            <a class="nav-link my-font-color my-link-style mx-3" href="{{route('register')}}">Registrarse</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover mx-auto " style="width: 50%">

          <img class="img-fluid my-rounded-logo" src="{{asset('custom/LogoSire/logo2.png')}}">
          <h1 class="cover-heading my-font-color py-4">Sistema Integral de Renderizado Estándar</h1>
      </main>

      <footer class="mastfoot mt-auto">
        {{-- <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div> --}}
      </footer>
    </div>
</body>


