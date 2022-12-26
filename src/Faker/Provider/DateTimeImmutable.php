<?php

namespace App\Faker\Provider;

use DateTime;
use DateTimeImmutable;
use Faker\Provider\Base as BaseProvider;

final class DatetimeImmutableProvider extends BaseProvider
{
    public function DatetimeImmutable(DateTime $datetime)
    {
        return DateTimeImmutable::createFromMutable($datetime);
    }
}   