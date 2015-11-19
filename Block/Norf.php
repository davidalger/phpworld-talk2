<?php

namespace Alger\Skeleton\Block;

use Alger\Skeleton\Helper\Bar;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Norf extends Template
{
    protected $bar;

    public function __construct(
        Bar $bar,
        Context $context,
        array $data = []
    ) {
        $this->bar = $bar;
        parent::__construct($context, $data);
    }

    public function getDrinksCallout()
    {
        return 'Helper your self to an ' . implode(' or a ', $this->bar->getDrinks()) . '!';
    }
}
