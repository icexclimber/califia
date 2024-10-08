const restaurants = [
    { nombre: 'Pizzería Italiana', tipo: 'italiana', ubicacion: 'centro', precio: 25, descripcion: 'Las mejores pizzas artesanales.' },
    { nombre: 'Tacos Don Pancho', tipo: 'mexicana', ubicacion: 'norte', precio: 15, descripcion: 'Tacos auténticos al pastor.' },
    { nombre: 'Sushi Bar', tipo: 'japonesa', ubicacion: 'sur', precio: 40, descripcion: 'Sushi fresco y de calidad.' },
    { nombre: 'Buffet Chino', tipo: 'china', ubicacion: 'este', precio: 30, descripcion: 'Buffet ilimitado de comida china.' },
    { nombre: 'Burgers & Co.', tipo: 'americana', ubicacion: 'oeste', precio: 50, descripcion: 'Las hamburguesas más jugosas.' },
    { nombre: 'Restaurante Italiano Gourmet', tipo: 'italiana', ubicacion: 'norte', precio: 70, descripcion: 'Experiencia italiana de lujo.' },
    { nombre: 'Comida China Express', tipo: 'china', ubicacion: 'centro', precio: 20, descripcion: 'Comida rápida china.' },
    { nombre: 'Mariscos del Sur', tipo: 'mexicana', ubicacion: 'sur', precio: 35, descripcion: 'Deliciosos mariscos y comida mexicana.' },
];

const foodTypeSelect = document.getElementById('food-type');
const locationSelect = document.getElementById('location');
const priceRangeSelect = document.getElementById('price-range');
const resultsGrid = document.getElementById('results-grid');
const applyFiltersButton = document.getElementById('apply-filters');

function filtrarRestaurantes() {
    const foodType = foodTypeSelect.value;
    const location = locationSelect.value;
    const priceRange = priceRangeSelect.value;

    let filteredRestaurants = restaurants;

    // Filtrar por tipo de comida
    if (foodType !== 'todos') {
        filteredRestaurants = filteredRestaurants.filter(restaurant => restaurant.tipo === foodType);
    }

    // Filtrar por ubicación
    if (location !== 'todas') {
        filteredRestaurants = filteredRestaurants.filter(restaurant => restaurant.ubicacion === location);
    }

    // Filtrar por rango de precios
    if (priceRange !== 'todos') {
        const [minPrice, maxPrice] = priceRange.split('-').map(Number);
        filteredRestaurants = filteredRestaurants.filter(restaurant => restaurant.precio >= minPrice && restaurant.precio <= maxPrice);
    }

    // Mostrar resultados
    resultsGrid.innerHTML = '';
    filteredRestaurants.forEach(restaurant => {
        const resultCard = document.createElement('div');
        resultCard.classList.add('result-card');
        resultCard.innerHTML = `
            <h3>${restaurant.nombre}</h3>
            <p>${restaurant.descripcion}</p>
            <p>Precio: ${restaurant.precio} USD</p>
            <p>Ubicación: ${restaurant.ubicacion}</p>
        `;
        resultsGrid.appendChild(resultCard);
    });
}

// Aplicar los filtros cuando se haga clic en el botón
applyFiltersButton.addEventListener('click', filtrarRestaurantes);

// Cargar todos los restaurantes al inicio
filtrarRestaurantes();
