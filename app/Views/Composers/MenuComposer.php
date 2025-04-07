<?php

namespace App\Views\Composers;

class MenuComposer
{
    public function compose($view)
    {
        $menu = [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contact',
        ];

        $authenticated = true;

        if($authenticated){
            $menu = array_merge($menu,[
                'Dashboard' => '/dashboard',
                'Profile' => '/profile',
                'Logout' => '/logout',
            ]);
        }

        $view->with('menu', $menu );
    }
}


?>
