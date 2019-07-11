<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Inventarios;
use App;
use View;
use Illuminate\support\facades\Storage;

class InventariosController extends Controller
{
    //Listado de Inventarios
    public function index()
    {
        $inventarios ['inventarios']= Inventarios::paginate(10);
                  
        return view('inventarios.index',$inventarios);
    }

    //Formulario para crear
    public function create()
    {
        return view('inventarios.crear');
    }

    //Guardar Servicio
    public function store(Request $request)
    {
        $datosinventarios=request()->except('_token');

        if ($request->hasFile('imagenagen')){
        $datosinventarios['imagen']=$request->file('imagen')->store('uploads','public');
        }
        //insertar los datos al base de dato
       
       inventarios::insert($datosinventarios);
    
    return redirect('inventarios')->with('mensaje','Producto agregado con exito');
    }

    
    public function show($id)
    {
        //
    }

    //Formulario para editar
    public function edit($id)
    {
        $inventarios = inventarios::find($id);
        return view('inventarios.edit',compact('inventarios'));
    }

    //Actulaizar
    public function update(Request $request, $id)
    {
       
        $datosinventarios=request()->except(['_token','_method']); //


 if ($request->hasFile('imagen')){

    $inventarios=inventarios::findOrFail($id);

        Storage::delete('public/'.$inventarios->imagen);

       
        $datosinventarios['imagen']=$request->file('imagen')->store('uploads','public');
        }

        inventarios::where('id','=',$id)->update($datosinventarios);


    
        return redirect('inventarios')->with('mensaje','Producto modificado con exito');


    }

    //Borrar
    public function destroy($id)
    {
        $inventarios = inventarios::find($id);
        $inventarios->delete();

        return redirect()->route('inventarios.index');
        
    }

   /* //Función para exportar en PDF
    public function exportarPDF(){
        $servicios = Servicio::all();
        $pdf = App::make('dompdf.wrapper');
        $vista = View::make('servicios.pdf',compact('servicios'))->render();
        $pdf->loadHTML($vista);
        return $pdf->download('servicios');
    } */

    /*//Función para exportar en Excel
    public function exportarExcel(){
        Excel::create('servicios',function($excel){
            $excel->sheet('servicios',function($sheet){
                $servicios = Servicio::select('nombre','descripcion','precio')->get();
                $sheet->fromArray($servicios);
            });
        })->export('xlsx');
    }

    //Función para importar en Excel
    public function importarExcel(Request $request){
        //Validar tipo de archivo

        // este campo no se esta cumpliendo
        $request->validate([
            'archivo'=>'required|mimes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ]);
        // 
       

        //Subir el archivo a la carpeta publica
        $archivo = $request->file('archivo');
        
        //Importación
        Excel::load($archivo,function($reader){
            foreach($reader->get() as $servicio){
                Servicio::create([
                    'nombre'=>$servicio->nombre,
                    'descripcion'=>$servicio->descripcion,
                    'precio'=>$servicio->precio
                ]);
            }
        });

        return redirect()->route('servicios.index');
    }*/
}