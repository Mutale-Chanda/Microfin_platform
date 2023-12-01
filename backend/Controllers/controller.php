<?php 
namespace Controllers;

use Models\LoanType;
use Models\Institution;
use Models\Social;
use Models\User;

// LOAN TYPES
$autoLoan = new LoanType('Auto Loan', 'For the purchase of a car');
$personalLoan = new LoanType('Personal Loan', 'Assists with personal projects');
$studentLoan = new LoanType('Student Loan', 'Redue the burden of tuition fees');

// SOCIAL LINKS
$fb = new Social('Facebook', 'https://www.fb');                 
$x = new Social('X', 'https://www.twitter');
$site = new Social('Website', 'https://www.website');

// USERS
$john = new User('John', 'Doe', 'jd@mail.com', 'password123');
$mary = new User('Mary', 'Jane', 'maryj@email.com', 'peterParker!');

// MICROFINS
$kunta_inv = new Institution(
    'Kunta Investment', 
    'Whatever you need, we gatchu',
    [$studentLoan,$personalLoan],
    [$fb, $x]
);
$brian_chanda = new Institution(
    'Brian Chanda Inovations', 
    'Leading tech provider',
    [$autoLoan,$personalLoan],
    [$fb, $x, $site]
);

echo "controller ready";

?>