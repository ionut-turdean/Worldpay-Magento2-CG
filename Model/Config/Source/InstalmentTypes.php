<?php

/**
 * @copyright 2017 Sapient
 */

namespace Sapient\Worldpay\Model\Config\Source;

class InstalmentTypes extends \Magento\Framework\App\Config\Value
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
//        return [
//            ['Type1' => __(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)],
//            ['Type2' => __(3, 6, 9, 10, 12, 15)],
//            ['Type3' => __(3, 6, 9, 10, 12, 18, 24, 36)],
//            ['Type4' => __(3, 6, 9, 10, 12, 18, 24, 36, 48)]
//        ];
         return [
            ['Type1' => ("2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12")],
            ['Type2' => ("3, 6, 9, 10, 12, 15")],
            ['Type3' => ("3, 6, 9, 10, 12, 18, 24, 36")],
            ['Type4' => ("3, 6, 9, 10, 12, 18, 24, 36, 48")]
         ];
    }
}
