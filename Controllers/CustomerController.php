<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Http\Requests\CustomerRequest;
use Redirect;
use Input;
use Form;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			$data['daftar_customer'] = Customer::all();
			return view('customer/list', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('customer/add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CustomerRequest $request)
	{
		$cust = new Customer();
		$cust->email = Input::get('email');
		$cust->name = Input::get('name');
		$cust->phone = Input::get('phone');
		$cust->address = Input::get('address');
		$cust->save();

		return Redirect::to('customers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data['data_customer'] = Customer::find($id);
		return view('customer/detail', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['data_customer'] = Customer::find($id);
		return view('customer/edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cust = Customer::find($id);
		$cust->email = Input::get('email');
		$cust->name = Input::get('name');
		$cust->phone = Input::get('phone');
		$cust->address = Input::get('address');
		$cust->save();

		return Redirect::to('customers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cust = Customer::find($id);
		$cust->delete();

		return Redirect::to('customers');
	}

}
