<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cecy Store-Tienda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.12);
        }
        img{
            width: 80px;
            height: 80px;
        }
        /* Estilos para el formulario de pago */
#payment-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#payment-form label {
    margin-bottom: 10px;
}

#payment-form input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

#payment-form select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

#payment-form button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius 
   
    </style>
     <style>


        .button-3 {
            width: 500px;
            height: 50px;
            background-color: #667eea; /* Color de fondo */
            color: white; /* Color del texto */
            padding: 15px 30px; /* Espaciado interno */
            border: none; /* Sin borde */
            border-radius: 25px; /* Bordes redondeados */
            font-size: 18px; /* Tamaño de fuente */
            cursor: pointer; /* Cambiar cursor al pasar el mouse */
            transition: all 0.3s ease; /* Transición suave */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Sombra */
        }

        .button:hover {
            background-color: #667eea; /* Color de fondo al pasar el mouse */
            transform: translateY(-3px); /* Levantar el botón */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3); /* Sombra más intensa */
        }

        .button:active {
            transform: translateY(1px); /* Efecto de presión */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Sombra más suave */
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <header class="gradient-bg text-white py-6 shadow-lg">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl font-bold text-center">🛍️ Cecy Store</h1>
            </div>
        </header>

        <main class="container mx-auto px-4 py-8 flex-grow">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Productos -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Nuestros Productos</h2>
                    <div id="products" class="space-y-4">
                        <div class="product-card bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-4 flex justify-between items-center shadow-md">
                            <span class="text-lg font-medium text-gray-800">Centro de mesa de Nochebuena - $100
                                <img src="img1.jpeg"></span>
                            <button onclick="addToCart('Centro de mesa de Nochebuena', 100)" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300 transform hover:scale-105">
                                Agregar
                            </button>
                        </div>
                        <div class="product-card bg-gradient-to-r from-green-50 to-green-100 rounded-lg p-4 flex justify-between items-center shadow-md">
                            <span class="text-lg font-medium text-gray-800">Centro de mesa de reno - $150
                                <img src="img5.jpeg"></span>
                            <button onclick="addToCart('Centro de mesa de reno', 150)" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full transition duration-300 transform hover:scale-105">
                                Agregar
                            </button>
                        </div>
                        <div class="product-card bg-gradient-to-r from-purple-50 to-purple-100 rounded-lg p-4 flex justify-between items-center shadow-md">
                            <span class="text-lg font-medium text-gray-800">Estrella gigante con luces - $200
                                <img src="img11.jpeg"></span>
                            <button onclick="addToCart('Estrella gigante con luces', 200)" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full transition duration-300 transform hover:scale-105">
                                Agregar
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Carrito y Resumen -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">🛒 Carrito de Compras</h2>
                        <div class="bg-gray-100 rounded-lg p-4">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Total:</span>
                                <span id="total" class="font-bold text-xl">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Productos:</span>
                                <span id="productCount" class="font-bold">0</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-4 mb-6">
                        <h3 class="text-lg font-medium text-gray-700 mb-2">Productos en el Carrito</h3>
                        <div id="cartItems" class="text-sm text-gray-600"></div>
                        
                        <!-- Nueva sección para mensajes de descuento -->
                        <div id="discountMessage" class="mt-2 text-sm"></div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium text-gray-700 mb-2">Código de Descuento</h3>
                        <div class="flex">
                            <input 
                                type="text" 
                                id="discount" 
                                placeholder="Ingresa el código" 
                                class="flex-grow px-3 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            >
                            <button 
                                onclick="applyDiscount()" 
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-lg transition duration-300"
                            >
                                Aplicar
                            </button>

                        </div>

                    </div>

                </div><a href="Cecy Store _ Tienda online (1).php" class="button-3">Volver</a>
              




                <!-- Formulario de pago -->
<div class="bg-gray-50 rounded-lg p-4 mb-6">
    <h3 class="text-lg font-medium text-gray-700 mb-2">Pago</h3>
    <form id="payment-form" name="formulario" method="post" action="conexion.php">
        <div class="flex flex-col mb-4">
            <label for="payment-method">Método de pago:</label>
            <select id="payment-method" name="payment-method">
                <option value="tarjeta">Tarjeta de crédito</option>
                <option value="paypal">PayPal</option>
            </select>
        </div>
        <div class="flex flex-col mb-4">
            <label for="card-number">Número de tarjeta:</label>
            <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456">
        </div>
        <div class="flex flex-col mb-4">
            <label for="expiration-date">Fecha de vencimiento:</label>
            <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/AA">
        </div>
        <div class="flex flex-col mb-4">
            <label for="security-code">Código de seguridad:</label>
            <input type="text" id="security-code" name="security-code" placeholder="123">
        </div>
        <button type="submit" name="enviar" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">Realizar pago</button>
    </form>
</div>
    
            </div>
        </main>

        <footer class="bg-gray-800 text-white py-4">
            <div class="container mx-auto text-center">
                <p>Nuestros productos y la mejor calidad</p>
            </div>
        </footer>       
    </div>

    <script>
        let total = 0;
        let originalTotal = 0;
        let discounted = false;
        let productCount = 0;
        let cartItems = [];

        function addToCart(productName, price) {
            total += price;
            originalTotal = total;
            productCount++;
            cartItems.push(productName);
            document.getElementById('total').textContent = '$' + total.toFixed(2);
            document.getElementById('productCount').textContent = productCount;
            document.getElementById('cartItems').textContent = cartItems.join(', ');
        }

        function applyDiscount() {
            const discountCode = document.getElementById('discount').value;
            const discountMessageElement = document.getElementById('discountMessage');

            if (discountCode === 'DESCUENTO10' && !discounted) {
                total *= 0.9;
                discounted = true;
                document.getElementById('total').textContent = '$' + total.toFixed(2);
                
                // Mostrar mensaje de descuento
                discountMessageElement.innerHTML = `
                    <div class="bg-green-100 border border-green-400 text-green-700 px-3 py-2 rounded">
                        ✅ Descuento aplicado. 
                        Total original: $${originalTotal.toFixed(2)} 
                        Nuevo total: $${total.toFixed(2)}
                    </div>
                `;
            } else if (discounted) {
                discountMessageElement.innerHTML = `
                    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-3 py-2 rounded">
                        ⚠️ El descuento ya ha sido aplicado.
                    </div>
                `;
            } else {
                discountMessageElement.innerHTML = `
                    <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded">
                        ❌ Código de descuento inválido
                    </div>
                `;
            }
        }


    // Procesar pago y generar ticket
document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const paymentMethod = document.getElementById('payment-method').value;
    const cardNumber = document.getElementById('card-number').value;
    const expirationDate = document.getElementById('expiration-date').value;
    const securityCode = document.getElementById('security-code').value;

    // Procesar pago
    if (paymentMethod === 'tarjeta') {
        // Procesar pago con tarjeta
        console.log('Procesando pago con tarjeta...');
    } else if (paymentMethod === 'paypal') {
        // Procesar pago con PayPal
        console.log('Procesando pago con PayPal...');
    }

    // Generar ticket
    const ticket = {
        productos: cartItems,
        total: total,
        pago: paymentMethod,
        fecha: new Date().toLocaleString()
    };

    // Mostrar ticket
    const ticketElement = document.createElement('div');
    ticketElement.innerHTML = `
        <h2>Ticket de compra</h2>
        <p>Productos: ${ticket.productos.join(', ')}</p>
        <p>Total: $${ticket.total.toFixed(2)}</p>
        <p>Método de pago: ${ticket.pago}</p>
        <p>Fecha: ${ticket.fecha}</p>
    `;
    document.getElementById('cartItems').appendChild(ticketElement);
});    
    </script>

</body>
</html>