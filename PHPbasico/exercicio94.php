<?php
interface Header{
    public function getTemplateString():string;
}
class RHeader implements Header{
    public function getTemplateString():string{
        return "titulo";
    }
}
class VueHeader implements Header{
    public function getTemplateString():string{
        return "titulopg";
    }
}
interface Body{
    public function getTemplateString():string;
}
class RBody implements Body{
    public function getTemplateString():string{
        return "descrição";
    }
}
class VueBody implements Body{
    public function getTemplateString():string{
        return "descriçãopg";
    }
}
interface Footer{
    public function getTemplateString():string;
}
class RFooter implements Footer{
    public function getTemplateString():string{
        return "footer";
    }
}
class VueFooter implements Footer{
    public function getTemplateString():string{
        return "footerpg";
    }
}
interface Framework{
    function montaHeader():Header;
    function montaBody():Body;
    function montaFooter():Footer;
}
class RFactory implements Framework{
    public function montaHeader():Header{
        return new RHeader();
    }
    public function montaBody():Body{ 
        return new RBody();
    }
    public function montaFooter():Footer{    
        return new RFooter();
    }
}
class VueFactory implements Framework{
    public function montaHeader():Header{
        return new VueHeader();
    }
    public function montaBody():Body{   
        return new VueBody();
    }
    public function montaFooter():Footer{
        return new VueFooter();
    }
}
?>