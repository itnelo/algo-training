<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 11.07.16 16:58
 */

class Node
{
    /**
     * @var int
     */
    public $data;

    /**
     * @var Node
     */
    public $next;

    /**
     * @param int $data
     * @param Node $next
     */
    function __construct($data, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}

$tail = new Node(1, new Node(2, new Node(3, new Node(4))));

print_r($tail);

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

print_r($tail);
