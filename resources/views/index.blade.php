<x-layout>
    <x-slot name="body">
        <div class="show-contact-container">
            <h1>List of Contacts</h1>
            <ul>
                @foreach($contacts as $contact)
                    <li><a href="{{route('show-contact', $contact->id)}}">{{$contact->name}}</a></li>
                    <button><a href="{{route('update-contact', $contact->id)}}">Update</a></button>
                    <button><a href="">Delete</a></button>
                @endforeach
            </ul>
        </div>
        <button><a href="">add new contact</a></button>
    </x-slot>
</x-layout>
