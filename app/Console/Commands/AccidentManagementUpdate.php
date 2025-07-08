<?php

namespace App\Console\Commands;

use App\Models\AccidentManagementForm;
use App\Models\User;
use Illuminate\Console\Command;
use Filament\Notifications\Notification;

class AccidentManagementUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:accident-management-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $updates = AccidentManagementForm::with('road_traffic_accident')->whereDate('next_update_date', '<=', now())
            ->get();

        if ($updates->isEmpty()) {
            return;
        }

        $recipients = User::role(['Superadmin', 'Admin'])->get();

        // return;

        foreach ($updates as $update) {
            foreach ($recipients as $recipient) {
                Notification::make()
                    ->title('Update Required')
                    ->body("The accident management form for {$update->road_traffic_accident->rta_number} requires an update.")
                    ->sendToDatabase($recipient);
            }
        }
    }
}
