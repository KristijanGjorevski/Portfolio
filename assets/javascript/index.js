const introContent = document.querySelector(".main_content");

window.setTimeout(() => {
    introContent.style.display = "flex";
}, 970);


const projects = document.querySelectorAll("#project-template");

projects.forEach(element => {
    element.addEventListener("click",()=> {window.location.href = "projects.php"});
});
