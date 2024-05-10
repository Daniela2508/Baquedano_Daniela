function myFunction(){
    var x = document.getElementById("myTopnav");
    if(x.className == "topnav"){
        x.className += " responsive"
    } else{
        x.className = "topnav";
    }
}

let cartItems = [];

// Función para agregar un producto al carrito
function addToCart(productName, price) {
    cartItems.push({ name: productName, price: price });
    updateCart();
    document.getElementById('cartCount').textContent = cartItems.length; // Actualizar el contador del carrito
}
   
// Función para eliminar un producto del carrito
function removeFromCart(index) {
    // Eliminar el producto del carrito en el índice especificado
    cartItems.splice(index, 1);
    // Actualizar la vista del carrito después de eliminar el producto
    updateCart();
}



// Función para alternar la visibilidad del carrito
function toggleCart() {
    // Obtener el elemento del carrito por su ID
    const cartElement = document.getElementById('carrito');
    
    // Alternar la visibilidad del carrito cambiando su estilo display
    if (cartElement.style.display === 'block') {
        // Si el carrito está visible, ocultarlo
        cartElement.style.display = 'none';
    } else {
        // Si el carrito está oculto, mostrarlo
        cartElement.style.display = 'block';
    }
}


// Función para actualizar la vista del carrito
function updateCart() {
    console.log('Actualizando el carrito');    
    const cartListElement = document.getElementById('cartList');
    const totalElement = document.getElementById('total');
    console.log('Número de elementos en el carrito:', cartItems.length);
    
    // Vaciar el contenido actual del carrito
    cartListElement.innerHTML = '';

    // Calcular el total de la compra
    let total = 0;

    // Recorrer los elementos del carrito
    cartItems.forEach((item, index) => {
        // Crear un elemento de lista para cada producto
        const li = document.createElement('li');
        li.textContent = `${item.name} - €${item.price}`;
        
        // Botón para eliminar el producto del carrito
        // Botón para eliminar el producto del carrito
        const removeBtn = document.createElement('button');
        removeBtn.textContent = 'Eliminar';
        removeBtn.className = 'removeBtn'; // Agregar la clase removeBtn
        removeBtn.onclick = () => removeFromCart(index);
        li.appendChild(removeBtn);

        
        cartListElement.appendChild(li);
        
        // Sumar el precio del producto al total
        total += item.price;

    });

    // Mostrar el total en el carrito
    totalElement.textContent = `Total: €${total.toFixed(2)}`;
}

// Función para manejar el evento de realizar pedido
// Función para manejar el evento de realizar pedido
function checkout() {
    // Verificar si hay elementos en el carrito
    if (cartItems.length === 0) {
        alert('El carrito está vacío. Por favor, añade algunos productos antes de realizar el pedido.');
        return;
    }

    // Enviar los datos del carrito al servidor
    fetch('procesar_pedido.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(cartItems)
    })
    .then(response => response.json())
    .then(data => {
        // Verificar si el servidor ha procesado el pedido correctamente
        if (data.success) {
            // Mostrar un mensaje de éxito al usuario
            alert('Pedido realizado con éxito');
            // Vaciar el carrito después de realizar el pedido
            cartItems = [];
            updateCart();
        } else {
            // Mostrar un mensaje de error si el pedido no se pudo procesar
            alert('Error al procesar el pedido. Por favor, inténtalo de nuevo más tarde.');
        }
    })
    .catch(error => {
        // Mostrar un mensaje de error si ocurre algún problema con la solicitud
        console.error('Error al procesar el pedido:', error);
        alert('Error al procesar el pedido. Por favor, inténtalo de nuevo más tarde.');
    });
}

// Vincular la función de checkout al botón correspondiente
document.getElementById('checkoutBtn').addEventListener('click', checkout);

// Actualizar el carrito al cargar la página
window.onload = updateCart;


