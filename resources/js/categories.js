

        const emptyMessageDiv = document.getElementById('emptyMessage');
        const modal = document.getElementById('categoryModal');
        const modalTitle = document.getElementById('modalTitle');
        const categoryNameInput = document.getElementById('categoryNameInput');
        const categoryForm = document.getElementById('categoryForm');
        const openAddBtn = document.getElementById('openAddModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelModalBtn = document.getElementById('cancelModalBtn');
        const modalBackdrop = document.getElementById('modalBackdrop');

       

        // Ouvrir le modal en mode AJOUT
        function openAddModal() {
            currentEditId = null;
            modalTitle.innerText = "Ajouter une catégorie";
            categoryNameInput.value = "";
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            categoryForm.action = `/admin/categories`;
            categoryNameInput.focus();
        }

        // Ouvrir le modal en mode ÉDITION
        function openEditModal(id,name) {
          
            if (!id) return;
            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'PATCH';

            categoryForm.appendChild(methodInput);
         
            modalTitle.innerText = "Modifier la catégorie";
            categoryNameInput.value = name;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            categoryForm.action = `/admin/categories/${id}`;
            categoryNameInput.focus();
        }

       

        // ajout ou mise à jour
        function saveCategory(event) {
            const newName = categoryNameInput.value.trim();
            if (!newName) {
                event.preventDefault();
                alert("Le nom de la catégorie ne peut pas être vide.");
                return;
            }
            
           
        }

         function deleteCategory(e) {
            const confirmDelete = confirm(`Êtes-vous sûr de vouloir supprimer cette  catégorie  ? Cette action est irréversible.`);
            if (!confirmDelete){
            e.preventDefault();
                 return;
            } 
            
        }

        // Fermer le modal
        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            categoryNameInput.value = "";
            
        }

        // Toast de notification temporaire (design cohérent)
        function showTemporaryToast() {
           
            const toast = document.getElementById('toast');
           if(toast){
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateY(20px)';
                setTimeout(() => toast.remove(), 300);
            }, 2800);
           }
        }
    
        document.querySelectorAll('.edit-category-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    let id = parseInt(btn.getAttribute('data-id'));
                    let name = btn.getAttribute('data-name');
                    console.log(id);
                    console.log(name);
                    
                    openEditModal(id,name);
                });
            });
        document.querySelectorAll('.delete-category-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    deleteCategory(e)
                });
            });
      

        // Gestion des événements modals
        openAddBtn.addEventListener('click', openAddModal);
        closeModalBtn.addEventListener('click', closeModal);
        cancelModalBtn.addEventListener('click', closeModal);
        modalBackdrop.addEventListener('click', closeModal);
        categoryForm.addEventListener('submit', saveCategory);
        showTemporaryToast();
        
        // Fermeture avec la touche Echap
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.classList.contains('flex')) {
                closeModal();
            }
        });

