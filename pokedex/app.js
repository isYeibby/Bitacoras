document.addEventListener('DOMContentLoaded', function() {
    const searchBtn = document.getElementById('search-btn');
    const pokemonNameInput = document.getElementById('pokemon-name');
    const resultContainer = document.getElementById('pokemon-result');

    searchBtn.addEventListener('click', buscarPokemon);
    pokemonNameInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') buscarPokemon();
    });

    function buscarPokemon() {
        const nombre = pokemonNameInput.value.trim().toLowerCase();
        
        if (!nombre) {
            resultContainer.innerHTML = '<p class="error">Ingresa un nombre de Pokémon</p>';
            return;
        }

        resultContainer.innerHTML = '<p>Buscando Pokémon...</p>';
        
        fetch(`fetch_pokemon.php?pokemon=${nombre}`)
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => { throw new Error(err.error); });
                }
                return response.json();
            })
            .then(data => {
                mostrarPokemon(data);
            })
            .catch(error => {
                resultContainer.innerHTML = `<p class="error">${error.message}</p>`;
            });
    }

    function mostrarPokemon(pokemon) {
        resultContainer.innerHTML = `
            <h2>${pokemon.name.toUpperCase()}</h2>
            <img src="${pokemon.sprites.front_default}" class="pokemon-image" alt="${pokemon.name}">
            <p><strong>Tipo:</strong> ${pokemon.types.map(t => t.type.name).join(', ')}</p>
        `;
    }
});