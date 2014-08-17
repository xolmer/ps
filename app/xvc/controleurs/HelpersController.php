<?php
/**
 * HelpersController.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/11/14 8:27 PM
 */

class HelpersController extends BaseController{

    public function getBankNames( ){
       return CustomerBankAccount::distinct('bank_name')->lists('bank_name');
    }
} 