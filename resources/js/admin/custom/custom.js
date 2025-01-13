// JavaScript za prebacivanje vidljivosti lozinke
const togglePassword = document.querySelector('#toggle-password'); 
const passwordField = document.querySelector('#password'); 

togglePassword.addEventListener('click', function (e) {
    // Sprečava podrazumevano ponašanje linka (ako je dugme unutar linka)
    e.preventDefault();

    // Prebacuje tip polja za lozinku između 'password' i 'text'
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;

    // Prebacuje ikonu oka (opciono)
    const eyeIcon = togglePassword.querySelector('svg'); 
    eyeIcon.classList.toggle('text-primary'); 
});





