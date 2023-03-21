window.onload = (function (){
    document.getElementById('cidade').addEventListener('keyup', function(){
    
        popularCidades(this.value);     //enviando valor do documento
    });
        });

function popularCidades(c){ //recebendo cidade como parametro
    let ajax = new XMLHttpRequest();
    ajax.onload = (function(){
        let cidades = JSON.parse(this.responseText);
        let opt = "";
        cidades.forEach(cidade => {
             opt += "<option value='"+cidade.id+"'>"+cidade.nome+"</option>";
        
        });
        document.getElementById('cidades'). innerHTML = opt;
    });
    ajax.open('GET', 'lista_cidades.php?cidade='+c);
    ajax.send();
}