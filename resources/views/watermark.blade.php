<div class="row">
    <div class="col-md-6">
        <form action="{{ route('photoUpload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <button type="submit">Submit</button>
        </form>
    </div>
    <br><br><br>
    <div class="col-md-6">
        @forelse ($photos as $photo)
            <img src="{{asset('watermark/'.$photo->image) }}">
        @empty
            tidak ada photo
        @endforelse
    </div>
            <img src="{{ asset('watermark/1672712643aboutus.png') }}">

</div>
