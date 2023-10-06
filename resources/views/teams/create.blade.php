<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- TASK: change this field so it would contain old value after validation error --}}
    <input type="text" name="name" value="{{old('name')}}" />
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
