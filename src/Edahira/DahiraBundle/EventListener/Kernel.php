<?php

namespace Edahira\DahiraBundle\EventListener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Kernel {
    /**
     * @var \Symfony\Component\Routing\Router
     */
    private $router;

    /**
     * @var \serviceContainer
     */
    private $container;

    public function __construct(\Symfony\Component\Routing\Router $router, $container) {
        $this->router = $router;
        $this->container = $container;
    }

    public function onKernelRequest(GetResponseEvent $event) {
        if ($event->getRequestType() !== \Symfony\Component\HttpKernel\HttpKernel::MASTER_REQUEST) {
            return;
        }

        /** @var \Symfony\Component\HttpFoundation\Request $request  */
        $request = $event->getRequest();
        /** @var \Symfony\Component\HttpFoundation\Session $session  */
        $session = $request->getSession();

        $routeParams = $this->router->match($request->getPathInfo());
        $routeName = $routeParams['_route'];
        if ($routeName[0] == '_') {
            return;
        }
        unset($routeParams['_route']);
        // $routeData = array('name' => $routeName, 'params' => $routeParams);
        $routeData = $routeName;

        //Skipping duplicates
        $thisRoute = $session->get('this_route', array());
        if ($thisRoute == $routeData) {
            return;
        }
        $session->set('last_route', $thisRoute);
        $session->set('this_route', $routeData);

        /**
         * A chaque requéte on verifie aussi si l'utilisateur a choisi un 
         * avec lequel il veut travailler sinon
         * on le force à en choisir
         *
         */

         // echo var_dump($routeData); exit;
        $user = $this->container->get('security.context')->getToken()->getUser();
        // var_dump($user);
        if(is_object($user)){
            if(is_null($user->getActiveDahira()) &&  !in_array($routeData, array('dahira_gerer', 'dahira_editer', 'dahira_supprimer', 'dahira_partager', 'fos_user_registration_confirmed', 'fos_user_security_login'))){

                $url = $this->router->generate('dahira_index');
                $response = new RedirectResponse($url);
                $response->send();

            }
        }
        
    }
}