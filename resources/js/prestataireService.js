
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

// affichage  de  form update servive
window.openEditModal = function(service) {
    const modal = document.getElementById('editModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    
    document.getElementById('editTitle').value = service.title;
    document.getElementById('editDescription').value = service.description;
    document.getElementById('editPrice').value = service.price;
    document.getElementById('editDurationValue').value = service.duration_value;
    document.getElementById('editDurationUnit').value = service.duration_unit;

    
    document.getElementById('editForm').action = `/prestataire/services/${service.id}`;
};

window.closeEditModal = function() {
    const modal = document.getElementById('editModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
};