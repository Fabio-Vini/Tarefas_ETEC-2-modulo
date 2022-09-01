window.onload = function(){
var carrinho = [];
var produto = {
                'codigo': 0,
                'qtd': 0
            }

function Add(){
    var id = this.getAttribute('id');
    var qtd = this.value;
    produto.codigo = id;
    produto.qtd = qtd;
    carrinho = produto;
    localStorage.setItem(id, qtd);
    // atualizar carrinho que o usuario vê
    var url = 'ajax.php?acao&exibir='+id;
    //fazendo a chamada assincrona (redirecionar/atualizar)
    fetch(url).then(resposta =>{
        return resposta.json();
    })
    .then (function (json){
        var linha = '<tr><td>';
        linha+= '<img src="'+json.foto+'" style="height: 50px;"></td>';
        linha+= '<td>'+qtd+'</td>';
        linha+= '<td>'+json.valor+'</td>';
        linha+= '<td>'+json.valor+'</td></tr>';
        document.querySelector('#carrinho').innerHTML +=linha;
    });
}

var item = document.getElementsByClassName('produto');

for(var i=0; i<item.length; i++){
    item[i].addEventListener('change', Add, false);
}
}