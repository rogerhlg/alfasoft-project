<x-layout>
    <x-slot name="title">
        Create Contact
    </x-slot>
    
    <x-slot name="body">
        <div class="add-contact-container">
            <form action="{{route('post-create-contact')}}" method="POST">
                @csrf
                <h1>Create Contact</h1>
                <label for="name">Name</label>
                <input id="name" name="name" type="text">
                <label for="email">Email</label>
                 <input id="email" name="email" type="email">
                <label for="tel">Phone</label>
                <input id="tel" name="contact" type="tel" maxlength="9" minlength="9">
                <button type="submit">Create</button>
            </form>
        </div>
    </x-slot>
</x-layout>