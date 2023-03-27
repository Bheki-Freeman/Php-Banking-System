<?php
    class UserAccount{
        //Global variables
        public $balance;
        public $deposit;
        public $widthdrawal;
        public $account_name;

        //Constructors
        function __construct(){
            $this->balance = 0.00;
            $this->deposit = 0.00;
            $this->widthdrawal = 0.00;
            $this->account_name = "";
        }

        //Functions
        function depositMoney($deposit){ //make the deposit
            $balance = ($this->getBalance() + $deposit);
            $this->setBalance($balance);
        }

        function withDrawMoney($amount){
            $new_balance = ($this->getBalance() - $amount);
            $this->setBalance($new_balance);
        }

        function checkBalance(){//To display current balance /same as getBalance**
            return $this->getBalance();
        }

         //Now, create a function to make a transfer
         function transferFunds($amount, $new_account){            
            $new_account->setBalance($new_account->getBalance() + $amount);
            $this->setBalance($this->getBalance() - $amount);
        }

        //Setters and getters
        function setBalance($amount){
            $this->balance = $amount;
        }
        function getBalance(){
            return $this->balance;
        }

        function setAccountName($nam){
            $this->account_name = $nam;
        }

        function getAccountName(){
            return $this->account_name;
        }
       
    }

    
?>