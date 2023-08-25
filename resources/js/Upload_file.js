
    function validateImage() {
    var image = document.getElementById('image');
    var errorMsg = document.getElementById('image-error');

    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

    if (!allowedExtensions.exec(image.value)) {
    errorMsg.innerHTML = 'Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.';
    image.value = '';
    return false;
}

    // Validate file size (2MB)
    var maxSize = 2 * 1024 * 1024;
    if (image.files[0].size > maxSize) {
    errorMsg.innerHTML = 'File size exceeds the maximum limit of 2MB.';
    image.value = '';
    return false;
}

    errorMsg.innerHTML = '';
    return true;
}

    // Display thumbnail for the uploaded image
    document.getElementById('image').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            var thumbnail = document.getElementById('thumbnail');
            thumbnail.setAttribute('src', e.target.result);
            thumbnail.style.display = 'block';
        };

        reader.readAsDataURL(file);
    });
