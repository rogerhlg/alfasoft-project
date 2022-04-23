<x-layout>
    <x-slot name="body">
        <div class="show-contact-container">
            <h1>List of Contacts</h1>
            <ul>
                @foreach($contacts as $contact)
                    <li class="contact-list">
                        <a href="{{route('show-contact', $contact->id)}}">{{$contact->name}}</a>
                        <a href="{{route('update-contact', $contact->id)}}"><button>Update</button></a>
                        <a href="{{route('delete-contact', $contact->id)}}"><button>Delete</button></a>
                    </li>
                    
                @endforeach
            </ul>
        </div>
    </x-slot>
</x-layout>
