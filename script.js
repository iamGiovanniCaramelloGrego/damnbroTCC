const editButton = document.querySelector('.edit-profile-button');
const modal = document.getElementById('editProfileModal');

// Função para mostrar o modal
editButton.addEventListener('click', () => {
    modal.style.display = 'block'; // Mostra o modal
});

// Função para fechar o modal
function closeModal() {
    modal.style.display = 'none'; // Esconde o modal
}

// Event listener para o formulário de edição de perfil
document.getElementById('editProfileForm').addEventListener('submit', (e) => {
    e.preventDefault(); // Impede o envio do formulário
    const name = document.getElementById('name').value; // Pega o nome
    const email = document.getElementById('email').value; // Pega o email
    
    // Atualiza os dados do perfil na página
    document.querySelector('.profile-name').innerText = name; // Atualiza o nome
    document.querySelector('.profile-email').innerText = email; // Atualiza o email

    closeModal(); // Fecha o modal
});

// Fecha o modal quando o usuário clica fora da área do modal
window.onclick = function(event) {
    if (event.target == modal) {
        closeModal();
    }
};

// Adiciona funcionalidade para mudar a imagem do perfil
const profilePictureInput = document.getElementById('profilePictureInput');

profilePictureInput.addEventListener('change', (event) => {
    const file = event.target.files[0]; // Pega o arquivo selecionado
    const reader = new FileReader(); // Cria um novo FileReader

    reader.onload = function(e) {
        document.querySelector('.profile-picture').src = e.target.result; // Atualiza a imagem
    }

    if (file) {
        reader.readAsDataURL(file); // Lê o arquivo como URL
    }
});
