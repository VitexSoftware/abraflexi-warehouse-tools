<?php

declare(strict_types=1);

/**
 * This file is part of the  abraflexi-warehouse-tools package.
 *
 * (c) Vítězslav Dvořák <https://vitexsoftware.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

\define('APP_NAME', 'AbraFlexi Stock Cards');

require_once '../vendor/autoload.php';

\Ease\Shared::init(['ABRAFLEXI_URL', 'ABRAFLEXI_LOGIN', 'ABRAFLEXI_PASSWORD', 'ABRAFLEXI_COMPANY'], file_exists('.env') ? '.env' : '../.env');
// new \Ease\Locale(Shared::cfg('LOCALIZE', 'cs_CZ'), '../i18n', 'abraflexi-pricefixer');

$sokoban = new \AbraFlexi\Cenik();

$storeGoods = $sokoban->getColumnsFromAbraFlexi(['kod', 'nazev', 'ean'], ['skladove' => true, 'relations' => 'sklad-karty', 'detail' => 'id']);

print_r($storeGoods);
