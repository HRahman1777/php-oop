/*
How implemention hide by abstruct method
*/

<?php

interface InterestRate
{
    public function interest();
}

class BankA implements InterestRate
{
    public function interest()
    {
        //all business logic for BankA
        return 5;
    }
}

class BankB implements InterestRate
{
    public function interest()
    {
        //all business logic for BankB
        return 6;
    }
}

class CompareBank
{
    public function compare(InterestRate $interestRate1, InterestRate $interestRate2)
    {
        //what ever you want to compare with those two, even there can be more methods to do so
        echo "A = " . $interestRate1->interest() . "<br/> B = " . $interestRate2->interest();
    }
}

$compareBank = new CompareBank;

$one = new BankA;
$two = new BankB;

//here we don't even need to know what's going on the BankA and BankB implimentation, we simply pass the them as an interface

echo $compareBank->compare($one, $two);
