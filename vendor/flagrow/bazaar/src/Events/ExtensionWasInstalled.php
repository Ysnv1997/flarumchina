<?php

namespace Extiverse\Bazaar\Events;

use Flarum\Extension\Extension;

class ExtensionWasInstalled
{
    /**
     * @var Extension
     */
    public $extension;

    /**
     * @param Extension $extension
     */
    public function __construct(Extension $extension)
    {
        $this->extension = $extension;
    }
}
