<?php

class DbRouteAliasesModule extends Module {

    protected $id = 'minicore-db-route-aliases';

    public function __construct() {
        $framework = Framework::instance();
        $framework->add([
            'routeAliases' => 'DbRouteAliases'
        ]);
    }

}