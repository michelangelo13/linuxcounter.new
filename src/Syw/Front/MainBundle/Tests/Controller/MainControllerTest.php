<?php

namespace Syw\Front\MainBundle\Tests\Controller;

class MainControllerTest extends BaseControllerTest
{
    /*
     * @desc Check for using the base.html.twig
     */
    public function testMainIndexCharset()
    {
        $crawler = $this->client->request('GET', $this->base_proto.'://'.$this->base_host.'/');
        $this->assertGreaterThan(0, $crawler->filter('meta[charset="utf-8"]')->count());
    }

    /*
     * @desc Check for the correct content on /
     */
    public function testMainIndexContent()
    {
        $crawler = $this->client->request('GET', $this->base_proto.'://'.$this->base_host.'/');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("We are providing the most accurate and complete statistics about linux and its distributions, users, kernels and machines in the world wide web. This also includes statistics about users per country or city, most used cpus, top uptimes lists and much more.")')->count());
    }

    /*
     * @desc Check for the correct content on /contact
     */
    public function testMainContactContent()
    {
        $crawler = $this->client->request('GET', $this->base_proto.'://'.$this->base_host.'/contact');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Contact")')->count());
    }

    /*
     * @desc Check for the correct content on /about
     */
    public function testMainAboutContent()
    {
        $crawler = $this->client->request('GET', $this->base_proto.'://'.$this->base_host.'/about');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("About")')->count());
    }

    /*
     * @desc Check for the correct content on /download
     */
    public function testMainDownloadContent()
    {
        $crawler = $this->client->request('GET', $this->base_proto.'://'.$this->base_host.'/download');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Download")')->count());
    }

    /*
     * @desc Check for the correct content on /impressum
     */
    public function testMainImpressumContent()
    {
        $crawler = $this->client->request('GET', $this->base_proto.'://'.$this->base_host.'/impressum');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Imprint")')->count());
    }

    /*
     * @desc Check for the correct content on /support
     */
    public function testMainSupportContent()
    {
        $crawler = $this->client->request('GET', $this->base_proto.'://'.$this->base_host.'/support');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Support")')->count());
    }
}
