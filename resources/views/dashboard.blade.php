@section('content_title', 'Dashboard')
<x-app-layout>
    <div class="card">
        <div class="card-body">
            Welcome to aplication <strong class="capitalise">{{ auth()->user()->name }}</strong>
        </div>
    </div>
</x-app-layout>
