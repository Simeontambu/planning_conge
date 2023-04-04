<?php
namespace APP;
class Router{
    
    private $viewPath;
    private $router;
    public function __construct(string $viewPath){
        $this->viewPath= $viewPath;
        $this->router= new \AltoRouter();
    }
    //Creation of method to retrieve the path of the file to display
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