<div class="col-span-3 bg-white px-3 py-8 shadow">
    <div class="flex flex-col space-y-2 tracking-wide">
        <a href="{{ route('dashboard') }}"
            class="{{ Route::is('dashboard') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
            {{ __('Dashboard') }}
        </a>
        @role('user')
            <a href="{{ route('consult_history') }}"
                class="{{ Route::is('consult_history') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
                {{ __('Consultation History') }}
            </a>
        @else
            <a href="{{ route('symptoms.index') }}"
                class="{{ Route::is('symptoms.index') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
                {{ __('Symptom Data') }}
            </a>
            <a href="{{ route('diseases.index') }}"
                class="{{ Route::is('diseases.index') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
                {{ __('Disease Data') }}
            </a>
            <a href="{{ route('rules.index') }}"
                class="{{ Route::is('rules.index') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
                {{ __('Rule Data') }}
            </a>
            @role('admin')
                <a href="{{ route('experts.index') }}"
                    class="{{ Route::is('experts.index') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
                    {{ __('Expert List') }}
                </a>
            @endrole
            <a href="{{ route('consult_history') }}"
                class="{{ Route::is('consult_history') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
                {{ __('User Consultation History') }}
            </a>
        @endrole

        <div class="py-6">
            <hr class="border-gray-300">
        </div>

        <a href="{{ route('profile.show') }}"
            class="{{ Route::is('profile.show') ? 'side-nav-link-active' : 'side-nav-link' }} min-w-full line-clamp-1 leading-loose">
            {{ __('My Profile') }}
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"
                class="{{ Route::is('logout') ? 'side-nav-link-active' : 'side-nav-link' }} block min-w-full line-clamp-1 leading-loose"
                onclick="event.preventDefault();this.closest('form').submit();">
                {{ __('Logout') }}
            </a>
        </form>
    </div>
</div>
