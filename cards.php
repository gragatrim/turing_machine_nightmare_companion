<?php
class Card {
  function __construct($number, $conditions) {
    $this->number = $number;
    $this->conditions = $conditions;
  }
}

$cards = array();
$cards[1] = new Card(1,array('<div class="triangle"></div> is equal to 1', '<div class="triangle"></div> is greater than 1'));
$cards[2] = new Card(2,array('<div class="triangle"></div> is less than 3', '<div class="triangle"></div> is equal to 3', '<div class="triangle"></div> is greater than 3'));
$cards[3] = new Card(3,array('<div class="square"></div> is less than 3', '<div class="square"></div> is equal to 3', '<div class="square"></div> is greater than 3'));
$cards[4] = new Card(4,array('<div class="square"></div> is less than 4', '<div class="square"></div> is equal to 4', '<div class="square"></div> is greater than 4'));
$cards[5] = new Card(5,array('<div class="triangle"></div> is even', '<div class="triangle"></div> is odd'));
$cards[6] = new Card(6,array('<div class="square"></div> is even', '<div class="square"></div> is odd'));
$cards[7] = new Card(7,array('<div class="circle"></div> is even', '<div class="circle"></div> is odd'));
$cards[8] = new Card(8,array('zero 1s', 'one 1', 'two 1s', 'three 1s'));
$cards[9] = new Card(9,array('zero 3s', 'one 3', 'two 3s', 'three 3s'));
$cards[10] = new Card(10,array('zero 4s', 'one 4', 'two 4s', 'three 4s'));
$cards[11] = new Card(11,array('<div class="triangle"></div> is less than <div class="square"></div>', '<div class="triangle"></div> equals <div class="square"></div>', '<div class="triangle"></div> is greater than <div class="square"></div>'));
$cards[12] = new Card(12,array('<div class="triangle"></div> is less than <div class="circle"></div>', '<div class="triangle"></div> equals <div class="circle"></div>', '<div class="triangle"></div> is greater than <div class="circle"></div>'));
$cards[13] = new Card(13,array('<div class="square"></div> is less than <div class="circle"></div>', '<div class="square"></div> equals <div class="circle"></div>', '<div class="square"></div> is greater than <div class="circle"></div>'));
$cards[14] = new Card(14,array('<div class="triangle"></div> is smaller than <div class="circle"></div> and <div class="square"></div>', '<div class="square"></div> is smaller than <div class="triangle"></div> and <div class="circle"></div>', '<div class="circle"></div> is smaller than <div class="square"></div> and <div class="triangle"></div>'));
$cards[15] = new Card(15,array('<div class="triangle"></div> is larger than <div class="circle"></div> and <div class="square"></div>', '<div class="square"></div> is larger than <div class="triangle"></div> and <div class="circle"></div>', '<div class="circle"></div> is larger than <div class="square"></div> and <div class="triangle"></div>'));
$cards[16] = new Card(16,array('there are more even than odd numbers', 'there are more odd than even numbers'));
$cards[17] = new Card(17,array('zero even numbers', 'one even number', 'two even number', 'three even numbers'));
$cards[18] = new Card(18,array('<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is even', '<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is odd'));
$cards[19] = new Card(19,array('<div class="triangle"></div> + <div class="square"></div> is less than 6', '<div class="triangle"></div> + <div class="square"></div> is equal to 6', '<div class="triangle"></div> + <div class="square"></div> is greater than 6'));
$cards[20] = new Card(20,array('a triple number', 'a double number', 'no repetition'));
$cards[21] = new Card(21,array('no pairs', 'a pair'));
$cards[22] = new Card(22,array('ascending order', 'descending order', 'no order'));
$cards[23] = new Card(23,array('<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is less than 6', '<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is equal to 6', '<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is greater than 6'));
$cards[24] = new Card(24,array('three numbers in ascending order', 'two numbers in ascending order', 'no numbers in ascending order'));
$cards[25] = new Card(25,array('no sequence of numbers in ascending or descending order', 'two numbers in ascending or descending order', 'three numbers in ascending or descending order'));
$cards[26] = new Card(26,array('<div class="triangle"></div> is less than 3', '<div class="square"></div> is less than 3', '<div class="circle"></div> is less than 3'));
$cards[27] = new Card(27,array('<div class="triangle"></div> is less than 4', '<div class="square"></div> is less than 4', '<div class="circle"></div> is less than 4'));
$cards[28] = new Card(28,array('<div class="triangle"></div> is equal to 1', '<div class="square"></div> is equal to 1', '<div class="circle"></div> is equal to 1'));
$cards[29] = new Card(29,array('<div class="triangle"></div> is equal to 3', '<div class="square"></div> is equal to 3', '<div class="circle"></div> is equal to 3'));
$cards[30] = new Card(30,array('<div class="triangle"></div> is equal to 4', '<div class="square"></div> is equal to 4', '<div class="circle"></div> is equal to 4'));
$cards[31] = new Card(31,array('<div class="triangle"></div> is greater than 1', '<div class="square"></div> is greater than 1', '<div class="circle"></div> is greater than 1'));
$cards[32] = new Card(32,array('<div class="triangle"></div> is greater than 3', '<div class="square"></div> is greater than 3', '<div class="circle"></div> is greater than 3'));
$cards[33] = new Card(33,array('<div class="triangle"></div> is even', '<div class="triangle"></div> is odd', '<div class="square"></div> is even', '<div class="square"></div> is odd', '<div class="circle"></div> is even', '<div class="circle"></div> is odd'));
$cards[34] = new Card(34,array('<div class="triangle"></div> is the smallest or is equal to <div class="circle"></div> and <div class="square"></div>', '<div class="square"></div> is the smallest or equal to <div class="triangle"></div> and <div class="circle"></div>', '<div class="circle"></div> is the smallest or equal to <div class="square"></div> and <div class="triangle"></div>'));
$cards[35] = new Card(35,array('<div class="triangle"></div> is the largest or is equal to <div class="circle"></div> and <div class="square"></div>', '<div class="square"></div> is the largest or equal to <div class="triangle"></div> and <div class="circle"></div>', '<div class="circle"></div> is the largest or equal to <div class="square"></div> and <div class="triangle"></div>'));
$cards[36] = new Card(36,array('<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is a multiple of 3', '<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is a multiple of 4', '<div class="triangle"></div> + <div class="square"></div> + <div class="circle"></div> is a multiple of 5'));
$cards[37] = new Card(37,array('<div class="triangle"></div> + <div class="square"></div> is equal to 4', '<div class="triangle"></div> + <div class="circle"></div> is equal to 4', '<div class="square"></div> + <div class="circle"></div> is equal to 4'));
$cards[38] = new Card(38,array('<div class="triangle"></div> + <div class="square"></div> is equal to 6', '<div class="triangle"></div> + <div class="circle"></div> is equal to 6', '<div class="square"></div> + <div class="circle"></div> is equal to 6'));
$cards[39] = new Card(39,array('<div class="triangle"></div> is equal to 1', '<div class="triangle"></div> is greater than 1', '<div class="square"></div> is equal to 1', '<div class="square"></div> is greater than 1', '<div class="circle"></div> is equal to 1', '<div class="circle"></div> is greater than 1'));
$cards[40] = new Card(40,array('<div class="triangle"></div> is less than 3', '<div class="triangle"></div> is equal to 3', '<div class="triangle"></div> is greater than 3', '<div class="square"></div> is less than 3', '<div class="square"></div> is equal to 3', '<div class="square"></div> is greater than 3', '<div class="circle"></div> is less than 3', '<div class="circle"></div> is equal to 3', '<div class="circle"></div> is greater than 3'));
$cards[41] = new Card(41,array('<div class="triangle"></div> is less than 4', '<div class="triangle"></div> is equal to 4', '<div class="triangle"></div> is greater than 4', '<div class="square"></div> is less than 4', '<div class="square"></div> is equal to 4', '<div class="square"></div> is greater than 4', '<div class="circle"></div> is less than 4', '<div class="circle"></div> is equal to 4', '<div class="circle"></div> is greater than 4'));
$cards[42] = new Card(42,array('<div class="triangle"></div> is the smallest', '<div class="triangle"></div> is the largest', '<div class="square"></div> is the smallest', '<div class="square"></div> is the largest', '<div class="circle"></div> is the smallest', '<div class="circle"></div> is the largest'));
$cards[43] = new Card(43,array('<div class="triangle"></div> is less than <div class="square"></div>', '<div class="triangle"></div> is less than <div class="circle"></div>', '<div class="triangle"></div> is equal to <div class="square"></div>', '<div class="triangle"></div> is equal to <div class="circle"></div>', '<div class="triangle"></div> is greater than <div class="square"></div>', '<div class="triangle"></div> is greater than <div class="circle"></div>'));
$cards[44] = new Card(44,array('<div class="square"></div> is less than <div class="triangle"></div>', '<div class="square"></div> is less than <div class="circle"></div>', '<div class="square"></div> is equal to <div class="triangle"></div>', '<div class="square"></div> is equal to <div class="circle"></div>', '<div class="square"></div> is greater than <div class="triangle"></div>', '<div class="square"></div> is greater than <div class="circle"></div>'));
$cards[45] = new Card(45,array('zero 1s', 'zero 3s', 'one 1', 'one 3', 'two 1s', 'two 3s'));
$cards[46] = new Card(46,array('zero 3s', 'zero 4s', 'one 3', 'one 4', 'two 3s', 'two 4s'));
$cards[47] = new Card(47,array('zero 1s', 'zero 4s', 'one 1', 'one 4', 'two 1s', 'two 4s'));
$cards[48] = new Card(48,array('<div class="triangle"></div> is less than <div class="square"></div>', '<div class="triangle"></div> is equal to <div class="square"></div>', '<div class="triangle"></div> is greater than <div class="square"></div>', '<div class="triangle"></div> is less than <div class="circle"></div>', '<div class="triangle"></div> is equal to <div class="circle"></div>', '<div class="triangle"></div> is greater than <div class="circle"></div>', '<div class="square"></div> is less than <div class="circle"></div>', '<div class="square"></div> is equal to <div class="circle"></div>', '<div class="square"></div> is greater than <div class="circle"></div>'));
