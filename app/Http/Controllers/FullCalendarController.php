<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FullCalendarController extends Controller
{
    public function index()
    {
        /* if(request()->ajax()) 
        {
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return response()->json($data);
        }
        
        return view('fullcalendar'); */
        if (request()->ajax()) {
            $start = Carbon::now()->startOfMonth(); // Comienzo del mes actual
            $end = Carbon::now()->endOfMonth()->addMonths(2); // Fin del mes actual + 2 meses
    
            $events = Event::where('end', '>=', $start)->where('start', '<=', $end)->get(['id', 'title', 'start', 'end']);
    
            return response()->json($events);
        }
    
        $start = Carbon::now()->startOfMonth()->toDateString(); // Comienzo del mes actual en formato de cadena
        $end = Carbon::now()->endOfMonth()->addMonths(2)->toDateString(); // Fin del mes actual + 2 meses en formato de cadena
        //$dato = Event::where('end', '>=', $start)->where('start', '<=', $end)->get(['id', 'title', 'start', 'end']);
        $dato = Event::where('end', '>=', $start)
    ->where('start', '<=', $end)
    ->select('title', 'start', 'end')
    ->get()
    ->map(function ($event) {
        return [
            'title' => $event->title,
            'start' => $event->start,
            'end' => $event->end,
        ];
    })
    ->toArray();;
 
        //dd($dato);
        //return response()->json($eve);
        //return view('fullcalendar');
        return response()->view('fullcalendar', compact('dato'));
    }
    //use Illuminate\Http\JsonResponse;
    public function create(Request $request)
    {
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $event = Event::insert($insertArr);   
        return response()->json($event);
        /* try {
            //
        } catch (\Exception $e) {
            //return response()->json(['error' => $e->getMessage()], 500);
            return new JsonResponse(['error' => $e->getMessage()], 500);
        } */
    }

    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return response()->json($event);
    }

    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();
   
        return response()->json($event);
    }

    public function calendario()
    {
        return view('users.calendario');
    }
}
