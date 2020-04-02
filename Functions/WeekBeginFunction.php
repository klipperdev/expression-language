<?php

/*
 * This file is part of the Klipper package.
 *
 * (c) François Pluchino <francois.pluchino@klipper.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Klipper\Component\ExpressionLanguage\Functions;

use Klipper\Component\Intl\CalendarUtil;

/**
 * Week begin function.
 *
 * @author François Pluchino <francois.pluchino@klipper.dev>
 */
class WeekBeginFunction extends BaseFunction
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('week_begin', static function () {
            $value = date_create('previous '.CalendarUtil::getFirstDayOfWeekName());

            return DateFunctionUtil::getFormatter()->format($value);
        });
    }
}