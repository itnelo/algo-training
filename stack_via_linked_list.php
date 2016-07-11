<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 11.07.16 18:35
 */

class Stack
{
    /**
     * @var Node
     */
    public $head;

    /**
     * @param int $data
     */
    public function push($data)
    {
        if ($this->head == NULL) {
            $this->head = new Node($data);
        } else {
            $elem = new Node($data, $this->head);
            $this->head = $elem;
        }
    }

    /**
     * @return int
     */
    public function pop()
    {
        $data = $this->head->data;
        $this->head = $this->head->next;

        return $data;
    }
}

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

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(5);
$stack->push(10);

print_r($stack);

echo $stack->pop() . PHP_EOL;

print_r($stack);

echo $stack->pop() . PHP_EOL;

print_r($stack);