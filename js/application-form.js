// form validation
function termsValidation(){
    const checkBox = document.getElementById("terms");
    const submitBtn = document.getElementById("submit");

    if(checkBox.checked){
        submitBtn.disabled = false;

    }
    else{
        submitBtn.disabled = true;
    }
}