<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // edahira_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edahira_user_homepage')), array (  '_controller' => 'EdahiraUserBundle:Default:index',));
        }

        // dahira_homepage
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahira_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_homepage')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\IndexController::indexAction',));
        }

        // dahira_header
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/index/header$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_header')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\IndexController::headerAction',));
        }

        // dahira_home
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/index/home$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_home')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\IndexController::homeAction',));
        }

        // dahira_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/dahira/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DahiraController::indexAction',));
        }

        // dahira_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/dahira/editer(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DahiraController::editerAction',  'id' => NULL,));
        }

        // dahira_gerer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/dahira/gerer(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_gerer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DahiraController::gererAction',  'id' => NULL,));
        }

        // dahira_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/dahira/supprimer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DahiraController::supprimerAction',  'id' => 1,));
        }

        // dahira_partager
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/dahira/partager/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dahira_partager')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DahiraController::partagerAction',));
        }

        // categorie_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/categorie/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CategorieController::indexAction',));
        }

        // categorie_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/categorie/editer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CategorieController::editerAction',  'id' => NULL,));
        }

        // categorie_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/categorie/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CategorieController::supprimerAction',));
        }

        // membre_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/membre/editer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\MembreController::editerAction',  'id' => NULL,));
        }

        // membre_afficher
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/membre/afficher$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_afficher')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\MembreController::afficherAction',));
        }

        // membre_cotiser
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/membre/cotiser/(?P<membre>\\d+)/(?P<type>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_cotiser')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\MembreController::cotiserAction',));
        }

        // membre_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/membre/index(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\MembreController::indexAction',  'page' => 1,));
        }

        // membre_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/membre/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\MembreController::supprimerAction',));
        }

        // caisse_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/caisses/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caisse_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CaissesController::indexAction',  'page' => 1,));
        }

        // caisse_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/caisses/editer(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caisse_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CaissesController::editerAction',  'id' => NULL,));
        }

        // caisse_afficher
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/caisses/afficher/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caisse_afficher')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CaissesController::afficherAction',));
        }

        // caisse_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/caisses/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caisse_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CaissesController::supprimerAction',));
        }

        // caisse_changeretat
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/caisses/changeretat/(?P<id>[^/]++)/(?P<etat>0|1)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caisse_changeretat')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CaissesController::changeretatAction',));
        }

        // typeevenement_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/typeevenement/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeevenement_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\TypeevenementController::indexAction',));
        }

        // typeevenement_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/typeevenement/editer(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeevenement_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\TypeevenementController::editerAction',  'id' => NULL,));
        }

        // typeevenement_afficher
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/typeevenement/details/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeevenement_afficher')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\TypeevenementController::detailsAction',));
        }

        // typeevenement_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/typeevenement/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeevenement_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\TypeevenementController::supprimerAction',));
        }

        // event_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/evenement/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EvenementController::indexAction',));
        }

        // event_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/evenement/editer(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EvenementController::editerAction',  'id' => NULL,));
        }

        // event_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/evenement/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EvenementController::supprimerAction',));
        }

        // event_detals
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/evenement/afficher/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_detals')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EvenementController::afficherAction',));
        }

        // cotisation_dahira
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/cotisation/dahira/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotisation_dahira')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CotisationController::dahiraAction',));
        }

        // cotisation_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/cotisation/editer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotisation_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CotisationController::editerAction',  'id' => NULL,));
        }

        // cotisation_etat
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/cotisation/etat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cotisation_etat')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\CotisationController::etatAction',));
        }

        // etats_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/etats/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etats_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EtatsController::indexAction',));
        }

        // etats_caisse
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/etats/caisse$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etats_caisse')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EtatsController::caisseAction',));
        }

        // etats_evenement
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/etats/evenement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etats_evenement')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EtatsController::evenementAction',));
        }

        // etats_typeevenement
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/etats/typeevenement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etats_typeevenement')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EtatsController::typeevenementAction',));
        }

        // etats_membre
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/etats/membre(?:/(?P<membre>\\d+)(?:/(?P<type>\\d+))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etats_membre')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EtatsController::membreAction',  'membre' => NULL,  'type' => NULL,));
        }

        // etats_charges
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/etats/charges$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etats_charges')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EtatsController::chargesAction',  'id' => NULL,));
        }

        // etats_chargemembre
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/etats/chargemembre$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etats_chargemembre')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\EtatsController::chargemembreAction',));
        }

        // charges_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/charges/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charges_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\ChargesController::indexAction',));
        }

        // charges_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/charges/editer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charges_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\ChargesController::editerAction',  'id' => NULL,));
        }

        // charges_changeretat
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/charges/changeretat/(?P<id>[^/]++)/(?P<etat>0|1)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charges_changeretat')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\ChargesController::changeretatAction',));
        }

        // charges_details
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/charges/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charges_details')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\ChargesController::detailsAction',));
        }

        // charges_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/charges/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charges_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\ChargesController::supprimerAction',));
        }

        // versement_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/versement/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'versement_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\VersementController::indexAction',));
        }

        // versement_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/versement/editer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'versement_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\VersementController::editerAction',  'id' => NULL,));
        }

        // versement_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/versement/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'versement_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\VersementController::supprimerAction',));
        }

        // depenses_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/depenses/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'depenses_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DepensesController::indexAction',));
        }

        // depenses_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/depenses/editer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'depenses_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DepensesController::editerAction',  'id' => NULL,));
        }

        // depenses_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/depenses/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'depenses_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DepensesController::supprimerAction',));
        }

        // don_index
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/don/index/(?P<type>1|2)/(?P<idType>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'don_index')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DonController::indexAction',));
        }

        // don_editer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/don/editer/(?P<type>1|2)/(?P<idType>\\d+)(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'don_editer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DonController::editerAction',  'id' => NULL,));
        }

        // don_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/dahira/don/supprimer/(?P<type>1|2)/(?P<idType>\\d+)(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'don_supprimer')), array (  '_controller' => 'Edahira\\DahiraBundle\\Controller\\DonController::supprimerAction',  'id' => NULL,));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if (rtrim($pathinfo, '/') === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'console');
                }

                return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
