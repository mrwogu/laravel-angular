<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
		return response()->json(Auth::user()->todos()->orderBy('id', 'DESC')->get());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$d = new Todo();
		$d->fill($request->all());
		$d->user_id = Auth::user()->id;
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
		return response()->json(Todo::where('user_id' , Auth::user()->id)->findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$todo = Todo::where('user_id' , Auth::user()->id)->findOrFail($id);
		$todo->fill($request->all());
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
		$d = Todo::where('user_id' , Auth::user()->id)->findOrFail($id);
		$d->delete();
		return response()->json(['status' => 'deleted']);
	}

	public function removeAll()
	{
		$deletedRows = Todo::where('user_id' , Auth::user()->id)->where('completed', true)->delete();
		return response()->json(['deleted' => $deletedRows]);
	}

}
