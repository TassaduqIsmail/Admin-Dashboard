<div>
    <x-dayone.page.header>
        <x-slot name="left">
            <x-dayone.page.title>Settings</x-dayone.page.title>
        </x-slot>
    </x-dayone.page.header>

    <div>
        <x-bootstrap.card>

            <x-slot name="header">
                <h4 class="card-title">Settings</h4>
            </x-slot>

            <x-bootstrap.table>

                <x-slot name="head">
                    <th>Theme Mode</th>
                    <th>Primary Color</th>
                    <th>LOGO Light</th>
                    <th>LOGO Sm Light</th>
                    <th>LOGO Dark</th>
                    <th>LOGO Sm Dark</th>
                </x-slot>

                <x-slot name="body">
                    @isset($setting)
                        <th>{{ $setting->theme_mode }}</th>
                        <th><span style="color:{{ $setting->primary_color }}">{{ $setting->primary_color }}</span></th>
                        <th><img src="{{ asset('uploads/' . $setting->logo_lg_light) }}" height="100" width="100"
                                alt="logo-light"></th>

                        <th>
                            @if (!empty($setting->logo_sm_light))
                                <img src="{{ asset('uploads/' . $setting->logo_sm_light) }}" height="100" width="100"
                                    alt="logo-sm-light">
                            @else
                                Please Upload logo
                            @endif
                        </th>
                        <th>
                            @if (!empty($setting->logo_lg_dark))
                                <img src="{{ asset('uploads/' . $setting->logo_lg_dark) }}" height="100" width="100"
                                    alt="logo-sm-light">
                            @else
                                Please Upload logo
                            @endif
                        </th>
                        <th>
                            @if (!empty($setting->logo_sm_dark))
                                <img src="{{ asset('uploads/' . $setting->logo_lg_dark) }}" height="100" width="100"
                                    alt="logo-sm-light">
                            @else
                                Please Upload logo
                            @endif
                        </th>
                    @endisset
                </x-slot>

            </x-bootstrap.table>

        </x-bootstrap.card>
    </div>
    <div>
        <x-bootstrap.card>
            <x-slot name="header">
                <h4 class="card-title">Setting</h4>
            </x-slot>

            <x-bootstrap.form method="update">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="form-label">Select Mode</label>
                        <select class="form-control" name="theme_mode" wire:model="setting.theme_mode">
                            <option value="light">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label class="form-label">Primary Color</label>
                            <input type="color" class="form-control form-control-color w-100" value="#0f9cf3"
                                title="Primary Color" wire:model="setting.primary_color">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">Logo Light</label>
                        <input type="file" class="form-control" wire:model="logo_lg_light">
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">Logo Sm Light</label>
                        <input type="file" class="form-control" wire:model="logo_sm_light">
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">Logo Dark</label>
                        <input type="file" class="form-control" wire:model="logo_lg_dark">
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">Logo Sm Dark</label>
                        <input type="file" class="form-control" wire:model="logo_sm_dark">
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-end gap-2 align-items-center">
                    <x-bootstrap.button size="md" class="" color="secondary"
                        href="{{ route('organization.dashboard') }}">Back</x-bootstrap.button>
                    <x-bootstrap.form.button action="" :col="false">Update</x-bootstrap.form.button>
                </div>
            </x-bootstrap.form>

        </x-bootstrap.card>
    </div>
</div>
