<?php

class DbRouteAliasesModule extends Module {

    protected $id = 'minicore-db-route-aliases';

    public function __construct(Framework $framework) {
        parent::__construct($framework);
        $framework->add([
            'routeAliases' => 'DbRouteAliases'
        ]);
    }

}