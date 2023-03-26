const login = document.querySelector(".login");
const loginbutton = document.querySelector(".login-button");
loginbutton.addEventListener("click", togglelogin);
function togglelogin(){
    login.classList.toggle("active-login");
}


const backtotopbtn = document.querySelector(".back-to-top-btn");
window.addEventListener("scroll", functionscroll);

function functionscroll(){
    if(window.scrollY > 300){
        backtotopbtn.style.display = "block";
    }
    else{
        backtotopbtn.style.display = "none";
    }
}
backtotopbtn.addEventListener("click", backtotop);
function backtotop(){
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
}



