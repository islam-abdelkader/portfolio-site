<x-site.portfolio.sections._layout section="contact" subtitle="Get in touch" class="grid">
    <div class="contact__information">
        <i class="bx bx-phone-call contact__icon"></i>
        <div>
            <h3 class="contact__title">Call Me</h3>
            <span class="contact__subtitle">
                (+20)-1554-742-372
                <br>
                (+20)-1001-074-075
            </span>
        </div>
    </div>
    <div class="contact__information">
        <i class="bx bx-envelope contact__icon"></i>
        <div>
            <h3 class="contact__title">Email</h3>
            <span class="contact__subtitle">contact@islamabdelkader.com</span>
        </div>
    </div>
    <div class="contact__information">
        <i class="bx bx-map contact__icon"></i>
        <div>
            <h3 class="contact__title">Location</h3>
            <span class="contact__subtitle">Egypt - Dakahlia #35666</span>
        </div>
    </div>
</x-site.portfolio.sections._layout>
<form action="{{ route('addMessage') }}" method="POST" class="contact__form grid container">
    @csrf
    <div class="contact__inputs grid">
        <div class="contact__content">
            <label for="name" class="contact__label">Name</label>
            <input type="text" class="contact__input" name="name" id="name" value="{{ old('name') }}">
            @error('name')
            <div class="error">* {{ $message }} *</div>
            @enderror
        </div>
        <div class="contact__content">
            <label for="email" class="contact__label">Email</label>
            <input type="email" class="contact__input" name="email" id="email" value="{{ old('email') }}">
            @error('email')
            <div class="error">* {{ $message }} *</div>
            @enderror
        </div>
    </div>
    <div class="contact__content">
        <label for="message" class="contact__label">Message</label>
        <textarea name="message" id="message" cols="0" rows="7" class="contact__input">{{ old('message') }}</textarea>
        @error('message')
        <div class="error">* {{ $message }} *</div>
        @enderror
    </div>
    <div>
        <button type="submit" class="button button--flex">
            Send Message <i class="bx bx-send button__icon"></i>
        </button>
    </div>
</form>
