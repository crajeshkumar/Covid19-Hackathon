const uname = document.getElementById("uname");
const phone = document.getElementById("phone");

const email = document.getElementById("email");
const error = document.querySelectorAll("small");
const pincode = document.getElementById("pincode");
uname.addEventListener("blur", () => {
    if (uname.value.length <= 0) {
        uname.parentElement.className = "form-control error"
        error[0].innerHTML = `Username should be filled `

    } else {
        uname.parentElement.className = "form-control success"
    }
    //Regex Below
    //    let re=/^[a-zA-z]\w{2,15}$/;
    //     if(!re.test(uname.value))
    //     {
    //         uname.parentElement.className="form-control error"
    //         error[0].innerHTML=`Username should be filled and should meet the following constraints<br><ol>
    //         Should start with an alphabet
    //         cannot`
    //     }
    //     else{
    //         uname.parentElement.className="form-control success"
    //     }
})


email.addEventListener("blur", () => {
    // if(email.value.length<=0)
    // {
    //   email.parentElement.className="form-control error";
    //   error[3].innerHTML=`Email is required`

    // }

    // else if(email.value.search("@")==-1 || email.value.indexOf('.')==-1)
    // {   email.parentElement.classList.add("error");
    //     error[3].innerHTML=`Incorrect format`
    // }
    // else{
    //     email.parentElement.classList.add("success")
    // }
    //REGEX
    let re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
    if (!re.test(email.value)) {
        email.parentElement.className = "form-control error"
        error[2].innerHTML = `Incorrect format! Example format:example@example.com`
    } else {
        email.parentElement.className = "form-control success";
    }
})
phone.addEventListener("blur", () => {
    let re = /^[6-9]\d{9}$/
    if (!re.test(phone.value)) {
        phone.parentElement.className = "form-control error"
        error[1].innerHTML = `Not a valid phone number`
    } else {
        phone.parentElement.className = "form-control success";
    }
})
pincode.addEventListener("blur", () => {

    // if(pincode.value.length<=0)
    // {   
    //     pincode.parentElement.className="form-control error"
    //     error[4].innerHTML=`Pincode should not be left empty!`
    // }
    // else if(pincode.value.length<6 || pincode.value.length>6 )
    // {
    //      pincode.parentElement.className="form-control error"
    //      error[4].innerHTML=`Pincode consists of 6 numbers!`
    // }
    // else{
    //     pincode.parentElement.className="form-control success"
    // }
    //Regex

    let re = /^[0-9]{6}$/
    if (!re.test(pincode.value)) {
        pincode.parentElement.className = "form-control error"
        error[3].innerHTML = `Pincode consists of six numbers!`
    } else {
        pincode.parentElement.className = "form-control success"
    }

})