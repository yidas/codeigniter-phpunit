<?php

use PHPUnit\Framework\TestCase;

final class CodeigniterTest extends TestCase
{
    function __construct() 
    {
        parent::__construct();
        // Load CI application
        $this->CI = & get_instance();
    }
    
    public function testConfigItem()
    {
        $indexPage = $this->CI->config->item('index_page');
        
        $this->assertSame('index.php', $indexPage);
    }
}
