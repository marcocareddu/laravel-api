// Active thumbnail
const placeholder = 'https://marcolanci.it/utils/placeholder.jpg';
const thumbnail = document.getElementById('thumb');
const thumbnailPreview = document.getElementById('thumbnail-preview');

// Temp var
let tempUrl = null;

thumbnail.addEventListener('change', () => {
    if (thumbnail.files && thumbnail.files[0]) {
        const file = thumbnail.files[0];
        tempUrl = URL.createObjectURL(file);
        thumbnailPreview.src = tempUrl;
    } else {
        thumbnailPreview.src = placeholder;
    }
});

window.addEventListener('beforeunload', () => {
    if (tempUrl) URL.revokeObjectURL(tempUrl);
})