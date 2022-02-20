<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class AgendaController extends Controller
{
    public function getAgenda()
    {
        $agenda = Http::withToken('31|14gfAJHaXv6qU3x4WwxAwE8TuTdXVEFbGimMly8S')->get('https://kominfo.kotabogor-api.my.id/Agenda');
        return view('agenda', ['data' => $agenda['Agenda']]);
    }

    public function getIdAgenda($id)
    {
        $Agenda = Http::withToken('31|14gfAJHaXv6qU3x4WwxAwE8TuTdXVEFbGimMly8S')->get('https://kominfo.kotabogor-api.my.id/Agenda/'.$id);
        return view('edit', ['data' => $Agenda['Agenda']]);
    }

    public function postAgenda(Request $request)
    {
        $Agenda = Http::withToken('31|14gfAJHaXv6qU3x4WwxAwE8TuTdXVEFbGimMly8S')->post('https://kominfo.kotabogor-api.my.id/AgendaCrt', [
            'hari' => $request->hari,
            'tgl' => $request->tgl,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'kegiatan' => $request->kegiatan,
            'user_id' => $request->user_id
        ]);

        return redirect('/Agenda');
    }

    public function editAgenda(Request $request, $id)
    {
        $response = Http::withToken('31|14gfAJHaXv6qU3x4WwxAwE8TuTdXVEFbGimMly8S')->put('https://kominfo.kotabogor-api.my.id/AgendaUpd/'.$id, [
            'hari' => $request->hari,
            'tgl' => $request->tgl,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'kegiatan' => $request->kegiatan,
            'user_id' => $request->user_id
        ]);

        return redirect('/Agenda');
    }

    public function deleteAgenda($id)
    {
        $Agenda = Http::withToken('31|14gfAJHaXv6qU3x4WwxAwE8TuTdXVEFbGimMly8S')->delete('https://kominfo.kotabogor-api.my.id/AgendaDest/'.$id);
        return redirect('/Agenda');
    }
}