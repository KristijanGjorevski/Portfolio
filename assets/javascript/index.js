const introContent = document.querySelector(".main_content");

window.setTimeout(() => {
    introContent.style.display = "flex";
}, 970);


const projects = document.querySelectorAll("#project-template");

projects.forEach(element => {
    element.addEventListener("mouseover",enterState);
    element.addEventListener("mouseout",leaveState);
});

function enterState() {

    //console.log(this);
    this.style.backgroundColor = "white";
    this.childNodes[1].style.color = "black";
}

function leaveState() {

    this.style.backgroundColor = "transparent";
    this.childNodes[1].style.color = "white";
    
}