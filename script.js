//Permite o uso de ícones 
lucide.createIcons();

//Controlador do modo escuro
let dark_mode = false;

//Listener do submit para checar alguma inconsistência
document.getElementById("form_reg").addEventListener("submit", (e) => {
    //Previne que o submit ocorra até fazermos as verificações
    e.preventDefault();

    //Puxa as tags dos inputs
    let input_senha = document.getElementById("senha");
    let input_csenha = document.getElementById("conf_senha");
    let input_checkbox = document.getElementById("aceita_termos");

    //Puxa as informações da senha e da senha confirmada
    let senha = input_senha.value;
    let conf_senha = input_csenha.value;

    //Verificação das senhas
    if (senha.length < 8) {
        alert("Sua senha deve possuir 8 dígitos!")
        return false;
    }
    else if(senha != conf_senha) {
        alert("Senhas não batem!");
        return false;
    }

    //Verificação de checkbox
    if (!input_checkbox.checked) {
        alert("Você deve aceitar nossos termos e condições!");
        return false;
    }
    document.getElementById("form_reg").submit();
})


function modoEscuro() {
    const estilo = document.documentElement;
    if(!dark_mode) {
        estilo.style.setProperty("--fundo", "#232323");
        estilo.style.setProperty("--fonte", "white");
        dark_mode = true;
        return;
    }
    estilo.style.setProperty("--fundo", "white");
    estilo.style.setProperty("--fonte", "black");
    dark_mode = false;
}