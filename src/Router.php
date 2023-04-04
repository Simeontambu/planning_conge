<?php
namespace APP;
class Router{
    //Proprieté privé de 
    // variable de type chaine de caractère
    private $viewPath;
    //Variable de type ALtorouter
    private $router;
    public function __construct(string $viewPath){
        $this->viewPath= $viewPath;
        $this->router= new \AltoRouter();
    }
    //Création de notre méthode pour recuperer le chemin du fichier a afficher
    public function get(string $url, string $view, ?string $name=null):self {
            $this->router->map('GET', $url, $view, $name);
            return $this;
    }
    public function run():self{
        $match = $this->router->match();
        
        $view =$match['target'];
        ob_start();
        require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
        $content = ob_get_clean();
        require $this->viewPath . DIRECTORY_SEPARATOR .  'templates/layout.php';
        return $this;
    }

}