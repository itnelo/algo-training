<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 11.07.16 16:58
 */

class Node
{
    public $next;

    public $value;

    function __construct($value, $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }

    public function printValue()
    {
        echo $this->value . PHP_EOL;
    }

    public function dump()
    {
        $this->printValue();
        $node = $this;

        /** @var Node $node */
        while ($node = $node->next) {
            $node->printValue();
        }
    }
}

$tail = new Node(1, new Node(2, new Node(3, new Node(4))));

//$tail->dump();

$prev = null;
$curr = $tail;
$next = null;

while ($curr != null) {
    $next = $curr->next;
    $curr->next = $prev;
    $prev = $curr;
    $curr = $next;
}

$tail = $prev;

$tail->dump();
