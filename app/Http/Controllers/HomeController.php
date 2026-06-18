<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $ruta = storage_path('app/productos.json');

        $productos = [];

        if (File::exists($ruta)) {
            $productos = json_decode(
                File::get($ruta),
                true
            );
        }

        $carrito = session('carrito', []);

        $totalItems = collect($carrito)
            ->sum('cantidad');

        return view(
            'home',
            compact(
                'productos',
                'totalItems'
            )
        );
    }

    public function agregarCarrito(Request $request)
    {
        $producto = $request->input('producto');

        $carrito = session('carrito', []);

        $encontrado = false;

        foreach ($carrito as &$item) {

            if ($item['Nombre'] === $producto['Nombre']) {

                $item['cantidad']++;

                $encontrado = true;

                break;
            }
        }

        if (!$encontrado) {

            $producto['cantidad'] = 1;

            $carrito[] = $producto;
        }

        session([
            'carrito' => $carrito
        ]);

        return redirect()
            ->route('home')
            ->with('agregado', true);
    }
}