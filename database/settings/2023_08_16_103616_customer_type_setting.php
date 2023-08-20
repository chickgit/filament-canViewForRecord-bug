<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.guardian_type', 0);
        $this->migrator->add('default.employee_type', 0);
        $this->migrator->add('default.teacher_type', 0);
    }

    public function down(): void
    {
        $this->migrator->delete('default.guardian_type');
        $this->migrator->delete('default.employee_type');
        $this->migrator->delete('default.teacher_type');
    }
};
