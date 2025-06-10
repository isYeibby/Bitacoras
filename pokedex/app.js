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
        const habilidades = pokemon.abilities.map(h => h.ability.name).join(', ');
        const tipos = pokemon.types.map(t => t.type.name).join(', ');
        const stats = pokemon.stats.map(s => `${s.stat.name}: ${s.base_stat}`).join(', ');

        resultContainer.innerHTML = `
            <h2>${pokemon.name.toUpperCase()} (ID: ${pokemon.id})</h2>
            <p><strong>Tipo(s):</strong> ${tipos}</p>
            <p><strong>Altura:</strong> ${(pokemon.height / 10).toFixed(1)} m</p>
            <p><strong>Peso:</strong> ${(pokemon.weight / 10).toFixed(1)} kg</p>
            <p><strong>Habilidades:</strong> ${habilidades}</p>
            <p><strong>Estadísticas base:</strong> ${stats}</p>
        `;
    }
});
