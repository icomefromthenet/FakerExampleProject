<?php
namespace Faker\Extension\Faker\Type;

use Faker\Components\Faker\Exception as FakerException,
    Faker\Components\Faker\Type\Type,
    Faker\Components\Faker\Utilities,
    Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition,
    Symfony\Component\Config\Definition\Builder\TreeBuilder;

class RentalReturn extends Type
{

    //  -------------------------------------------------------------------------

    /**
     * Generate a value
     * 
     * @return string 
     */
    public function generate($rows,$values = array())
    {
        $return_date = clone $values['rental_date'];
        
        return $return_date->modify('+'.ceil($this->getGenerator()->generate(0,7)).' days');
    }
    
    
   
    //  -------------------------------------------------------------------------
    
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition 
     */
    public function getConfigExtension(ArrayNodeDefinition $rootNode)
    {
        return $rootNode;
    }
    
    
    //  -------------------------------------------------------------------------
}