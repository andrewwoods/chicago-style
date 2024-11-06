<?php

namespace AndrewWoods\ChicagoStyle;

class Content
{
    protected $articles = ['a', 'an', 'the'];

    protected $conjunctions = ['and', 'but', 'for', 'nor', 'or', 'so', 'yet'];

    protected $prepositions = [
        'about',
        'above',
        'across',
        'after',
        'against',
        'among',
        'around',
        'at',
        'before',
        'behind',
        'below',
        'beside',
        'between',
        'by',
        'down',
        'during',
        'for',
        'from',
        'in',
        'inside',
        'into',
        'near',
        'of',
        'off',
        'on',
        'out',
        'over',
        'through',
        'to',
        'toward',
        'under',
        'up',
        'with',
    ];

    public function titleCase($content)
    {
        $title = [];

        $content = ucwords($content);
        $contentWords = explode(' ', $content);
        $wordNumber = 1;
        $wordTotal = count($contentWords);
        foreach ($contentWords as $word) {
            $wordLowercase = strtolower($word);

            if ($wordNumber != 1 && $wordNumber != $wordTotal ) {
                if (in_array($wordLowercase, $this->articles)) {
                    $word = $wordLowercase;
                }

                if (in_array($wordLowercase, $this->conjunctions)) {
                    $word = $wordLowercase;
                }

                if (in_array($wordLowercase, $this->prepositions)) {
                    $word = $wordLowercase;
                }
            }

            $title[] = $word;
            $wordNumber += 1;
        }

        return implode(' ', $title);
    }

}
