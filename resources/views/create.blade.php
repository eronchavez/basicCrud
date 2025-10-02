<x-layout>
  <h1>Library Management System</h1>
   <form action="{{ route('store.book') }}" method="POST">
      @csrf
      @include('partials.form')
      <input type="submit">
  </form>

</x-layout>