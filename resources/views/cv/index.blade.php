@extends('layouts.app')

@section('title', 'Curriculum Vitae - Linea Ilalang Banyu Bening')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="sidebar text-center">
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="img-fluid rounded-circle mb-3" width="150">
            <h3>Linea Ilalang Banyu Bening</h3>
            <p class="text-muted">Information System Student</p>

            <hr>

            <h5>Contact</h5>
            <p>📞 082241896899<br>
               ✉️ neailalang@gmail.com<br>
               📍 Yogyakarta, Indonesia</p>

            <h5>Education</h5>
            <p><strong>Bachelor of Information System</strong><br>
            Yogyakarta University of Technology (2023–2027)</p>

            <h5>Skills</h5>
            <ul class="text-start">
                <li>PowerPoint</li>
                <li>UI/UX Design</li>
                <li>Icon Design</li>
                <li>Excel</li>
                <li>Java Programming</li>
                <li>MySQL</li>
                <li>Word</li>
                <li>Teamwork</li>
                <li>Leadership</li>
                <li>Art</li>
                <li>Farming</li>
            </ul>

            <h5>Languages</h5>
            <ul class="text-start">
                <li>Indonesian</li>
                <li>English</li>
            </ul>
        </div>
    </div>

    <div class="col-md-8">
        <div class="content">
            <h2>Profile</h2>
            <p>
                I am an Information System student at Yogyakarta University of Technology who is actively developing technical and soft skills through several experiences. Experienced in financial management and have Java programming skills. In addition, I also have expertise in the fields of art and agriculture. I have an interest in contributing to social activities and community service.
            </p>

            <h2>Experience</h2>
            <table class="table table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th>Year</th>
                        <th>Position</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023–2024</td>
                        <td>Community Service</td>
                        <td>Be the committee for consumption, equipment, and documentation.</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>Volunteer - InspiraTrip</td>
                        <td>Responsible for being the catering committee during the event.</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>UI Designer</td>
                        <td>Designing page layouts, icons, buttons, and other graphic elements.</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>Gardening</td>
                        <td>Caring for and maintaining vegetable and fruit plants and providing education for the surrounding housing area.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
