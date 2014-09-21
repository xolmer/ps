<?php namespace SaarangSlt\Repositories\MoneyChangerRepository;



/**
 * MoneyChangerRepositoryInterface.php.
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 9/20/14 17:25 PM
 */

use SaarangSlt\Repositories\BaseRepositoryInterface;

interface MoneyChangerRepositoryInterface extends BaseRepositoryInterface {

	public function createNewMoneyChanger( $attributes );

    public function updateMoneyChanger( $moneyChangerID, $attributes );

    public function deleteMoneyChanger( $moneyChangerID );

    

}