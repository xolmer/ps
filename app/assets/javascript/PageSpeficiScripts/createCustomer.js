//createCustomer page takes advantage of knockout.js in step two of the wizard.
//User can create unlimited number of accounts for each the customer.


$(document).ready(function () {



    //Account model
    var Account = function (id) {
        this.id = id;
        this.country_id = ko.observable(158);
        this.bank_name = ko.observable("");
        this.account_holder_name = ko.observable("");
        this.account_number = ko.observable("");
        this.remarks = ko.observable("");
        this.country = ko.computed(function () {
            var country = $('#' + this.id).find('select option[value=' + this.country_id() + ']').text();
            return country;
        }, this);
        this.label = ko.computed(function () {
            return this.country() + (this.bank_name() ? ' -  ' + this.bank_name() : '');
        }, this);

    }
    Account.prototype.toJSON = function() {
        var copy = ko.toJS(this); //easy way to get a clean copy
        delete copy.country; //remove an extra property
        delete copy.label;
        delete copy.id;
        return copy; //return the copy to be serialized
    }

    var Contact = function (id) {
        this.id = id;
        this.country_id = ko.observable(158);
        this.mobile_number = ko.observable('');
        this.phone_number = ko.observable('');
        this.fax_number = ko.observable('');
        this.country = ko.computed(function () {
            var country = $('#' + this.id).find('select option[value=' + this.country_id() + ']').text();
            return country;
        }, this);
        this.label = ko.computed(function () {
            return  this.country() + (this.mobile_number() ? ' -  ' + this.mobile_number() : '');
        }, this);

    }

    Contact.prototype.toJSON = function() {
        var copy = ko.toJS(this); //easy way to get a clean copy
        delete copy.country; //remove an extra property
        delete copy.label;
        delete copy.id;
        return copy; //return the copy to be serialized
    }

    var Address = function (id) {
        this.id = id;
        this.country_id = ko.observable(158);
        this.address = ko.observable();
        this.label = ko.computed(function () {
            return  $('#' + this.id).find('select option[value=' + this.country_id() + ']').text();
        }, this);
    }

    Address.prototype.toJSON = function() {
        var copy = ko.toJS(this); //easy way to get a clean copy
        delete copy.label;
        delete copy.id;
        return copy; //return the copy to be serialized
    }


    //ViewModel
    var AppViewModel = function () {
        var self = this;
        self.availableBankNames = [];
        self.isSaving = ko.observable(false);
        self.isSaved = ko.observable(false);
        self.customerCreated = ko.observable(false);
        self.responseStatus = ko.observable();
        self.responseMessage = ko.observable();

        self.addNewAccount = function () {
            //Create an empty account and push it to available accounts
            self.accounts.push(new Account(self.makeID()));
            //Enable auto-complete on all bank-inputs
            $(".bank_name").autocomplete({
                source: self.availableBankNames
            });
        };

        self.removeAccount = function (account) {
            self.accounts.remove(account);
        }


        self.addNewContact = function () {
            self.contacts.push(new Contact(self.makeID()));
        }

        self.removeContact = function (contact) {
            self.contacts.remove(contact);
        }

        self.addNewAddress = function () {
            self.addresses.push(new Address(self.makeID()));
        }

        self.removeAddress = function (address) {
            self.addresses.remove(address);
        }


        self.init = function () {
            //request server to get a list bank names previously added to the system and use it
            //as the data source for auto complete.
            $.getJSON('/helpers/banknames', function (data) {
                self.availableBankNames = data;
            });
        }

        self.makeID = function () {
            //Create a new unix timestamp to use as unique identifier for each model
            return 'SLT' + Date.now();
        }


        self.ccFormSubmitHandler = function () {
            //Display the spinner by changing the state to isSaving
            self.isSaving(true);
            self.isSaved(false);
            var customerSummary = $('div.wizard-summary');
            var form = $('form#create-customer-form');
            var url = form.prop('action');


            customerSummary.slideUp('slow');

            //convert the MV object to JSON to get rid of its methods
            var newCustomerData = ko.toJSON(self);
            //convert it back to js object to send with ajax post request
            newCustomerData = jQuery.parseJSON(newCustomerData);

            console.log(newCustomerData);
            $.post(url, newCustomerData)
                .done(function(response){
                    self.responseStatus(response.status);
                    self.responseMessage(response.message);
                    self.customerCreated(true);
                })
                .fail(function (jqXHR) {
                    console.log(jqXHR);
                    self.responseStatus(jqXHR.responseJSON.status);
                    self.responseMessage(jqXHR.responseJSON.message);
                })
                .always(function(){
                    self.isSaving(false);
                    self.isSaved(true);
                })

        }


        self.accounts = ko.observableArray([]);
        self.contacts = ko.observableArray([]);
        self.addresses = ko.observableArray([]);
        self.personalDetails = {
            first_name: ko.observable(""),
            last_name: ko.observable(""),
            fathers_name: ko.observable(""),
            national_id: ko.observable(""),
            passport_number: ko.observable(""),
            email_address : ko.observable(""),
            country_of_residence_id: ko.observable(158),
            remarks : ko.observable("")
        };

        self.personalDetails.country = ko.computed(function () {
            var selector = '#country option[value=' + self.personalDetails.country_of_residence_id() + ']';
            var country = $(selector).text();
            return country;
        });


        self.init();
    }

    //Out custom binding handler to display a bound value or '-' if its empty
    ko.bindingHandlers.displayIfExists = {
        update: function (element, valueAccessor) {
            var value = ko.unwrap(valueAccessor());
            value = typeof(value) == 'string' ? value.trim() : value;
            $(element).text(value || '_');
        }
    };
    //Apply bindings to the page
    ko.applyBindings(new AppViewModel());


})
