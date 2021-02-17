<?php

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\DowngradeSetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SETS, [
        DowngradeSetList::PHP_80,

        //PHP7.3 DowngradeSetList::PHP_74,

        //PHP7.2 DowngradeSetList::PHP_74,
        //PHP7.2 DowngradeSetList::PHP_73,

        //PHP7.1 DowngradeSetList::PHP_74,
        //PHP7.1 DowngradeSetList::PHP_73,
        //PHP7.1 DowngradeSetList::PHP_72,

        //PHP7.0 DowngradeSetList::PHP_74,
        //PHP7.0 DowngradeSetList::PHP_73,
        //PHP7.0 DowngradeSetList::PHP_72,
        //PHP7.0 DowngradeSetList::PHP_71,

        //PHP5.6 DowngradeSetList::PHP_74,
        //PHP5.6 DowngradeSetList::PHP_73,
        //PHP5.6 DowngradeSetList::PHP_72,
        //PHP5.6 DowngradeSetList::PHP_71,
        //PHP5.6 DowngradeSetList::PHP_70,
    ]);
};
