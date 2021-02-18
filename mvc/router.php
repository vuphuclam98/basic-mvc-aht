<?php

namespace Aht;

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/basic-mvc-aht/mvc/")
        {
            $request->controller = "Tasks";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }

    }
}
?>