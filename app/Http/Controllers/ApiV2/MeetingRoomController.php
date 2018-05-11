<?php namespace App\Http\Controllers\ApiV2;

use App\Http\Controllers\Controller;
use App\Models\MeetingRoom;
use Illuminate\Support\Facades\Input;

class MeetingRoomController extends Controller
{
  public function index()
  {
    $rows = MeetingRoom::all();
    return response()->json($rows);
  }

  public function update($id) {
    $room = MeetingRoom::find($id);
    $input = Input::all();
    $room->update( $input );
    return response()->json([
      'status'=>'ok'
    ]);
  }

  public function store() {
    $input = Input::all();
    $room = MeetingRoom::create($input);
    return response()->json([
      'status'=>'ok'
    ]);
  }

  public function destroy($id)
  {
    MeetingRoom::whereId($id)->delete();
    return response()->jsoN([
      'status'=>'ok'
    ]);
  }
}
