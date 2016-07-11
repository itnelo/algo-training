<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 11.07.16 15:02
 */

class Node
{
    /**
     * @var Node
     */
    public $next;

    /**
     * @var int
     */
    public $value;

    /**
     * @param int $value
     */
    function __construct($value)
    {
        $this->value = $value;
    }
}

function printList(Node $tail)
{
    $elem = $tail;

    while (!is_null($elem)) {
        echo $elem->value . PHP_EOL;

        $elem = $elem->next;
    }
}

$tail = new Node(1);
$tail->next = new Node(2);
$tail->next->next = new Node(3);
$tail->next->next->next = new Node(4);

//printList($tail);

// 1. new list

$curr = $tail;
$prev = null;
$next = null;

while ($curr != null) {
    $next = $curr->next;
    $curr->next = $prev;
    $prev = $curr;
    $curr = $next;
}

$tail = $prev;

printList($tail);
