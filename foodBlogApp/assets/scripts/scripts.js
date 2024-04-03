const first_name = document.querySelector("#fname");
const last_name = document.querySelector("#lname");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const confirm_password = document.querySelector("#confirmPassword");
const signupBtn = document.querySelector("[id = 'signupBtn']")
const form = document.querySelector('form');


// console.log(first_name, " ", last_name, " ", email, " ", password, " ", confirm_password, " ", signupBtn);

// console.log("\n", form);

console.log("Hello");

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();  
});

// const inputGroup =  document.querySelector(".form-control").parentElement;
// const errorDisplay = inputGroup.querySelector(".error");
console.log( document.querySelector(".error"));

// console.log(errorDisplay.innerText, " error ");
const setError = (element, message) => {

    const inputGroup = element.parentElement;
    const errorDisplay = inputGroup.querySelector(".error");

    errorDisplay.innerText = message;
    inputGroup.classList.add('error');
    inputGroup.classList.remove('success');

};

const setSuccess= element => {
    const inputGroup = element.parentElement;
    const errorDisplay = inputGroup.querySelector('.error');
    errorDisplay.innerText = " ";
    inputGroup.classList.add('success');
    inputGroup.classList.remove('error');

};


const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return re.test(String(email).toLowerCase());
}


const isValidPassword = password => {
    // Match passwords with at least 8 characters, including at least one uppercase letter, one lowercase letter, one digit, and one special character
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$/;
    return passwordRegex.test(password);
};

const validateInputs = () => {
    const first_nameValue = first_name.value.trim();
    const last_nameValue = last_name.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const confirm_passwordValue = confirm_password.value.trim();

    if (first_nameValue == "") {
         setError(first_name, "First Name is required");
    } else {
        setSuccess(first_name);
    }

    if (last_nameValue == "") {
         setError(last_name, "Last Name is required");
    } else {
        setSuccess(last_name);
    }

    if (emailValue == "") {
         setError(email, "Email is required");
    } else if (!isValidEmail(emailValue)) {
        setError(email, "provide a valid email address");
    } else {
        setSuccess(email);
    }

    if (passwordValue == "") {
         setError(password, "Password is required");
         
    } else if (isValidEmail(passwordValue)) {
        setError(password, "Password must contain at least 8 characters of one uppercase letter, lowercase letter, a digit and one special character")
    } 
    
    
    else if (passwordValue.length < 8) {
        setError(password, "Password must be at least 8 characters");

    } else {
        setSuccess(password);
    }

    if (confirm_passwordValue === "") {
        setError(confirm_password, "Please confirm Password");
    } else if (confirm_passwordValue !== passwordValue) {
        setError(confirm_password, "Password doesn't match");
    } else {
        setSuccess(confirm_password);
    }



};




// Example usage:
// const password1 = "MyPa$$w0rd";
// const password2 = "weakpassword";
// console.log(isValidPassword(password1)); // Output: true
// console.log(isValidPassword(password2)); // Output: false
