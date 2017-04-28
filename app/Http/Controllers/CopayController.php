<?php

namespace App\Http\Controllers;

use App\copay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class CopayController extends Controller
{
  public function index ()
  {
    $copayCards = copay::all();
    return Response::json($copayCards);
  }

  public function show ($id)
  {
    $copayCard = copay::find($id);
    return Response::json($copayCard);
  }

  public function update (Request $request, $id)
  {
    $copayCard = copay::find($id);
    $copayCard->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function create (Request $request)
  {
    $copayCard = copay::create($request->all());
    return Response::json(['created' => true]);
  }

  public function destroy ($id)
  {
    $copayCard = copay::find($id);
    $copayCard->delete();
    return Response::json(['deleted' => true]);
  }
  }
