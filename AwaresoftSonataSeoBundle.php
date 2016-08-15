<?php

namespace Awaresoft\Sonata\SeoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * AwaresoftSonataSeoBundle class
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class AwaresoftSonataSeoBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataSeoBundle';
    }
}