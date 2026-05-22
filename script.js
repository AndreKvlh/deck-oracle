//Permite o uso de ícones 
lucide.createIcons();

//Controlador do modo escuro
let dark_mode = false;

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

//Tags dos inputs e do form
let form_reg = document.getElementById("form_reg");
let input_senha = document.getElementById("senha");
let conf_senha = document.getElementById("conf_senha");

//Objeto com informações de RegEx para checagem das regras
let regex_senha = [
[/[A-Z]/, "<p>Precisa de ao menos uma letra maiúscula</p>"],
[/[0-9]/, "<p>Precisa de ao menos um número</p>"],
[/[!@#$%&*_]/, "<p>Precisa de ao menos um símbolo</p>"],
[/.{8,}/, "<p>Precisa de ao mínimo 8 dígitos</p>"]
]

//Listener do input de senha a fim de destacar o que falta na senha
input_senha.addEventListener("input", (e) => {
    const senha = input_senha.value;
    const aviso = document.getElementById("regras_senha");

    //Limpa a tag de aviso
    aviso.innerHTML = "";

    //Checa todas as regras a fim de printar os avisos
    for(var i = 0; i < regex_senha.length; i++) {
        if(!regex_senha[i][0].test(senha)) {
            aviso.innerHTML += regex_senha[i][1];
        }
    }
})

//Listener do input de confirmar senha para informar se elas
//estão iguais ou não
conf_senha.addEventListener("input", (e) => {
    const senha_digitada = input_senha.value;
    const senha_confirmada = conf_senha.value;

    const aviso = document.getElementById("senha_desigual");
    aviso.innerHTML = "";

    //Emite aviso caso senhas não sejam iguais
    if(senha_digitada != senha_confirmada) {
        aviso.innerHTML = "<p>Senhas não batem!</p>";
    }
})

//Listener do submit para checar alguma inconsistência
form_reg.addEventListener("submit", (e) => {
    //Previne que o submit ocorra até fazermos as verificações
    e.preventDefault();

    //Puxa a tag da checkbox e do seu aviso
    let input_checkbox = document.getElementById("aceita_termos");
    let aviso = document.getElementById("obrigatorio_aceitar");

    //Vamos limpar o span de aviso sempre
    aviso.innerHTML = "";

    //Puxa as informações da senha e da senha confirmada
    let senha_digitada = input_senha.value;
    let senha_confirmada = conf_senha.value;

    //Verificação da checkbox
    if (!input_checkbox.checked) {
        aviso.innerHTML = "<p>Você deve aceitar nossos termos e condições!</p>";
        return false;
    }

    //Verificação das senhas
    if(senha_digitada != senha_confirmada) return false;

    for(var i = 0; i < regex_senha.length; i++) {
        if(!regex_senha[i][0].test(senha_digitada)) return false;
    } 

    document.getElementById("form_reg").submit();
})