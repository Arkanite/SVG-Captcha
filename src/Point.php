<?php

namespace NikolaiT\Captcha;

/**
 * A simple class to represent points. The components are public members, since working with
 * getters and setters is too pendantic in this context.
 */
class Point {

    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString() {
        return 'Point(x=' . $this->x . ', y=' . $this->y . ')';
    }

    public function _equals($p) {
        if ($p instanceof Point) {
            return ($this->x == $p->x && $this->y == $p->y);
        } else {
            return False;
        }
    }
}
