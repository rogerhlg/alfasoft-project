<x-layout>
    <x-slot name="body">
        <div class="contact-container">
            <h1>{{$contact->name}}</h1>
            <ul>
                <li>Email: {{$contact->email}}</li>
                <li>Contact: {{$contact->contact}}</li>
                <li>Create at: {{$contact->created_at}}</li>
                <li>Updated at: {{$contact->updated_at}}</li>
            </ul>
            <button><a href="">Update</a></button>
            <button><a href="">Delete</a></button>
        </div>
    </x-slot>
</x-layout>