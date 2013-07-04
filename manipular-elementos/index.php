<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1-transitional.dtd">

<html>
    <head>
        <script type="text/javascript" 
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    </head>
    
    <body>
        <div>old content</div>
        <script>
            /**
             * Exemplo simples
             */            
            jQuery('div').hide();                       // ocultar todas as divs da página
            jQuery('div').text('new content 1');        // atualizar o texto contido em todas as divs  
            jQuery('div').addClass("updateContent");    // adicionar uma classe com um valor de updateContent a todas as divs
            jQuery('div').show();                       // mostrar todas as divs da página 
        
        
            /**
             * Usando encadeamento
             */            
            jQuery('div').hide().text('new content 2').addClass("updateContent").show();
        

            /**
             * Usando endentação e quebras de linha
             */
            jQuery('div')
                .hide()
                .text('new content 3')
                .addClass("update Content")
                .show();
        </script>
    </body>
</html>
