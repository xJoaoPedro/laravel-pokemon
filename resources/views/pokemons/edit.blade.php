<form action="{{ url('pokemons/' . $pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name }}" required>
    <hr>
    <label for="type">Type:</label>
    <input type="text" name="type" placeholder="Type" value="{{ $pokemon->type }}" required>
    <hr>
    <label for="power_points">Power Points:</label>
    <input type="number" name="power_points" placeholder="0" value="{{ $pokemon->power_points }}" required>
    <hr>
    <button type="submit">Update Pokemon</button>
</form>