<?php
namespace PrajapatiDhara1510\PrestashopWebService\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \PrajapatiDhara1510\PrestashopWebService\PrestashopWebServiceProvider::class,
        ];
    }
    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application    $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.debug', true);
        $app['config']->set('prestashop-webservice', require ('config/prestashop-webservice.php'));
    }

    protected function getPackageAliases($app)
    {
        return [
            'Prestashop' => \PrajapatiDhara1510\PrestashopWebService\PrestashopWebServiceFacade::class,
        ];
    }
}
