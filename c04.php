<?php
include 'Account.php';
include 'Customer.php';

$accounts = [new Account(20489446, 'Checking', -20)
            ,new Account(20487777, 'Savings', 380)];

$customer = new Customer('Ivy', 'Stone', 'ivy@eg.link', 'alksdjflksdf', $accounts);
?>
<?php include 'header.php'; ?>
<h2>Name: <b> <?= $customer->getFullName() ?></b></h2>

<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>
    <?php foreach ($customer->accounts as $account) { ?>
        <tr>
            <td><?= $account->number ?></td>
            <td><?= $account->type ?></td>
            <td><?= $account->getBalance() ?></td>
        </tr>
    <?php } ?>
</table>