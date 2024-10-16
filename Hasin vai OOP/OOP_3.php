<?php
class Fund {
    private $fund;
    function __construct( $initial = 0 ) {
        $this->fund = $initial;
    }
    public function addFund( $money ) {
        $this->fund += $money;
    }
    public function debtFund( $money ) {
        $this->fund -= $money;
    }
    public function getTotal() {
        echo "Total: $this->fund \n";
    }
}

$ourFundObject = new Fund( 100 );
$ourFundObject->getTotal();
$ourFundObject->debtFund( 50 );
$ourFundObject->addFund( 10 );
$ourFundObject->getTotal();