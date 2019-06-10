<?php

namespace App\Http\Composers;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\View\View;

class SideNavComposer
{
    /**
     * @var Router
     */
    protected $router;

    /**
     * @var Request
     */
    protected $request;

    /**
     * Route name prefix / for matching
     * This will cause the composer to only target named routes that begin with foo.sidenav
     * @var string
     */
    //protected $prefix = 'foo.sidenav.';

    /**
     * Create a new SideNav composer.
     *
     * @param Illuminate\Routing\Router $router
     * @param Illuminate\Http\Request $request
     */
    public function __construct(Router $router, Request $request)
    {
        // Ooooh baby gimme those routes
        $this->router = $router;
    
        // ... And the current request too
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        // Format links
        $list = $this->createListItems();

    // WHERE THE MAGIC HAPPENS
        // return $sidenav array with any views that are called
        $view->with('sidenavs', $list);
    }

    /**
     * Create <li> list items w/ <a> as per composer parameters
     *
     * @return array
     */
    protected function createListItems()
    {
        $list = [];

        foreach(config('navigation.nav_bar_items') as $navBarItem){

            $active = $navBarItem['url'] == $this->request->path() ? 'active' : ''; 

            $uri = '/' . $navBarItem['url'];

            //$text = $this->makeLinkText($navBarItem);

            $navBar='<li>
                        <a href="'.$uri.'" 
                            class="'.$active.'">
                            <i class="'.$navBarItem["icon"].'"></i> 
                            '.$navBarItem["title"].' 
                        </a>
                    </li>';

            $list[] = $navBar;  
        }

        return $list;

    }
}