<div class="wizard-summary">
    <div class="row">
        <div class="col-md-12">
            <h3 class="center farsi-content ">{{Lang::get('words.personalDetails')}}</h3>
            <table class="table farsi table-bordered table-condensed">
                <thead>
                <tr>
                    <th>{{Lang::get('words.first_name')}}</th>
                    <th>{{Lang::get('words.last_name')}}</th>
                    <th>{{Lang::get('words.fathers_name')}}</th>
                    <th>{{Lang::get('words.email_address')}}</th>
                    <th>{{Lang::get('words.national_id')}}</th>
                    <th>{{Lang::get('words.passport_number')}}</th>
                    <th>{{Lang::get('words.country_of_residence')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-bind="displayIfExists:personalDetails.first_name"></td>
                    <td data-bind="displayIfExists:personalDetails.last_name"></td>
                    <td data-bind="displayIfExists:personalDetails.fathers_name"></td>
                    <td data-bind="displayIfExists:personalDetails.email_address"></td>
                    <td data-bind="displayIfExists:personalDetails.national_id"></td>
                    <td data-bind="displayIfExists:personalDetails.passport_number"></td>
                    <td data-bind="displayIfExists:personalDetails.country"></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <!-- ko if:accounts().length -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="center farsi-content ">{{Lang::get('words.bankAccountDetails')}}</h3>

            <table class="table table-condensed farsi table-bordered">
                <thead>
                <tr>
                    <th>{{Lang::get('words.country')}}</th>
                    <th>{{Lang::get('words.bank_name')}}</th>
                    <th>{{Lang::get('words.account_holder_name')}}</th>
                    <th>{{Lang::get('words.account_number')}}</th>
                    <th>{{Lang::get('words.remarks')}}</th>
                </tr>
                </thead>
                <tbody data-bind="foreach:accounts">
                <tr>
                    <td data-bind="displayIfExists:country"></td>
                    <td data-bind="displayIfExists:bank_name"></td>
                    <td data-bind="displayIfExists:account_holder_name"></td>
                    <td data-bind="displayIfExists:account_number"></td>
                    <td data-bind="displayIfExists:remarks"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /ko -->
    <!--ko if:contacts().length-->
    <div class="row">
        <div class="col-md-12">
            <h3 class="center farsi-content ">{{Lang::get('words.contactDetails')}}</h3>

            <table class="table farsi table-bordered">
                <thead>
                <tr>
                    <th>{{Lang::get('words.country')}}</th>
                    <th>{{Lang::get('words.mobile_number')}}</th>
                    <th>{{Lang::get('words.phone_number')}}</th>
                    <th>{{Lang::get('words.fax_number')}}</th>
                </tr>
                </thead>
                <tbody data-bind="foreach:contacts">
                <tr>
                    <td data-bind="displayIfExists:country"></td>
                    <td data-bind="displayIfExists:mobile_number"></td>
                    <td data-bind="displayIfExists:phone_number"></td>
                    <td data-bind="displayIfExists:fax_number"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ko-->
    <!-- ko if:addresses().length -->
    <div class="row">
        <div class="col-md-12">

            <table class="table farsi table-bordered">
                <caption>
                    <h3 class="center farsi-content ">{{Lang::get('words.addressDetails')}}</h3>
                </caption>
                <thead>
                <tr>
                    <th>{{Lang::get('words.country')}}</th>
                    <th>{{Lang::get('words.address')}}</th>
                </tr>
                </thead>
                <tbody data-bind="foreach:addresses">
                <tr>
                    <td data-bind="displayIfExists:label"></td>
                    <td data-bind="displayIfExists:address"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /ko -->
</div>

<div class="row">
    <div class="col-md-12">
        <div class="center" style="min-height:200px;">
            <br/>

            <div data-bind="visible:isSaving" style="margin:100px;">
                <img src="/assets/images/preloaders/circlesMedium.gif" alt=""/>
                <br/>

                <p class="farsi">{{Lang::get('phrases.pleaseWait')}}</p>
            </div>

            <!--     ko if:isSaved -->
            <div>
                <!-- ko if:responseStatus()=="success" -->
                    <div class="alert alert-success farsi" >
                        <span data-bind="html:responseMessage"></span>
                        <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                    </div>
                <!-- /ko -->

                <!-- ko if:responseStatus()=="failed" -->
                <div class="alert alert-danger farsi" >
                    <span data-bind="html:responseMessage"></span>
                    <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                </div>
                <!-- /ko -->
            </div>
            <!-- /ko -->

            <!-- ko ifnot:customerCreated -->
            <button class="btn btn-primary btn-lg farsi btn-icon" id="ccFormSubmitButton"
                    data-bind="event: { click: ccFormSubmitHandler}">
                <i class="entypo-list-add" style="font-size: 14px;"></i>
                {{Lang::get('ui.buttons.confirmAndCreateCustomer')}}
            </button>
            <!-- /ko -->
        </div>
    </div>
</div>