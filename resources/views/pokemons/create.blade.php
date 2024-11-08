<form action="{{ url('pokemons') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name" required>
    <hr>
    <label for="type">Type:</label>
    <input type="text" name="type" placeholder="Type" required>
    <hr>
    <label for="power_points">Power Points:</label>
    <input type="number" name="power_points" placeholder="0" required>
    <hr>
    <button type="submit">Create Pokemon</button>
</form>