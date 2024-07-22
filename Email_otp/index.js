function sendOTP(){
    const email = "rahulkhatikmare57@gmail.com";
    const otpVerify = document.getElementsByClassName("email-verify")[0];

    let otp_code = Math.floor(1000 +Math.random()*9000);
    let emailbody = `<h1> Your OTP is </h1>  ${otp_code}`;

    Email.send({
        SecureToken : "c96fdb92-ccd5-4b12-8272-cbbde1ca7063",
        To : email,
        From : "rahulkhatikmare32@gmail.com",
        Subject : "Email otp verification",
        Body : emailbody,
    }).then(
      message => {
        otpVerify.style.display = "flex";
        alert("OTP send to your Registerd email "+ email);

        if(message === "OK"){


            let otp_inp = document.getElementById("otp-input");
            let otp_btn = document.getElementById("btn-verify-otp");

            otp_btn.addEventListener("click", ()=>{
                if(otp_inp.value == otp_code){
                    alert("Email address verified...");
                    otpVerify.style.display = "none";
                    // email.value ="";
                    otp_inp.value = "";
                    window.location.href = "../admin/dashboard.php";
                }
                else{
                    alert("Invalid otp");
                }
            })
        }
      }
    );
}