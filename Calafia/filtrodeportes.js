const results = [
    { deporte: 'futbol', precio: 30, nombre: 'Clases de Fútbol', descripcion: 'Mejora tus habilidades.' },
    { deporte: 'basquetbol', precio: 70, nombre: 'Torneo de Básquetbol', descripcion: 'Compite con los mejores.' },
    { deporte: 'tenis', precio: 120, nombre: 'Clínica de Tenis', descripcion: 'Aprende de los profesionales.' },
    { deporte: 'natacion', precio: 50, nombre: 'Clases de Natación', descripcion: 'Perfecta tu técnica.' },
    { deporte: 'futbol', precio: 90, nombre: 'Torneo de Fútbol', descripcion: 'Juega con los mejores equipos.' },
    { deporte: 'tenis', precio: 45, nombre: 'Torneo de Tenis', descripcion: 'Compite a nivel amateur.' },
];

const sportTypeSelect = document.getElementById('sport-type');
const priceRangeSelect = document.getElementById('price-range');
const resultsGrid = document.getElementById('results-grid');
const applyFiltersButton = document.getElementById('apply-filters');

function filtrarResultados() {
    const sportType = sportTypeSelect.value;
    const priceRange = priceRangeSelect.value;

    let filteredResults = results;

    // Filtrar por tipo de deporte
    if (sportType !== 'todos') {
        filteredResults = filteredResults.filter(result => result.deporte === sportType);
    }

    // Filtrar por rango de precios
    if (priceRange !== 'todos') {
        const [minPrice, maxPrice] = priceRange.split('-').map(Number);
        filteredResults = filteredResults.filter(result => result.precio >= minPrice && result.precio <= maxPrice);
    }

    // Mostrar resultados
    resultsGrid.innerHTML = '';
    filteredResults.forEach(result => {
        const resultCard = document.createElement('div');
        resultCard.classList.add('result-card');
        resultCard.innerHTML = `
            <h3>${result.nombre}</h3>
            <p>${result.descripcion}</p>
            <p>Precio: ${result.precio} USD</p>
        `;
        resultsGrid.appendChild(resultCard);
    });
}

// Aplicar los filtros cuando se haga clic en el botón
applyFiltersButton.addEventListener('click', filtrarResultados);

// Cargar todos los resultados al inicio
filtrarResultados();
