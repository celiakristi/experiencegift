const defaultImageURL = "./images/hotel_gift_1.jpg";
let usedImageURL = "";

function uploadImage(event) {
    usedImageURL = URL.createObjectURL(event.target.files[0]);
    const uploadImageEl = document.getElementById('uploadedImage');
    uploadImageEl.src = usedImageURL;
    updateDisplayedImage();
}

function updateDisplayedImage() {
    const imageURL = usedImageURL?.length ? usedImageURL : defaultImageURL;
    const displayedImageEl = document.getElementById('displayedImage');
    displayedImageEl.src = imageURL;
}