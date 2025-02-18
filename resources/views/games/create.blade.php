@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Add New Game</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Game Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="picture" class="form-label">Game Picture</label>
                        <input type="file" name="picture" class="form-control" id="picture" accept="image/*" required>
                    </div>

                    <div class="mb-3">
                        <label for="metacritic" class="form-label">Metacritic Score</label>
                        <input type="number" name="metacritic" class="form-control" id="metacritic" min="0"
                            max="100" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Game</button>
                </form>
            </div>
        </div>
    </div>
@endsection
