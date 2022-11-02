const home = document.querySelector("#home");
const menu = document.querySelector('#menu');
const dropDown = document.querySelector(".drop-down");
const like = document.querySelectorAll('.like');
const messages = document.querySelector("#messagesBtn")

//STYLING CURRENT TAB
home.style.backgroundColor = "#CF7C00";
home.style.color = "while";

menu.addEventListener('click', menuBtn=>{
    if(menu.innerHTML == `<i class="fa-solid fa-bars"></i>`){
        dropDown.style.display = "block";
       menu.innerHTML = `<i class="fa-solid fa-xmark"></i>`;

    }
    else if(menu.innerHTML == `<i class="fa-solid fa-xmark"></i>`){
        dropDown.style.display = "none";
        menu.innerHTML = `<i class="fa-solid fa-bars"></i>`;
    }

})

//NAVIGATING MENU
messages.onclick = ()=>{location.href = "./messages.php";}


//LIKE BUTTON 
like.forEach(l=>{
    //SHOW REACTION OPTION ON HOVER
    l.addEventListener('mouseover', ()=>{
        
    })
})