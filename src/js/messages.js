const dropDown = document.querySelector(".drop-down");
const home = document.querySelector("#home")
const messagesBtn = document.querySelector("#messagesBtn");
const container = document.querySelector(".center");
const onlineFriends = document.querySelector(".online-friends");
const messangerProfile = document.querySelectorAll(".messanger-profile");



messagesBtn.style.backgroundColor = "#CF7C00";
messagesBtn.style.color = "#ffffff"
// container.style.backgroundColor = "red";
onlineFriends.innerText = "No friends are online";



//drop down menu on the left
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

//view profile of the messenger
messangerProfile.forEach(msgerProfile=>{
    msgerProfile.addEventListener("click", ()=>{
        
        console.log(msgerProfile.getAttribute("src"));
        let imgShow = document.createElement("div");
        imgShow.className = "img-show";
        document.body.appendChild(imgShow);
        //pp is short for profile picture
        let pp = document.createElement("img");
        pp.classList.add("pp");
        pp.setAttribute("src", msgerProfile.getAttribute("src"));
        imgShow.appendChild(pp);
        //view full profile
        let viewMsgerProfileBtn = document.createElement("button");
        viewMsgerProfileBtn.classList.add("view-msger-profile-btn");
        viewMsgerProfileBtn.innerText = "View Profile";
        imgShow.appendChild(viewMsgerProfileBtn);

        //close messanger profile viewer
        let profilecloser = document.createElement("i");
        profilecloser.className = "fa-solid fa-xmark";
        imgShow.appendChild(profilecloser);
        
    });
})


//NAVIGATING MENU
home.onclick = ()=>{location.href = "./home.php"}
