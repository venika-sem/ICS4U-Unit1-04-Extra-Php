<?php
/* This program generates a random number
 * By Venika Sem
 * @version 1.0
 * @since Feb-2024
 */

// input
$randomNumber = rand(1, 6);
$guesses = 0;

//  while loop
while (true) {
    $userGuessString = readline("Guess a number between 1 - 6: ");
    if ($userGuessString === '') {
        break;
    }
    if (!is_numeric($userGuessString) || intval($userGuessString) < 1 || intval($userGuessString) > 6) {
        echo "\nInvalid input. Please enter a number between 1 - 6.\n";
        continue;
    }
    $userGuessInt = intval($userGuessString);
    // process
    $guesses++;
    if ($userGuessInt !== $randomNumber) {
        if ($userGuessInt < $randomNumber) {
            echo "Your guess is too low. Try again.\n";
        } else {
            echo "Your guess is too high. Try again.\n";
        }
    } else {
        echo "You correctly guessed the number in $guesses tries!\n";
        break;
    }
}
echo "\nDone.\n";
?>
