<?php namespace SaarangSlt\Repositories\MoneyChangerRepository;


/**
 * EloquentMoneyChangerRepository.php.
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 9/20/14 17:28 PM
 */

use SaarangSlt\Validators\MoneyChangerValidator;

class EloquentMoneyChangerRepository implements MoneyChangerRepositoryInterface{

	public function __construct(MoneyChangerValidator $validator){
        $this->validator  = $validator;
    }

    public function all()
    {
        return \MoneyChanger::all();
    }


    public function findById( $userID )
    {
        return \MoneyChanger::findOrFail( $userID );
    }

    public function createNewMoneyChanger( $attributes ){
        $this->validator->validate($attributes);
        return \MoneyChanger::create($attributes);
    }

    public function updateMoneyChanger( $moneyChangerID, $attributes ){
    	
    }

    public function deleteMoneyChanger( $moneyChangerID ){
    	
    }



}