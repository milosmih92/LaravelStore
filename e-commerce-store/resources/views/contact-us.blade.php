<x-layout>
    <div class="header">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-us">
        <h3>Please fill the form and our sales team will contact you.</h3>
        <form method="POST" action="/send-contact-us" class="contact-us-form">
            @csrf
            <div class="form-field">
                <label for="email" class="form-field-label">E-mail address:</label>
                <input id="email" name="email" type="email" class="form-field-value @error('email') is-invalid @enderror">
                @error('errorMessage', 'email')
                    <div class="alert alert-danger">{{ $errorMessage->email }}</div>
                @enderror
            </div>
            <div class="form-field">
                <label for="name" class="form-field-label">Full Name:</label>
                <input id="name" name="name" type="text" class="form-field-value @error('name') is-invalid @enderror">
                @error('errorMessage', 'name')
                    <div class="alert alert-danger">{{ $errorMessage->name }}</div>
                @enderror
            </div>
            <div class="form-field">
                <label for="phone" class="form-field-label">Phone Number:</label>
                <input id="phone" name="phone" type="tel" class="form-field-value @error('phone') is-invalid @enderror">
                @error('errorMessage', 'phone')
                    <div class="alert alert-danger">{{ $errorMessage->phone }}</div>
                @enderror
            </div>
            <div class="form-field">
                <label for="message" class="form-field-label">Message:</label>
                <textarea id="message" name="message" type="text" class="form-field-message @error('message') is-invalid @enderror" maxlength="1500"></textarea>
                @error('errorMessage', 'message')
                    <div class="alert alert-danger">{{ $errorMessage->message }}</div>
                @enderror
            </div>
            <div class="form-button">
                <button type="submit" class="form-button-submit">Send</button>
            </div>
        </form>
    </div>
</x-layout>
