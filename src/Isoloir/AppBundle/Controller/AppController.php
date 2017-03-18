<?php

namespace Isoloir\AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AppController, default controller of Isoloir application
 * @package Isoloir\AppBundle\Controller
 */
class AppController extends Controller
{
	/**
	 * @Route("/", name="index")
	 */
	public function indexAction()
	{
		return $this->render('@IsoloirApp/App/index.html.twig');
	}

	/**
	 * @Route("/sitemap", name="sitemap")
	 */
	public function  siteMapAction()
	{

	}

	/**
	 * @Route("/contact", name="contact_us")
	 */
	public function contactAction()
	{

	}

	/**
	 * @Route("/terms-conditions", name="terms_conditions")
	 */
	public function termsConditionsAction()
	{

	}

	/**
	 * @Route("/privacy-policy", name="privacy_policy")
	 */
	public function privacyPolicyAction()
	{

	}
}