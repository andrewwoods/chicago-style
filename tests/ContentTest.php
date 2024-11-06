<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use AndrewWoods\ChicagoStyle\Content;

final class ContentTest extends TestCase
{
    public function testTitleCase(): void
    {
        $currentTitle = 'burning chrome';
        $expected = 'Burning Chrome';

        $content = new Content();
        $resultTitle = $content->titleCase($currentTitle);

        $this->assertSame($expected, $resultTitle);
    }

    public function testTitleCaseHasConjunctions(): void
    {
        // Sentence case
        $currentTitle = 'writing for women and men yet nobody reads';
        $expected = 'Writing for Women and Men yet Nobody Reads';

        $content = new Content();
        $resultTitle = $content->titleCase($currentTitle);

        $this->assertSame($expected, $resultTitle);
    }

    public function testTitleCaseHasConjunctionsInitPreposition(): void
    {
        // Sentence case
        $currentTitle = 'of mice and men';
        $expected = 'Of Mice And Men';

        $content = new Content();
        $actual = $content->titleCase($currentTitle);

        $this->assertSame('Of Mice And Men', $actual, 'These are the same');
    }

    public function testTitleCaseHasArticles(): void
    {
        // Sentence case
        $currentTitle = 'the return of the king';
        $expected = 'The Return of the King';

        $content = new Content();
        $resultTitle = $content->titleCase($currentTitle);

        $this->assertSame($expected, $resultTitle);
    }

    public function testTitleCaseHasPrepositions(): void
    {
        $currentTitle = 'technology for, by, and of the people';
        $expected = 'Technology for, by, and of the People';

        $content = new Content();
        $resultTitle = $content->titleCase($currentTitle);

        $this->assertSame($expected, $resultTitle);
    }

}
