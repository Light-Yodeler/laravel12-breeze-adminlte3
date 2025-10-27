@section('content_title', __('Profile'))

<x-app-layout>
    <div class="row">
        <div class="col-lg-6">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="col-lg-6">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
