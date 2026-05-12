@extends('layouts.app')

@section('content')

<section class="project-page">

    <div class="top-bar">

        <h1>Pesan Masuk</h1>

    </div>

    <div class="project-grid">

        @foreach($contacts as $contact)

        <div class="project-card">

            <div class="project-content">

                <h2>{{ $contact->name }}</h2>

                <p>
                    <strong>Email:</strong>
                    {{ $contact->email }}
                </p>

                <p>
                    <strong>Phone:</strong>
                    {{ $contact->phone }}
                </p>

                <p>
                    <strong>Subject:</strong>
                    {{ $contact->subject }}
                </p>

                <p>
                    <strong>Pesan:</strong>
                    <br>
                    {{ $contact->message }}
                </p>

                <span>
                    {{ $contact->created_at->format('d M Y H:i') }}
                </span>

            </div>

        </div>

        @endforeach

    </div>

</section>

@endsection