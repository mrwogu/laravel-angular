<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(Todo::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$d = new Todo();
		$d->completed = false;
		$d->title = $request->input('title');
		$d->save();

		return response()->json($d);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return response()->json(Todo::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$todo = Todo::find($id);
		$todo->title = \Input::get('title');
		$todo->completed = \Input::get('completed');
		$todo->save();

		return response()->json($todo);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$d = Todo::find($id);
		$d->delete();
		return response()->json(['status' => 'deleted']);
	}

	public function removeAll()
	{
		$deletedRows = Todo::where('completed', true)->delete();
		return response()->json(['deleted' => $deletedRows]);
	}

}
