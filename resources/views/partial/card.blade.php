@foreach ($users as $user)
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $user->id }}:{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $user->age }}</h6>
            <p class="card-text">{{ $user->classe }}</p>
        </div>
    </div>
@endforeach
