<div class="nav nav-pills flex-column">
    
    <a class="nav-link {{ return_if(on_page('account'), 'active') }}" href="{{ route('leads.create.lead') }}">Add Leads</a>

    <a class="nav-link {{ return_if(on_page('account/profile'), 'active') }}" href=" {{ route('leads.index') }} ">View All Leads</a>

    {{-- <a class="nav-link {{ return_if(on_page('account/password'), 'active') }}" href=" {{ route('account.password.index') }} ">Change Password</a> --}}

</div>
