<x-layout>
    <x-slot name="title">
        Update Contact
    </x-slot>
    
    <x-slot name="body">
        <div class="add-contact-container">
            <form action="{{route('post-update-contact', $contact->id)}}" method="POST">
                @csrf
                <h1>Update Contact</h1>
                <label for="name"></label>
                <input id="name" name="name" type="text" value="{{$contact->name}}">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{$contact->email}}">
                <label for="tel">Contact</label>
                <input id="tel" name="contact" type="tel" maxlength="9" minlength="9" value="{{$contact->contact}}">
                <input type="hidden" name="id" value="{{$contact->id}}">
                <button type="submit">Update</button>
            </form>
        </div>
        <button><a href="">View ALL</a></button>
    </x-slot>
</x-layout>