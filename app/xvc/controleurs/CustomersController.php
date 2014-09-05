<?php
/**
 * UsersController.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 4:15 PM
 */
use SaarangSlt\Repositories\CustomerRepository\CustomerRepositoryInterface;
class CustomersController extends \BaseController {


    /**
     * @var CustomerRepositoryInterface
     */
    private $customer;

    public function __construct(CustomerRepositoryInterface $customer){

        $this->customer = $customer;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        return View::make('customers.createCustomer');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		sleep(2);
        $personalDetails = array_except(Input::get('personalDetails'), array('country') );
        $accounts = Input::get('accounts');
        $contacts = Input::get('contacts');
        $addresses = Input::get('addresses');
        $senders = Input::get('senders');
        $this->customer->createNewCustomer($personalDetails,$accounts,$contacts,$addresses,$senders);
        return array('status' => 'success','message' => Lang::get('messages.customer.create-success', array('customer' => 'محمد رضا سلطانی')));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
