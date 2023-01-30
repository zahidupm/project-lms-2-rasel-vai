<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class LeadEdit extends Component
{
    public $lead_id;
    public  $name;
    public $email;
    public $phone;

    public function mount() {
        $lead = Lead::findOrFail($this->lead_id);
        $this->lead_id = $lead->id;
        $this->name = $lead->name;
        $this->email = $lead->email;
        $this->phone = $lead->phone;
    }

    public function render()
    {
        $lead = Lead::findOrFail($this->lead_id);
        return view('livewire.lead-edit', [
            'lead' => $lead
        ]);
    }

    protected $rules = [
      'email' => 'required',
      'phone' => 'required'
    ];

    public function submitForm() {
        sleep(5);

        $lead = Lead::findOrFail($this->lead_id);

        $this->validate();

        $lead->name = $this->name;
        $lead->email = $this->email;
        $lead->phone = $this->phone;
        $lead->save();

        flash()->addSuccess('Lead updated successfully');
    }
}
