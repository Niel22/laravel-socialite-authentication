<div class="container mt-3 card">
    <form wire:submit="register">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" wire:model="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            @error('email')
                <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" wire:model="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            @error('password')
                <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

    </form>


    <a href="{{ route('github') }}" class="btn btn-dark">Register with Github</a>
</div>