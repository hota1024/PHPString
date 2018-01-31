<?php
namespace hota1024;
use ArrayAccess as ArrayAccess;
use IteratorAggregate as IteratorAggregate;

class Str implements ArrayAccess, IteratorAggregate{
    public $string;

    /***
     * Str constructor.
     * @param $str
     */
    public function __construct($str)
    {
        $this->string = $str;
    }

    /* <Magic method> */
    public function __toString() : string
    {
        return $this->string;
    }

    public function __get($name) : int
    {
        if($name === 'length') return mb_strlen($this->string);
    }
    /* </Magic method> */

    /* <Array> */
    /***
     * src convert to array
     * @return array
     */
    public function asArray() : array
    {
        return str_split($this->string);
    }

    public function offsetGet($index) : string
    {
        return $this->string[$index] ?? null;
    }

    public function offsetExists($index) : string
    {
        return isset($this->string[$index]);
    }

    public function offsetSet($index, $value)
    {
        if(is_null($index)){
            $this->string .= $value;
        }else{
            $this->string[$index] = $value;
        }
    }

    public function offsetUnset($index)
    {
        unset($this->string[$index]);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->asArray());
    }

    /***
     * foreach wrapper. You can not change value.
     * If you want change value, you must use foreach().
     * @param callable $f
     */
    public function each(callable $f)
    {
        foreach ($this as $key => $char){
            $f($key, $char);
        }
    }
    /* </Array> */

    /* <Pseudo operator> */
    /***
     * Set string or value.
     * @param $value
     * @return Str
     */
    public function set($value) : Str
    {
        $this->string = $value;
        return $this;
    }

    /***
     * Add string or value.
     * @param $value
     * @return Str
     */
    public function add($value) : Str
    {
        $this->string .= $value;
        return $this;
    }
    /* </Pseudo operator> */

    /* <src> */
    /***
     * Reverse string
     * @return Str
     */
    public function reverse() : Str
    {
        $this->string = strrev($this->string);
        return $this;
    }

    /***
     * Return reversed string
     * @return string
     */
    public function reversed() : string
    {
        return strrev($this->string);
    }

    /***
     * Output content
     * @return Str
     */
    public function output() : Str
    {
        echo $this->string;
        return $this;
    }

    /***
     * Explode string
     * @param string $delimiter
     * @param int $limit
     * @return array
     */
    public function explode(string $delimiter, int $limit = PHP_INT_MAX) : array
    {
        return explode($delimiter, $this->string, $limit);
    }

    /***
     * Sanitize string
     * @return Str
     */
    public function sanitize() : Str
    {
        $this->string = htmlspecialchars($this->string);
        return $this;
    }

    /***
     * Return sanitized string
     * @return string
     */
    public function sanitized() : string
    {
        return htmlspecialchars($this->string);
    }
    /* </src>*/
}
