

// quando o input radio for clicado...
$("input.radiobox").on("click", function (){
   
    var soma = 0;                //declarar variável de soma
    var radio = $(this).val();   //resgatar valor desta radio que foi selecionada
    
    //converter a radio para inteiro(pois ela vem como string) e somar com 100
    soma = parseInt(radio) + 100; 
    
    $("label")
        .hide()              //vou esconder a label
            .text(soma)      //vou inserir o valor da soma
                .fadeIn();   //vou mostrar na tela com o novo valor
    
    //exibir no console, instale o plugin do firebug(navegador firefox) ao trabalhar com jquery
    console.log(soma);
});


