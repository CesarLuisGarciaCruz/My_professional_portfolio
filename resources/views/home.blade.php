<!DOCTYPE html>
<html lang="es-MX">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Mi Tiendita | Inicio</title>

<link rel="icon"
href="{{ asset('img/mercado.png') }}">

<link rel="stylesheet"
href="{{ asset('css/styles.css') }}">

</head>

<body>

@if(session('agregado'))

<div class="overlay-mensaje"
id="overlay"></div>

<div class="mensaje-notificacion"
id="mensajeAgregado">

<h3>¡Ya está en el carrito!</h3>

<p>El artículo se añadió correctamente</p>

</div>

<script>

setTimeout(()=>{

window.location.href="{{ route('home') }}"

},2000);

document
.getElementById('overlay')
.addEventListener(
'click',
()=>window.location.href=
"{{ route('home') }}"
);

</script>

@endif


<nav class="navbar">

<div class="nav-left">

<button
class="navbar_button"
onclick="location.href='{{ route('home') }}'">

<img
src="{{ asset('img/mercado.png') }}"
alt="Inicio">

</button>

</div>


<div class="nav-center">

<h2 style="color:#a04d2f">

<strong>
TIENDITA By Cesar Garcia
</strong>

</h2>

</div>


<div class="nav-right">

<button
class="navbar_button carrito-badge"
onclick="location.href='{{ route('car') }}'">

<img
src="{{ asset('img/carrito.png') }}"
alt="Carrito">

@if($totalItems>0)

<span
class="carrito-count">

{{ $totalItems }}

</span>

@endif

</button>


<button
class="navbar_button"
onclick="location.href='{{ route('user') }}'">

<img
src="{{ asset('img/usuario.png') }}">

</button>

</div>

</nav>



<div class="productos-container">

@if(empty($productos))

<p
style="
text-align:center;
padding:20px;
">

No se encontraron productos

</p>

@else

@foreach($productos as $prod)

<div class="producto">

<img
src="{{ asset(str_replace('../','',$prod['img'])) }}"
alt="{{ $prod['Nombre'] }}">


<div class="producto-contenido">

<h3>

{{ $prod['Nombre'] }}

</h3>

<p>

{{ $prod['Descripcion'] }}

</p>


<div class="precio">

${{
number_format(
$prod['Precio'],
2
)
}}

</div>


<form
method="POST"
action="{{ route('car.add') }}">

@csrf

<input
type="hidden"
name="producto"
value='@json($prod)'>

<button
type="submit"
class="button_plus">

<img
src="{{ asset('img/acarrito.png') }}">

Agregar al carrito

</button>

</form>


</div>

</div>

@endforeach

@endif

</div>

</body>

</html>