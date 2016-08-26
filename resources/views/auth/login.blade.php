@extends('layouts.base')
@section('content')

<div class="container">

  <div id="login-form">

    <h3>Iniciar sesión</h3>

    <fieldset>

      <form action="javascript:void(0);" method="get">

        <input type="email" required value="Correo Electrónico" onBlur="if(this.value=='')this.value='Correo Electrónico'" onFocus="if(this.value=='Correo Electrónico')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

        <input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

        <input type="submit" value="Ingresar">

        <footer class="clearfix">

          <p><span class="info">?</span><a href="#">Olvidó su contraseña</a></p>

        </footer>

      </form>

    </fieldset>

  </div> <!-- end login-form -->

</div>

@endsection
