<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Str;

class NoticiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $noticias = Noticia::latest()->paginate(10);
        return view('noticia.index', ['noticias' => $noticias]);
    }

    public function listNoticias(): View
    {
        $noticias = Noticia::latest()->paginate(10);
        return view('noticia.index', compact('noticias'));
    }

    public function create(): View
    {
        return view('noticia.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'titulo' => 'required|min:3',
            'slug' => 'required|min:10',
            'descripcion' => 'required|min:3',
            'contenido' => 'required|min:3',
            'imagen' => 'required|image',
            'estado' => 'required',
            'fecha_publicacion' => 'required',
        ];
        $messages = [
            'titulo.required' => 'El titulo no pueder ser vacio.',
            'titulo.min' => 'El titulo debe tener al menos 3 caracteres.',
            'slug.required' => 'El slug no pueder ser vacio.',
            'slug.min' => 'El slug debe tener al menos 10 caracteres.',
            'descripcion.required' => 'La descripcion no pueder ser vacio.',
            'descripcion.min' => 'La descripcion debe tener al menos 3 caracteres.',
            'contenido.required' => 'El contenido no pueder ser vacio.',
            'contenido.min' => 'El contenido debe tener al menos 3 caracteres.',
            'imagen.required' => 'La imagen no pueder ser vacio.',
            'imagen.image' => 'El archivo adjunto debe ser una imagen.',
            'estado.required' => 'El estado no pueder ser vacio.',
            'fecha_publicacion.required' => 'La fecha de publicacion no pueder ser vacio.',
        ];
        $this->validate($request, $rules, $messages);

        $noticia = new Noticia();
        $noticia->titulo = $request->titulo;
        $slugBase = Str::slug($request->titulo);
        $slug = $slugBase;
        $contador = 1;
        while (Noticia::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $contador;
            $contador++;
        }
        $noticia->slug = $slug;
        $noticia->descripcion = $request->descripcion;
        $noticia->contenido = $request->contenido;
        $noticia->estado = $request->estado;
        $noticia->fecha_publicacion = $request->fecha_publicacion;
        $noticia->usuario_id = Auth::user()->id;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $ruta_imagen = $imagen->store('storage/noticias');
            $noticia->imagen = $ruta_imagen;
        }

        $noticia->save();

        return redirect()->route('noticias.index')->with('message', 'Noticia creada con éxito');
    }

    public function edit(Noticia $noticia): View
    {
        return view('noticia.edit', ['noticia' => $noticia]);
    }

    public function update(Request $request, Noticia $noticia): RedirectResponse
    {
        $rules = [
            'titulo' => 'required|min:3',
            'slug' => 'required|min:10',
            'descripcion' => 'required|min:3',
            'contenido' => 'required|min:3',
            'imagen' => 'image',
            'estado' => 'required',
            'fecha_publicacion' => 'required',
        ];
        $messages = [
            'titulo.required' => 'El titulo no pueder ser vacio.',
            'titulo.min' => 'El titulo debe tener al menos 3 caracteres.',
            'slug.required' => 'El slug no pueder ser vacio.',
            'slug.min' => 'El slug debe tener al menos 10 caracteres.',
            'descripcion.required' => 'La descripcion no pueder ser vacio.',
            'descripcion.min' => 'La descripcion debe tener al menos 3 caracteres.',
            'contenido.required' => 'El contenido no pueder ser vacio.',
            'contenido.min' => 'El contenido debe tener al menos 3 caracteres.',
            'imagen.image' => 'El archivo adjunto debe ser una imagen.',
            'estado.required' => 'El estado no pueder ser vacio.',
            'fecha_publicacion.required' => 'La fecha de publicacion no pueder ser vacio.',
        ];
        $this->validate($request, $rules, $messages);

        $noticia->titulo = $request->titulo;
        $slugBase = Str::slug($request->titulo);
        $slug = $slugBase;
        $contador = 1;
        while (Noticia::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $contador;
            $contador++;
        }
        $noticia->slug = $slug;
        $noticia->descripcion = $request->descripcion;
        $noticia->contenido = $request->contenido;
        $noticia->estado = $request->estado;
        $noticia->fecha_publicacion = $request->fecha_publicacion;
        $noticia->usuario_id = Auth::user()->id;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $ruta_imagen = $imagen->store('storage/noticias');
            $noticia->imagen = $ruta_imagen;
        }

        $noticia->save();

        return redirect()->route('noticias.index')->with('message', 'Noticia actualizada con éxito');
    }

    public function destroy(Noticia $noticia): RedirectResponse
    {
        $noticia->delete();
        return redirect()->route('noticias.index')->with('message', 'Noticia eliminada con éxito');
    }

    //crear funcion para generar vista publica de las noticias solo con el slug
    public function show($slug): View
    {
        $noticia = Noticia::where('slug', $slug)->first();
        return view('new', compact('noticia'));
    }
}
