const defaultImageURL = "./images/hotel_gift_1.jpg";
let usedImageURL = "";
const maxUploadSize = 2;
const MBtoBytes = 1048576;

function uploadImage(event) {
    if (event.target.files[0].size > (maxUploadSize * MBtoBytes)){
        alert("File is too big!");
        usedImageURL = defaultImageURL;
        updateDisplayedImage();
        return;
     };
    usedImageURL = URL.createObjectURL(event.target.files[0]);
    updateDisplayedImage();
}

function updateDisplayedImage() {
    const imageURL = usedImageURL?.length ? usedImageURL : defaultImageURL;
    $('#uploadedImage, #displayedImage').attr('src', imageURL);
}