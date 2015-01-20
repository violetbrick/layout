<?php
/** {license_text}  */

namespace Layout\Output;

use Layout\Element\Output\OutputInterface;

class FormatHtml
    extends FormatAbstract
    implements FormatInterface
{
    /**
     * @return string
     */
    public function getCode()
    {
        return 'html';
    }
    
    /**
     * @param $data
     * @return string
     * @throws FormatException
     */
    public function format($data) {
        if (!is_string($data)) {
            throw new FormatException("Incorrect output data format");
        }
        
        return $data;
    }

    /**
     * @param OutputInterface $elementOutputInterface
     * @return mixed
     */
    protected function getElementOutput(OutputInterface $elementOutputInterface)
    {
        return $elementOutputInterface->toHtml();
    }
}
