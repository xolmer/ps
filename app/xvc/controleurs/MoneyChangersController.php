<?php

/**
 * MoneyChangersController.php.
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 9/20/14 17:15 PM
 */

use SaarangSlt\Repositories\MoneyChangerRepository\MoneyChangerRepositoryInterface;

Class MoneyChangersController extends BaseController {
	
	protected $mc;

	public function __construct(MoneyChangerRepositoryInterface $mc){

		$this->mc = $mc;
		
	}


	public function index()
    {
        $moneyChangers = $this->mc->all();

        return View::make('moneychangers.moneyChangersIndex')->with('moneyChangers', $moneyChangers);
    }


    public function create(){
    	return View::make('moneychangers.moneyChangersCreate');
    }

    public function store(){

    	$moneychanger = $this->mc->createNewMoneyChanger(Input::all());

        Flash::success(Lang::get('messages.moneychanger.create-success', array(
            'name' => $moneychanger->name,
        )));

        return Redirect::route('moneychangers.index');
    }

}