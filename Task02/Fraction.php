<?php

class Fraction
{
    private $Num;
    private $Denum;

    public function __construct($Num, $Denum)
    {
        if ($this->CheckValue($Num) and $this->CheckValue($Denum) and $Denum) {
            if ($Denum < 0) {
                $Num = -$Num;
                $Denum = -$Denum;
            }
            $this->Num = $Num;
            $this->Denum = $Denum;
            $this->NOD();
        } else {
            echo 'error enter values';
        }
    }

    public function getNumer()
    {
        return $this->Num;
    }

    public function getDenom()
    {
        return $this->Denum;
    }

    public function add($frac)
    {
        $this->Num = $this->Num * $frac->getDenom() + $this->Denum * $frac->getNumer();
        $this->Denum *= $frac->getDenom();
        $this->NOD();
        return $this->__toString();
    }

    public function sub($frac)
    {
        if ($frac->getNumer() < 0) {
            $frac->Num = -$frac->getNumer();
            return $this->add($frac);
        }
        $this->Num = $this->Num * $frac->getDenom() - $this->Denum * $frac->getNumer();
        $this->Denum *= $frac->getDenom();
        $this->NOD();
        return $this->__toString();
    }

    private function checkValue($Chars)
    {
        $Chars .= '';
        $Char = $Chars[0];
        if (!(($Char >= '0' and $Char <= '9') or $Char == '-')) {
            return false;
        }
        for ($i = 1; $i - strlen($Chars);) {
            $Char = $Chars[$i++];
            if (!($Char >= '0' and $Char <= '9')) {
                return false;
            }
        }
        return true;
    }

    private function NOD()
    {
        $Numer = $this->Num;
        $Denom = $this->Denum;
        while ($Numer and $Denom) {
            (abs($Numer) > abs($Denom)) ? $Numer %= $Denom : $Denom %= $Numer;
        }
        $this->Num /= ($Numer + $Denom);
        $this->Denum /= ($Numer + $Denom);
    }

    public function __toString()
    {
        if (abs($this->Num) > abs($this->Denum)) {
            $New_Numer = $this->Num % $this->Denum;
            return (($this->Num - $New_Numer) / $this->Denum) . '\'' . ($New_Numer < 0 ? -$New_Numer : $New_Numer)
                . '/' . ($this->Denum < 0 ? -$this->Denum : $this->Denum);
        }
        if (!($this->Num - $this->Denum)) {
            return 1;
        }
        return $this->Num . '/' . $this->Denum;
    }
}
