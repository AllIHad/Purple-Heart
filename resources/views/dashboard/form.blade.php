<x-layout>
    <form action="{{ route('store') }}" method="post" class="mt-5">
        @csrf

        <h2 class="fw-bolder text-center">Form Content</h2>

        <div class="form-outline mb-3">
            <label class="form-label">Caption</label>
            <select class="form-select" name="socials" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Tiktok">Tiktok</option>
                <option value="Instagram">Instagram</option>
            </select>
            @error('socials')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline" data-mdb-input-init>
            <label class="form-label">Caption</label>
            <input type="text" name="caption" class="form-control form-control-lg" />
            @error('caption')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mt-3" data-mdb-input-init>
            <label class="form-label">Likes</label>
            <input type="text" name="likes" class="form-control form-control-lg" />
            @error('likes')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mt-3" data-mdb-input-init>
            <label class="form-label">Comments</label>
            <input type="text" name="comments" class="form-control form-control-lg" />
            @error('comments')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mt-3" data-mdb-input-init>
            <label class="form-label">Link</label>
            <input type="text" name="comments" class="form-control form-control-lg" />
            @error('comments')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid col-6 mx-auto mt-3 ">
            <button type="submit" class="btn btn-primary btn-lg ">Submit</button>
        </div>

    </form>
</x-layout>