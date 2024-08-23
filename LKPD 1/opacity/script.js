document.getElementById("submitBtn").addEventListener("click", function(e) {
    e.preventDefault();
    let imageSelect = document.getElementById("imageSelect");
    let opacitySelect = document.getElementById("opacitySelect");
    let imageDisplay = document.getElementById("imageDisplay");

    let selectedImage = imageSelect.value;
    let selectedOpacity = opacitySelect.value;

    imageDisplay.src = selectedImage;
    imageDisplay.style.opacity = selectedOpacity;
})