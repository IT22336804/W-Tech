function editProfile(){

    console.log("hi");
    let editBtn = document.getElementById("edit");
    editBtn.style.display = "none";

    let uname = document.getElementById("uname");
    let fname = document.getElementById("fname");
    let lname = document.getElementById("lname");
    let email = document.getElementById("email");
    let mobile = document.getElementById("mobile");
    let bio = document.getElementById("bio");
    let pic = document.getElementById("profile-pic");
    let submitBtn = document.getElementById("submit");



    uname.style.display = "block";
    fname.style.display = "block";
    lname.style.display = "block";
    email.style.display = "block";
    mobile.style.display = "block";
    bio.style.display = "block";
    pic.style.display = "block";
    submitBtn.style.display = "inline-block";

    
    

    
}



function checkPwd(){

    const newPwd = document.getElementById("newpwd").value;
    const confirmPwd = document.getElementById("confirmpwd").value;

    if(newPwd === confirmPwd){

        return true;
    }
    else{
        alert("Your password does not match, please enter again")
        return false;
    }
}

