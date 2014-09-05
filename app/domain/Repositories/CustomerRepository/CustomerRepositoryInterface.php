<?php
/**
 * CustomerRepositoryInterface.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/16/14 9:51 PM
 */

namespace SaarangSlt\Repositories\CustomerRepository;

use SaarangSlt\Repositories\BaseRepositoryInterface;

interface CustomerRepositoryInterface extends BaseRepositoryInterface
{

    public function createNewCustomer($customer, $accounts, $contactsDetails, $addresses, $senders);

    public function addAccountToCustomer($customerID, $accounts);

    public function addContactDetailsToCustomer($customerID, $contacts);

    public function addAddressToCustomer($customerID, $address);

    public function addSenderToCustomer($coustomerID, $sender);

}