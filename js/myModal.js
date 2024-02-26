// Get the modal
var modal = document.getElementById("modalDealer");

// Get the button that opens the modal
var openModalBtn = document.getElementById("openModalBtn");

// Header btn or link
var openModalLink = document.getElementById("openModalLink");

// Get the <closeSpan> element that closes the modal
var closeSpan = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function openModal() {
    modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
    modal.style.animationName = "fadeOut";
    modal.style.animationDuration = "0.3s";
    setTimeout(function () {
        modal.style.display = "none";
        modal.style.animationName = "";
    }, 200);
}

// opening same modal for different clicks
openModalBtn.onclick = function(){
    openModal();
}
openModalLink.onclick = function(){
    openModal();
}

// When the user clicks on <closeSpan> (x), close the modal
closeSpan.onclick = function () {
    closeModal();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        closeModal();
    }
}
