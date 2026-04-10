
const input = document.getElementById('imageInput');
const preview = document.getElementById('preview');
const previewImg = document.getElementById('previewImg');
const uploadBox = document.getElementById('uploadBox');
const removeBtn = document.getElementById('removeImage');

input.addEventListener('change', function () {
    const file = this.files[0];

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        previewImg.src = e.target.result;

        preview.classList.remove('hidden');
        uploadBox.classList.add('hidden');
    };

    reader.readAsDataURL(file);
});

// supprimer limage
removeBtn.addEventListener('click', () => {
    input.value = "";

    preview.classList.add('hidden');
    uploadBox.classList.remove('hidden');
});