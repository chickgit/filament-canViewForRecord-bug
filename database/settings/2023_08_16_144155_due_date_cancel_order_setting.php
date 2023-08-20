<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.max_due_time_cancel_order', '23:59:59');
    }

    public function down(): void
    {
        $this->migrator->delete('default.max_due_time_cancel_order');
    }
};
