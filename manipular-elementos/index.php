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
            // ocultar todas as divs da página
            jQuery('div').hide();
            
            // atualizar o texto contido em todas as divs
            jQuery('div').text('new content');
            
            // adicionar uma classe com um valor de updateContent a todas as divs
            jQuery('div').addClass("updateContent");
            
            // mostrar todas as divs da página
            jQuery('div').show();
        </script>
    </body>
</html>
