/*$("#add-pedido").click(addPedido);

function addPedido(event){
   event.preventDefault();
   var nome = $("#nome").val();
   var mesa = $("#mesa").val();
   var prato = $("#prato").val();
   var qtd = $("#qtd").val();

   var linha = novaLinha(nome,mesa,prato,qtd,prato.slice(-5),prato.slice(-5)*qtd);
   
   $("#tabela-pedido").prepend(linha);
   $("#nome").val("");
   $("#mesa").val("Escolha");
   $("#prato").val("Escolha");
   $("#qtd").val("");
}


function novaLinha(nome,mesa,prato,qtd,valU,valT){
   var linha = $("<tr>");
   var nomeTd = $("<td>").text(nome);
   var mesaTd = $("<td>").text(mesa);
   var pratoTd = $("<td>").text(prato);
   var qtdTd = $("<td>").text(qtd);
   var valUnitTd = $("<td>").text("R$ "+ valU);
   var valTotTd = $("<td>").text("R$ "+ valT.toFixed(2));

   linha.append(nomeTd);
   linha.append(mesaTd);
   linha.append(pratoTd);
   linha.append(qtdTd);
   linha.append(valUnitTd);
   linha.append(valTotTd);

   return linha;
}*/