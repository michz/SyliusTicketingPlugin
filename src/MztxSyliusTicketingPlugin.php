<?php

declare(strict_types=1);

namespace mztx\SyliusTicketingPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class MztxSyliusTicketingPlugin extends Bundle
{
    use SyliusPluginTrait;
}
