<div>
    <form wire:submit.prevent="submitForm">
        <div class="mb-4">
            <label for="name" class="lms-label">Name</label>
            <input wire:model="name" class="lms-input" type="text">

            @error('name')
                <div class="text-red-500 text-sm mt-2">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="lms-label">Email</label>
            <input wire:model="email" class="lms-input" type="email">

            @error('email')
                <div class="text-red-500 text-sm mt-2">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="" class="lms-label">Phone</label>
            <input wire:model="phone" class="lms-input mt-2" type="tel">

            @error('phone')
                <div class="text-red-500 text-sm">{{$message}}</div>
            @enderror
        </div>

        <button class="lms-btn" type="submit">Update</button>
    </form>
</div>
