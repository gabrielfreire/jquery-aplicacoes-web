<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1-transitional.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    
    <body>
        <a href="#" class="external">link</a>
        <a href="#" class="external">link</a>
        <a href="#">link</a>
        <a href="#" class="external">link</a>
        <a href="#" class="external">link</a>
        <a href="#"></a>
        <a href="#">link</a>
        <a href="#">link</a>
        <a href="#">link</a>
        <a href="#">link</a>
        
        <script type="text/javascript" 
            src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        
        <script type="text/javascript">
            // alerta 4 restantes no conjunto
            alert(jQuery('a').filter('.external').length + ' external links');
        </script>
        
    </body>
</html>
