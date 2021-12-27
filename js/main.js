// var firebaseConfig = {
// apiKey: "AIzaSyB5WStiIBt44wmtKrxSfhOH_6TPuGp1IC4",
// authDomain: "loginform-ee02f.firebaseapp.com",
// projectId: "loginform-ee02f",
// storageBucket: "loginform-ee02f.appspot.com",
// messagingSenderId: "815028795739",
// appId: "1:815028795739:web:8754a77b8d0ca1eb8e827e"
// };
// // Initialize Firebase
// firebase.initializeApp(firebaseConfig);
// let firestore = firebase.firestore();
// let db = firestore.collection("users");


// These are various pages to be modified in the html file
const page = document.getElementById("page");
const login = document.getElementById("login");
const signUp = document.getElementById("signUp");

const sName = document.getElementById("sName");
const sEmail = document.getElementById("sEmail");
const sPassword = document.getElementById("sPassword");
const sPassword2 = document.getElementById("sPassword2");

// These buttons are respinsible for connecting with the database
const signUpBtn = document.getElementById("signUpBtn");
const loginBtn = document.getElementById("loginBtn");


//these buttons have to show the login and logout popups
const loginPop = document.getElementById("loginPop");
const signUpPop = document.getElementById("signUpPop");

//These displays the popup when user clicks login or signUp
loginPop.addEventListener("click", function() {
    page.classList.toggle("blur");
    login.classList.toggle("form-view");
})

signUpPop.addEventListener("click", function() {
    page.classList.toggle("blur");
    signUp.classList.toggle("form-view");
})



// setting up the sign up page and the database
// signUpBtn.addEventListener("click", (event) => {
//     //event.preventDefault();
//     if (sName.value == "" || sEmail.value == "" || sPassword.value == "" || sPassword2.value == ""){
//         window.alert("Please fill in all the Entries");
//     }
//     let name = sName.value;
//     let email = sEmail.value;
//     let pass = sPassword.value;
//     let pass2 = sPassword2.value;
//     if (pass != pass2){
//         window.alert("YOur passwords don't match, Please try again");
//         sPassword.value = "";
//         sPassword2.value = "";
//     }else{
//         let user = {
//             name: name,
//             email: email,
//             password: pass
//         }
//         // db.add(user).then(function (){
//         //     console.log("it all went successfully");
//         // }).catch((error) => {
//         //     console.error("there was an error");
//         // });
//     }

// })