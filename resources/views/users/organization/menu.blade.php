<x-dayone.nav.item href="{{ route('organization.dashboard') }}" iconClass="ri-dashboard-line">Dashboard</x-dayone.nav.item>


<x-dayone.nav.parent-item iconClass="ri-account-circle-line" :hrefs="['organization.user.*', 'organization.role.*']" label="User Management">

    <x-dayone.nav.sub-item action="user:index" href="{{ route('organization.user.index') }}">Users</x-dayone.nav.sub-item>
    <x-dayone.nav.sub-item action="role:index" href="{{ route('organization.role.index') }}">Roles</x-dayone.nav.sub-item>
    <x-dayone.nav.sub-item action="settings:index" href="{{ route('organization.settings.index') }}">Settings</x-dayone.nav.sub-item>

</x-dayone.nav.parent-item>


