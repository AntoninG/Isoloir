<?php

namespace Isoloir\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IsoloirSecurityBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
