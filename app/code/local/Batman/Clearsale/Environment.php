<?php

class Clearsale_Environment
{

    public function toOptionArray()
    {
        return array(
            array('value' => 'approval', 'label'=>Mage::helper('adminhtml')->__('Homologação')),
            array('value' => 'production', 'label'=>Mage::helper('adminhtml')->__('Produção')),
        );
    }

}
