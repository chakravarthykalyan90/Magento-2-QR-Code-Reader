<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Sigma\Scanner\Block\Index;

class Index extends \Magento\Framework\View\Element\Template
{

    protected $_template = 'Sigma_Scanner::scanner/scanner.phtml';
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    public function getContent() : string
    {
        return 'Dummy content';
    }
    public function getHref()
    {
        return $this->getUrl('testuser');
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getLabel()
    {
        return __('Test Link');
    }
}

