<?php
class Core
{
    public function run()
    {
        $url = '/';
        if(isset($_GET['url'])){
            $url .= filter_input(INPUT_GET, 'url');
        }

        $Params = array();

        if(!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);
            
            $CurrentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) &&  !empty($url[0])){
                $CurrentAction = $url[0];
                array_shift($url);
            }else{
                $CurrentAction = 'index';
            }

            if(count($url)>0){
                $Params = $url;
            }

        }else{
            $CurrentController = 'homeController';
            $CurrentAction = 'index';

        }

        if(!file_exists('controllers/'.$CurrentController.'.php') || !method_exists($CurrentController, $CurrentAction)){
            $CurrentController = 'notFoundController';
            $CurrentAction = 'index';
        }


        $C  = new $CurrentController();

        call_user_func_array(array($C, $CurrentAction), $Params);
        
    }
}