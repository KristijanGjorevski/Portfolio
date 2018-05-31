const images = document.querySelectorAll("img");
let imgModal = document.querySelector("#modalImg");
let textModal = document.querySelector("#modalText");
const boxModal = document.querySelector("#modalBox");
images.forEach(element => {
  element.addEventListener("click",zoomUp);

});

function zoomUp() {

  boxModal.style.display = "block";
  imgModal.src = this.src;
  textModal.innerHTML = this.parentNode.parentNode.parentNode.childNodes[5].lastElementChild.innerHTML;
  

  //console.log(this.parentNode.parentNode.parentNode.childNodes[5].lastElementChild.innerHTML);

  boxModal.onclick = function(){ boxModal.style.display = "none" }

}