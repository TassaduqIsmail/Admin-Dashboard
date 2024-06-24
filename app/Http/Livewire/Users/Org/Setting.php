<?php

namespace App\Http\Livewire\Users\Org;

use App\Models\Setting as ModelsSetting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Setting extends Component
{

    public $setting;
    public $logo_lg_light, $logo_sm_light, $logo_sm_dark, $logo_lg_dark;


    use WithFileUploads;

    protected $rules = [
        'setting.theme_mode' => 'nullable',
        'setting.primary_color' => 'nullable',
        'logo_lg_light' => 'nullable|image|max:1024',
        'logo_sm_light' => 'nullable|image|max:1024',
        'logo_lg_dark' => 'nullable|image|max:1024',
        'logo_sm_dark' => 'nullable|image|max:1024',
    ];

    public function mount()
    {
        $this->setting = ModelsSetting::firstOrNew();
    }

    public function render()
    {
        return view('livewire.users.org.setting');
    }

    public function update()
    {
        $this->validate();
        dd($this->setting->primary_color);
        if ($this->logo_lg_light) {
            $this->setting->logo_lg_light = $this->logo_lg_light->store('logos', 'uploads');
        }
        if ($this->logo_sm_light) {
            $this->setting->logo_sm_light = $this->logo_sm_light->store('logos', 'uploads');
        }
        if ($this->logo_lg_dark) {
            $this->setting->logo_lg_dark = $this->logo_lg_dark->store('logos', 'uploads');
        }
        if ($this->logo_sm_dark) {
            $this->setting->logo_sm_dark = $this->logo_sm_dark->store('logos', 'uploads');
        }

        // Save settings
        $this->setting->save();
        session()->flash('status', 'updated.');

        // Optionally, you can redirect or emit an event here
    }
}
