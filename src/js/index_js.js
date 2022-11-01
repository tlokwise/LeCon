//GLOBAL VARIABLES TO BE USED
const signInBtn = document.querySelector('#sign-in-popup-btn');
const signUpBtn = document.querySelector("#sign-up-popup-btn");
const createNewAccBtn = document.querySelector("#create-new-acc-btn");
const centerDiv = document.querySelector('.center')



//FUNCTIONS AND EVENT LISTENERS

//signin popup form button function
function signInPopup() {
    if(document.querySelector('.sign-up-form') != null){
        document.querySelector('.sign-up-form').remove();
    }
    else if(centerDiv != null){
        centerDiv.remove();
    }
    signInBtn.disabled = true;
    signUpBtn.disabled = false;
    const signInForm = `<form class="sign-in-form">
        <h1 class="header-text">||| Le<span class="lecon">Con |||</span></h1>
        <input type="email" name="email" id="email" placeholder="example@email.com" autocomplete="off" required>
        <input type="password" name="pwd" id="pwd" placeholder="Password" required>
        <button type="submit" id="sign-in-btn">Sign in</button>
        <hr>
        <div class="other-links">
            <button type="button">Create New Account</button>
            <a href="#">Forgot password?</a>
        </div>
    </form>`;
    document.body.insertAdjacentHTML("beforeend", signInForm);
}
signInBtn.addEventListener('click', signInPopup);


//signup form popup button function
function signUpPopup() {
    if( document.querySelector('.sign-in-form') != null){
        document.querySelector('.sign-in-form').remove();
    }
    else if(centerDiv != null){
        centerDiv.remove();
    }
    signInBtn.disabled = false;
    signUpBtn.disabled = true;

    const signUpForm = `<form class="sign-up-form">
            <h1 class="header-text">||| Le<span class="lecon">Con |||</span></h1>
            <div class="name-section">
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="text" name="surname" id="surname" placeholder="Surname" required>
            </div>
            <!-- <p class="error-msg">Name is required</p> -->
            <input type="text" name="email" id="email" placeholder="Email" required>
            <!-- <p class="error-msg">Name is required</p> -->
            <input type="password" name="pwd" id="pwd" placeholder="Password">
            <!-- <p class="error-msg">Name is required</p> -->
            <input type="password" name="confirm-pwd" id="confirm-pwd" placeholder="Confirm Password">
            <!-- <p class="error-msg">Name is required</p>  -->
            <p id="terms">By Signing Up, you agree to our <a href="#">Terms of Service</a> , <a href="#">Privacy Policy</a> and <a href="#">Cookie Policy</a></p>
            <button type="submit">Sign Up</button>
        </form> `;
    document.body.insertAdjacentHTML("beforeend", signUpForm);
}
signUpBtn.addEventListener('click', signUpPopup);
createNewAccBtn.addEventListener('click', signUpPopup);