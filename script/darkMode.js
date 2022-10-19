function darkMode() {
    let elemento = document.body;
    let conteudo = document.getElementById("darkModeText");
    elemento.className = "dark-mode";
    conteudo.innerText = "Dark Mode ON";
}

function lightMode() {
    let elemento = document.body;
    let conteudo = document.getElementById("darkModeText");
    elemento.className = "light-mode";
    conteudo.innerText = "Light Mode ON";
}