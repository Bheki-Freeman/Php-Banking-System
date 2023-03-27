<?php
   /**
    * We want to create an atm system that will allow users to deposit money, check their balances, withdraw money
    * and transfer their money into different accounts.
    * ---------------------------------------------------
    * Users of the system will include: 
                                    * banker
                                    * customer
                                    * 
    * Let me define the logic:
    * ---------------------------------------------------
    * The banker creates an account for an individual client / company
    * If user qualifies for the account, account will be created and added into the ATM system
    * User will then login into the account
    * From the menu, the user can choose any task: 
                                    * checkBalance()
                                    * makeDeposit()
                                    * withDraw()
                                    * transferFunds()
                                    * then exit()
    */
?>


<?php include('atm.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Free Techno</title>
    <link rel="stylesheet" href="src/style.css">
    
</head>
<body>
    <?php include('header.php'); 
        $freeman = new UserAccount();
        $freeman->setAccountName("Sibekelo Account");     
    ?>
    <section class="container">
    <!-- <form id="process-form" action="index.php" method="post"> -->
            <div class="main-buttons">
                <button class="btn btn-check-balance" name="check-balance">CHECK BALANCE</button>
                <?php
    //functions
    if(isset($_POST['check-balance'])){
        ?>
        <div class="modal-container">
            <h3 class="modal-header text-center">Account Balances</h3>
                <div class="content">
                    <table class="display-table" cellspacing="5" cellpadding="20">
                        <thead>
                            <th>Account Name</th>
                            <th>Available Balance</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $freeman->getAccountName(); ?></td>
                                <td><?php printf("E %.2f ", $freeman->getBalance()); ?> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <button class="btn-close">Close</button>
            
        </div>
        <?php
    }


?>
        <button type="submit" class="btn btn-make-deposit" id="make-deposit" name="make-deposit">MAKE DEPOSIT</button>
      
       
        <div class="modal-container" id="deposit-modal" style="display: none;">
            <h3 class="modal-header text-center">Deposit Money</h3>
                <div class="content">
                    <form action="process-deposit.php" method="post">
                    <table class="display-table" cellspacing="5" cellpadding="20">
                        <thead>
                            <th>Account</th>
                            <th>Deposit Amount</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><select class="select-inputs" name="dep-account" id="dep-acc">
                                    <option value="Choose Account" selected>Choose Account</option>
                                    <option value="<?php printf("%s", $freeman->getAccountName()); ?>"><?php printf("%s", $freeman->getAccountName()); ?> </option>
                                </select> </td>
                                <td><input class="select-inputs s-inpu-txt" type="number" name="deposit-value" id="deposit-value" placeholder="0.00"></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <p class="text-center"><input class="btn-close" name="btn-deposit" id="btn-deposit" type="submit" value="Deposit" /></p>
                        <script>
                            const btn_deposit = document.querySelector('#btn-deposit');
                            btn_deposit.addEventListener('click', (e)=>{
                                console.log(`button now clicked`)
                            })
                            </script>
                    </form>
                </div>
                     
            
            
        </div>
 
                <button class="btn btn-withdraw" name="withdraw">WITHDRAW</button>
                <?php
    //functions
    if(isset($_POST['withdraw'])){
        ?>
        <div class="modal-container">
            <h3 class="modal-header text-center">Make WithDrawal</h3>
                <div class="content">
                    <table class="display-table" cellspacing="5" cellpadding="20">
                        <thead>
                            <th>Account</th>
                            <th>WithDrawal Amount</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="choose-acc" id="account-w" class="select-inputs">
                                        <option value="choose" selected>Choose Account ...</option>
                                        <option value="acc"><?php printf("%s", $freeman->getAccountName()); ?></option>
                                    </select>
                                </td>
                                <td> <input type="number" class="select-inputs s-inpu-txt" name="withdrawal-amount" id="w-amount" placeholder="0.00" /> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <button class="btn-close">Close</button>
            
        </div>
        <?php
    }


?>
                <button class="btn btn-transfer" name="transfer">TRANSFER</button>                
                <?php
    //functions
    if(isset($_POST['transfer'])){
        ?>
        <div class="modal-container">
            <h3 class="modal-header text-center">Transfer Money</h3>
                <div class="content">
                    <table class="display-table" cellspacing="5" cellpadding="20">
                        <thead>
                            <th>Choose Account</th>
                            <th>Destination Account</th>
                            <th>Transfer Amount</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><select name="choose-t" id="choose-t" class="select-inputs">
                                    <option value="choose-t" selected>Choose Account...</option>
                                    <option value="value"><?php echo $freeman->getAccountName(); ?></option>
                                </select></td>
                                <td> <input type="number" class="select-inputs s-inpu-txt" name="dest-account-num" id="dest-account-num" placeholder="Account Number" required /> </td>
                                <td> <input type="number" class="select-inputs s-inpu-txt" name="trans-amount" id="trans-amount" placeholder="Transfer Amount" /> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <button class="btn-close">Close</button>
            
        </div>
        <?php
    }


?>
            </div>
   
            <!-- </form> -->
    </section>

    <div class="footer">
        <span class="footer-span">Copyright &copy all rights reserved!</span>
        <span class="footer-span">Powered by <a href="http://www.facebook.com/freetechnoenterprises"> Free-techno Enterprises </a> </span>
    </div>

    <?php 
    echo '<script type="text/javascript" src="script.js"></script>'; ?>
</body>
</html>

