function editProfile(){

    console.log("hi");

    let uname = document.getElementById("uname");
    let fname = document.getElementById("fname");
    let lname = document.getElementById("lname");
    let email = document.getElementById("email");
    let mobile = document.getElementById("mobile");
    let bio = document.getElementById("bio");
    let pic = document.getElementById("profile-pic");
    let submitBtn = document.getElementById("submit");

    if(uname.style.display === "none"){

        uname.style.display = "block";
        fname.style.display = "block";
        lname.style.display = "block";
        email.style.display = "block";
        mobile.style.display = "block";
        bio.style.display = "block";
        pic.style.display = "block";
        submitBtn.style.display = "inline-block";

    }
    else{

        uname.style.display = "none";
        fname.style.display = "none";
        lname.style.display = "none";
        email.style.display = "none";
        mobile.style.display = "none";
        bio.style.display = "none";
        pic.style.display = "none";
        submitBtn.style.display = "none";
    }
    

    
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

