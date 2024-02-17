function toggleModal(modalID, photoName) {
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");

    var imgElement = document.getElementById("modal-image");
    if (photoName){
        imgElement.src = "/img/" + photoName;
    }
}