// Form Validation

const nameEl = document.querySelector("#form-name");
const companyNameEl = document.querySelector("#form-company");
const emailEl = document.querySelector("#form-email");
const phoneEl = document.querySelector("#form-telephone");
const messageEl = document.querySelector("#form-message");
const btnClose = document.querySelector(".close");

const errorValidation = document.querySelector(".error-validating");
const successValidation = document.querySelector(".success-validating");

const form = document.querySelector("#contact-form");

const isRequired = value => value === "" ? false : true; // function returns false if value string is empty, otherwise returns true (if statement shorthand)

const isNameValid = (name) => {
    const regex = /^[A-Za-z\s-]+$/;
    return regex.test(name);
}

const isEmailValid = (email) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}

const isPhoneValid = (number) => {
    
    
    const  regex = /^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/

    return regex.test(number);
}

const showError = (input) => {
    // getting form-field element
    const formField = input.parentElement;
    
    //adding error class
    formField.classList.remove("success");
    formField.classList.add("error");
}

const showSuccess = (input) => {
    //get the form-field element
    const formField = input.parentElement;

    //remove the success class
    formField.classList.remove("error");
    formField.classList.add("success");
}

const checkName = () => {
    let valid = false;

    const name = nameEl.value;

    if (!isRequired(name) || !isNameValid(name))
    {
        showError(nameEl)
    }
    else
    {
        showSuccess(nameEl);
        valid = true;
    }

    return valid;
}

const checkMessage = () => {
    let valid = false;

    const message = messageEl.value;

    if (!isRequired(message))
    {
        showError(messageEl);
    }
    else
    {
        showSuccess(messageEl);
        valid = true;
    }

    return valid;
}

const checkEmail = () => {
    let valid = false;

    const email = emailEl.value.trim();
    console.log(email);

    
    if (!isEmailValid(email))
    {
        showError(emailEl);
    }
    else
    {
        showSuccess(emailEl);
        valid = true;
    }

    return valid;
}

const checkPhoneNumber = () => {
    let valid = false;

    const phoneNumber = phoneEl.value.trim();
    console.log(phoneNumber);

    if (!isPhoneValid(phoneNumber))
    {
        showError(phoneEl);
    }
    else
    {
        showSuccess(phoneEl);
        valid = true;
    }

    return valid;
}

btnClose.addEventListener("click", function (e) {
    e.preventDefault();

    if (errorValidation != null)
    {
        e.target.closest('div.error-validating').remove();
    }
    
    if (successValidation != null)
    {
        e.target.closest('div.success-validating').remove();
    }
    
})






/*form.addEventListener("submit", function (e){
    e.preventDefault();

    let isNameValid = checkName(),
        isEmailValid = checkEmail(),
        isPhoneValid = checkPhoneNumber(),
        isMessageValid = checkMessage();

    let isFormValid = isNameValid
                    && isEmailValid
                    && isPhoneValid
                    && isMessageValid;

    if (isFormValid)
    {
       //PHP code will go here. 
    }
})*/


// Instant Feedback on inputs

form.addEventListener("input", function (e){
    switch (e.target.id)
    {
        case "form-name":
            checkName();
            break;

        case "form-email":
            checkEmail();
            break;

        case "form-telephone":
            checkPhoneNumber();
            break;

        case "form-message":
            checkMessage();
            break;

        
            

    }
})