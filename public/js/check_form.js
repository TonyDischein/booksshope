var form = document.querySelector('#form');
var  validateBtn = form.querySelector('.btn_submit');

var  login = form.querySelector('.login');
var  password = form.querySelector('.password');

var fields = form.querySelectorAll('.rfield');

var generateError = function (text) {
    var error = document.createElement('div')
    error.className = 'input_error'
    error.style.color = 'red'
    error.style.position = 'absolute'
    error.style.bottom = '-6px'
    error.innerHTML = text
    return error
};

var checkFieldsPresence = function () {
    for (var i = 0; i < fields.length; i++) {
        if (!fields[i].value) {
            var error = generateError('Поле обязательно')
            form[i].parentElement.insertBefore(error, fields[i])
        }
    }
    if (error) return false;

    return true;
}

var removeValidation = function () {
    var errors = form.querySelectorAll('.input_error')

    for (var i = 0; i < errors.length; i++) {
        errors[i].remove()
    }
}


form.addEventListener('submit', function (event) {
    event.preventDefault();

    removeValidation()

   if(checkFieldsPresence()) {
       form.submit();

   }
});