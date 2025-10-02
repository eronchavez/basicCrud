<x-layout>

    <form action="{{ route ('book.update', $book )}}" method="POST">
        @method('PUT')
        <h1>Library Management System</h1>
        @csrf
        @include('partials.form')
        <input type="submit">
    </form>
</x-layout>