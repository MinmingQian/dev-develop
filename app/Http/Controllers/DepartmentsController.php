<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Room;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $departments = Department::all();


        return view('departments.dp_index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //fetch the department object by using the department_id
        $department = Department::find($id);

        if (is_null($department))
            abort(404);


        //fetch all the rooms in the department by using the department id
        $rooms = Room::where('department_id', '=', $id)->get();


        //fetch guess like rooms
        //$guesses = Department::where('size', '<', $department->size)->with(1)->get();
        $guesses = Department::all();


        return view('departments.dp_detail')->with( array(
                'department' => $department,
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
}
