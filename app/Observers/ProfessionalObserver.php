<?php

namespace App\Observers;

use App\Mail\ProfessionalApproval;
use App\Models\Professional;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProfessionalObserver
{
    /**
     * Handle the Professional "created" event.
     */
    public function created(Professional $professional): void
    {
        //
    }

    /**
     * Handle the Professional "updated" event.
     */
    public function updated(Professional $professional): void
    {
        if ($professional->isDirty('status') && $professional->status == 'approved') {
            $password = rand(11111, 99999);
            $professional->password = Hash::make($password);
            $professional->saveQuietly();
            Mail::to($professional->email)->send(new ProfessionalApproval($professional, $password));
        }
    }

    /**
     * Handle the Professional "deleted" event.
     */
    public function deleted(Professional $professional): void
    {
        //
    }

    /**
     * Handle the Professional "restored" event.
     */
    public function restored(Professional $professional): void
    {
        //
    }

    /**
     * Handle the Professional "force deleted" event.
     */
    public function forceDeleted(Professional $professional): void
    {
        //
    }
}
