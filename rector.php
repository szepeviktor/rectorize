<?php

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\DowngradeSetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SETS, [
        DowngradeSetList::PHP_80,

        //PHP73 DowngradeSetList::PHP_74,

        //PHP72 DowngradeSetList::PHP_74,
        //PHP72 DowngradeSetList::PHP_73,

        //PHP71 DowngradeSetList::PHP_74,
        //PHP71 DowngradeSetList::PHP_73,
        //PHP71 DowngradeSetList::PHP_72,

        //PHP70 DowngradeSetList::PHP_74,
        //PHP70 DowngradeSetList::PHP_73,
        //PHP70 DowngradeSetList::PHP_72,
        //PHP70 DowngradeSetList::PHP_71,

        //PHP56 DowngradeSetList::PHP_74,
        //PHP56 DowngradeSetList::PHP_73,
        //PHP56 DowngradeSetList::PHP_72,
        //PHP56 DowngradeSetList::PHP_71,
        //PHP56 DowngradeSetList::PHP_70,
    ]);
};
