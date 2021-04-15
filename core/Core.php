<?php
class Core
{
    public function run()
    {
        $url = '/';
        if(isset($_GET['url'])){
            $url .= filter_input(INPUT_GET, 'url');
        }
        if(!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);
            
            $CurrentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) &&  !empty($url[0])){
                $CurrentAction = $url[0];
            }else{
                $CurrentAction = 'index';
            }

        }else{
            $CurrentController = 'homeController';
            $CurrentAction = 'index';

        }


        echo '<hr>';
        echo 'Controller '.$CurrentController.'<br>';
        echo 'Action '.$CurrentAction;
        
    }
}