<?php

require_once './tests/bootstrap.php';


class ContrastYIQTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var ContrastYIQ
     */
    protected $contrastYIQ;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->contrastYIQ = new ContrastYIQ;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers ContrastYIQTest::testGetContrastColor
     */
    public function testGetContrastColor()
    {

		$this->assertEquals( 'white', $this->contrastYIQ->getContrastYIQ( '#000000' ) );
		$this->assertEquals( 'black', $this->contrastYIQ->getContrastYIQ( '#FFFFFF' ) );
		$this->assertEquals( 'black', $this->contrastYIQ->getContrastYIQ( '#ffffff' ) );
		$this->assertEquals( 'white', $this->contrastYIQ->getContrastYIQ( '#7f7f7f' ) );
		$this->assertEquals( 'black', $this->contrastYIQ->getContrastYIQ( '#808080' ) );
    }

}
