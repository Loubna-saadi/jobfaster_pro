
    <div class="row">
        <div class="col-md-3">
            <div class="profile-pic-container">
                <img src="{{ asset($user->photo) }}" alt="Profile Picture" class="sidebar-profile-pic">
            </div>
        </div>
        <div class="col-md-9">
            <h4>Username: {{ $user->name }}</h4>
            <h4>Email: {{ $user->email }}</h4>
            <h4>Phone: {{ $user->phone }}</h4>
            @if($user->file)
                <a href="{{ asset($user->file) }}" download>Download CV</a>
            @else
                <p>No CV uploaded</p>
            @endif
        </div>
    </div>

