<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/applications.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>

<body>

    @include('layouts.sidebare')
    <div class="container">
        <h1>Applications for Job </h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Job Title</th>
                    <th>CV</th>
                    <th>Date Applied</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td><a href="#" class="user-link"
                                data-user-id="{{ $application->user->id }}">{{ $application->user->name }}</a></td>
                        <td>{{ $application->title }}</td>

                        <td><a href="{{ Storage::url($application->cv) }}">{{ $application->cv }}</a>
                            <a href="{{ asset($application->cv) }}" download>Download CV</a>
                        </td>
                        <td>{{ $application->created_at->format('m/d/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- Define the popup container -->
<div id="user-popup" class="popup" style="display: none;">
    <div id="popup-content"></div>
</div>
<script>
const userLinks = document.querySelectorAll('.user-link');
const overlay = document.createElement('div');
overlay.classList.add('overlay');
document.body.appendChild(overlay);
const popup = document.getElementById('user-popup');
const popupContent = document.getElementById('popup-content');

userLinks.forEach(userLink => {
    userLink.addEventListener('click', e => {
        e.preventDefault();
        const userId = userLink.dataset.userId;
        const url = `/users/${userId}`;

        // Make an AJAX request to get the user data
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const user = JSON.parse(xhr.responseText);
                if (user) {
                    // Update the popup content with the user information
                    const html = `
                        <div class="row">
                            <div class="col-md-3">
                                <div class="profile-pic-container">
                                    <img src="${user.photo}" alt="Profile Picture" class="sidebar-profile-pic">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h4>Username: ${user.name}</h4>
                                <h4>Email: ${user.email}</h4>
                                <h4>Phone: ${user.phone}</h4>
                                ${user.file ? `<a class="cv" href="${user.file}" download>Download CV</a>` : `<p>No CV uploaded</p>`}
                            </div>
                        </div>
                    `;
                    popupContent.innerHTML = html;
                    popup.style.display = 'block';
                    overlay.style.display = 'block';
                }
            }
        };
        xhr.send();
    });
});

// Close the popup when clicking outside
overlay.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
});



</script>

</body>

</html>
