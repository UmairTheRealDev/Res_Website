@extends('Dashboard\Dash_main')

@section('main-content')
    <form action="{{ route('cheff.add') }}" method="POST" class="mx-5 my-5" enctype="multipart/form-data">
        <h1 class="h3"><strong>Add Cheff</strong></h1>
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control form-control-lg @error('name') is-invalid @enderror" type="text" name="name"
                value="{{ old('name') }}" placeholder="Enter chef's name" />
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email"
                value="{{ old('email') }}" placeholder="Enter chef's email" />
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Speciality</label>
            <input class="form-control form-control-lg @error('speciality') is-invalid @enderror" type="text"
                name="speciality" value="{{ old('speciality') }}" placeholder="Enter chef's speciality" />
            @error('speciality')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nationality</label>
            <input class="form-control form-control-lg @error('nationality') is-invalid @enderror" type="text"
                name="nationality" value="{{ old('nationality') }}" placeholder="Enter chef's nationality" />
            @error('nationality')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Experience</label>
            <input class="form-control form-control-lg @error('experience') is-invalid @enderror" type="text"
                name="experience" value="{{ old('experience') }}" placeholder="Enter years of experience" />
            @error('experience')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label"> Cheff Image</label>
            <input class="form-control form-control-lg @error('image') is-invalid @enderror" type="file"
                name="image" value="{{ old('image') }}" />
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>



        <div class="d-grid gap-2 mt-3">
            <button type="submit" class="btn  btn-primary">Add Chef</button>
        </div>
    </form>
@endsection
