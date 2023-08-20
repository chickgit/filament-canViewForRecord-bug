<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('notification.min_point_reminder', 10);
        $this->migrator->add('notification.min_days_order_reminder', 2);
    }
};
