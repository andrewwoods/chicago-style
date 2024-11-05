<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use AndrewWoods\ChicagoStyle\Content;

final class ContentTest extends TestCase
{
    public function testTitleCase(): void
    {
        // Sentence case 
        $currentTitle = 'The strange case of Dr. Jekyll and Mr. Hyde';
        $expected = 'The Strange Case of Dr. Jekyll and Mr. Hyde';

        $content = new Content();
        $resultTitle = $content->titleCase('Alice');

        $this->assertSame($expected, $resultTitle);

    }
}
