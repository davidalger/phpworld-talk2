<?php

namespace Alger\Skeleton\Helper;

class Bar
{
    public function getDrinks()
    {
        return ['Sam Adams', 'Blue Moon'];
    }

    public function pourDrink($brew)
    {
        switch ($brew) {
            case 'Sam':
                return 'Adams';
            case 'Blue':
                return 'Moon';
        }
    }
}
