const form = document.querySelector('form');
form.addEventListener('submit', async(e)=>{
e.preventDefault();
const formData = new FormData(form);
const senha = formData.get('senha');
if(senha.length <6){
    alert("tem que ter no minimo 6 carcteres");
    return;
}
try{
   // Aponta para o seu arquivo PHP
const response = await fetch('/projets_estudos/full-stack-projects/cadastro/index.php', {
    method: 'POST',
    body: formData
});
    const respostaTexto = await response.text();
    console.log('Resposta PHP', respostaTexto);

}catch(error){
console.error('n foi possivel mandar para api');
}
});