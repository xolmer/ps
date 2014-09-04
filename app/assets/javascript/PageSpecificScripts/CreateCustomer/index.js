var PageScript = require('./CreateCustomer');
var Validator = require('./CreateCustomerFormValidator');

module.exports = function () {
    Validator();
    PageScript();
}