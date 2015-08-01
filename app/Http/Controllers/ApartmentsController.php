<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Room;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use Faker\Provider\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Request;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $apartments = Apartment::all();

        return view('apartments.dp_index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		return view('apartments.dp_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //

//        $this->validate($request, [
//            'title' => 'required|unique:posts|max:255',
//            'body' => 'required',
//        ]);



        $rules = array(
            'depname' => 'required',
            'depsize' => 'required',
            'depadd' => 'required',
            'depdes' => 'required',
            'deplevel' => 'required',
            'deprenttime' => 'required',
            'depdeposit' => 'required',
            'depprice' => 'required',
            'depintro' => 'required',
            'deppic' => 'required',
            'roomname' => 'required',
            'roomsize' => 'required',
            'roomori' => 'required',
            'roomac' => 'required',
            'roomtv' => 'required',
            'roomtoilet' => 'required',
            'roomkit' => 'required',
            'roomimg' => 'required',
            'roomrenttime' => 'required'
        );

        $userid = Auth::id();


        $validator = Validator::make(Input::all(), $rules);


        if($validator->fails())
        {
            $message = $validator->messages();

            return Redirect::to('apartments/add')->withErrors($message);
        }else {


            $input = Request::all();

            $apartment = new Apartment;

            $apartment->user_id = $userid;
            $apartment->name = $input['depname'];
            $apartment->size = $input['depsize'];
            $apartment->address = $input['depadd'];
            $apartment->description = $input['depdes'];
            $apartment->level = $input['deplevel'];
            $apartment->min_rent_time = $input['deprenttime'];
            $apartment->deposit = $input['depdeposit'];
            $apartment->price = $input['depprice'];
            $apartment->introduction = $input['depintro'];

            $apartment->save();

            $file2 = $input['deppic'];
            $destinationPath2 = base_path() . '/public/images/apartment/';
            $extension2 = $file2->getClientOriginalExtension();
            $fileName2 = $apartment->id . '.' . $extension2;
            $file2->move($destinationPath2, $fileName2);
            $apartment->pic = '/images/apartment/' . $fileName2;
            $apartment->save();


            if(isset($input['roomac'])) {
                $idincres = $input['roomac'];
//                for ($idincre = 1; $idincre <= 10; $idincre++) {
                    foreach ($idincres as $key => $idincre) {
//                    if (isset($input['roomac'][$idincre])) {
                        //
                        $room = new Room;
                        $room->apartment_id = $apartment->id;
                        $room->air_condition = $input['roomac'][$key];
                        $room->name = $input['roomname'][$key];
                        $room->tv = $input['roomtv'][$key];
                        $room->toilet = $input['roomtoilet'][$key];
                        $room->kitchen = $input['roomkit'][$key];
                        $room->room_pic = $input['roomimg'][$key];
                        $room->orientation = $input['roomori'][$key];
                        $room->size = $input['roomsize'][$key];
                        $room->min_rent_time = $input['roomrenttime'][$key];

                        $room->save();
                        $file = $input['roomimg'][$key];
                        $destinationPath = base_path() . '/public/images/room/';
                        $extension = $file->getClientOriginalExtension();
                        $fileName = $room->id . '.' . $extension;
                        $file->move($destinationPath, $fileName);
                        $room->room_pic = '/images/room/' . $fileName;
                        $room->save();
//                    } else {
//                        break;
//                    }
                }
            }

			return redirect('apartments/'.$apartment->id);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //fetch the apartment object by using the apartment_id
        $apartment = Apartment::find($id);

        if (is_null($apartment))
            abort(404);


        //fetch all the rooms in the apartment by using the apartment id
        $rooms = Room::where('apartment_id', '=', $id)->get();


        //fetch guess like rooms,search the rooms nearby
        $guesses = Apartment::where('location_x', '<', $apartment->location_x + 10)->
            where('location_y', '<', $apartment->location_y + 10)->
            take(4)->
            get();
        //$guesses = Apartment::all();


        return view('apartments.dp_detail')->with( array(
                'apartment' => $apartment,
                'rooms' => $rooms,
                'guesses' => $guesses
            )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


	/**
	 *
	 * @return Response
	 */
	public function search()
	{
		$ss = Input::get("searchString");

		$apartments = Apartment::where("name","like", "%".$ss."%")
			->orWhere("description","like", "%".$ss."%")
			->orWhere("address","like", "%".$ss."%")
			->orWhere("introduction","like", "%".$ss."%")
			->get();

		return view('apartments.dp_search')->with( array(
				'apartments' => $apartments,
				'searchString' => $ss,
			)
		);
	}


	/**
	 *
	 * @return Response
	 */
	public function recommend()
	{
		$apartments = Apartment::takeRandom(12)
			->get();

		return view('home', compact('apartments'));
	}


}
