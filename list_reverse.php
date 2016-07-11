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
    public $data;

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

$tail = new Node(1);
$tail->next = new Node(2);
$tail->next->next = new Node(3);
$tail->next->next->next = new Node(4);

print_r($tail);

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

print_r($tail);
