<?php
/**
 * EloquentCustomerRepository.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/16/14 9:51 PM
 */

namespace SaarangSlt\Repositories\CustomerRepository;


class EloquentCustomerRepository implements CustomerRepositoryInterface
{

    function all()
    {
        // TODO: Implement all() method.
    }

    function findById( $id )
    {
        // TODO: Implement findById() method.
    }

    public function createNewCustomer( $customerAttributes, $accounts, $contactsDetails, $addresses )
    {
        $customer = new \Customer();
        $customer->fill( $customerAttributes );
        $customer->save();

        $this->addAccountToCustomer( $customer->getKey(), $accounts );
        $this->addContactDetailsToCustomer( $customer->getKey(), $contactsDetails );
        $this->addAddressToCustomer( $customer->getKey(), $addresses );


    }

    public function addAccountToCustomer( $customerID, $accounts )
    {
       if(empty($accounts)) return;
        foreach ($accounts as $account) {
            $newAccount = new \CustomerBankAccount();
            $newAccount->fill( $account );
            $newAccount->customer_id = $customerID;
            $newAccount->save();
        }
    }

    public function addContactDetailsToCustomer( $customerID, $contacts )
    {
        if(empty($contacts)) return;
        foreach ($contacts as $contact) {
            $newContact = new \CustomerContactDetail();
            $newContact->fill( $contact );
            $newContact->customer_id = $customerID;
            $newContact->save();
        }
    }

    public function addAddressToCustomer( $customerID, $addresses )
    {
        if(empty($addresses)) return;
        foreach ($addresses as $address) {
            $newAddress = new \CustomerAddress();
            $newAddress->fill( $address );
            $newAddress->customer_id = $customerID;
            $newAddress->save();
        }
    }


}