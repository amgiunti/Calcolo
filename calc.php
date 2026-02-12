<?php
declare(strict_types=1);

/**
 * Ritorna il numero incrementato di 1.
 */
function increment(int $n): int
{
    return $n + 1;
}

// Comando di esecuzione: php count.php [numero]
// Esempio: php calc.php 8
$num = (int)($argv[1] ?? 0);
echo increment($num) . PHP_EOL;
