<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Send a Message</h1>

      <form class="main-form" method="post" action="{{ route('appointment') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 pdy-2 wow fadeInLeft">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{ old('name') }}">
            @error('name')
                <p class="alert alert-danger py-0">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address.." value="{{ old('email') }}">
            @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
            @error('date')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="bookfor" id="bookfor" class="custom-select">
                <option {{ old('bookfor') === '' ? 'selected' : '' }} value="">Select a service</option>
                <option {{ old('bookfor') === 'general' ? 'selected' : '' }} value="general">Cottages</option>
                <option {{ old('bookfor') === 'ziplining' ? 'selected' : '' }} value="ziplining">zip lining</option>
                <option {{ old('bookfor') === 'nature_walk' ? 'selected' : '' }} value="nature_walk">Nature walk</option>
            </select>
            @error('bookfor')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="phone" class="form-control" placeholder="Number.." value="{{ old('phone') }}">
            @error('phone')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message..">{{ old('message') }}</textarea>
            @error('message')
                <p class="alert alert-danger py-0">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div>
