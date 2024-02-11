// DATE FILTER 
function formatDate(dateString) {
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    const date = new Date(dateString);
    return date.toLocaleDateString('id-ID', options);
}

function updateValues() {
    var checkinValue = formatDate(document.getElementById("checkin").value);
    var checkoutValue = formatDate(document.getElementById("checkout").value);

    document.getElementById("haricheckin").textContent = checkinValue;
    document.getElementById("haricheckout").textContent = checkoutValue;
    document.getElementById("haricheckinnavbar").textContent = checkinValue;
    document.getElementById("haricheckoutnavbar").textContent = checkoutValue;
}

// Get current date
const today = new Date();
const year = today.getFullYear();
const month = String(today.getMonth() + 1).padStart(2, '0');
const day = String(today.getDate()).padStart(2, '0');

// Set min attribute for checkin and checkout inputs
const checkinInput = document.getElementById('checkin');
checkinInput.setAttribute('min', `${year}-${month}-${day}`);

const checkoutInput = document.getElementById('checkout');
checkoutInput.setAttribute('min', `${year}-${month}-${day}`);



// TRANSACTION Navbar
var toggleBtn = document.getElementById('toggleup');
var collapseTransac = document.getElementById('collapseTransac');

function handleClick() {
    if (collapseTransac.style.display === 'block') {
        collapseTransac.style.display = 'none';
    } else {
        collapseTransac.style.display = 'block';
    }
}

toggleBtn.addEventListener('click', handleClick);

// TRANSACTION
function addItem() {
    const namaKamar = document.getElementById('namakamar1').innerText;
    const hargaKamar = document.getElementById('hargakamar1').innerText;
    const jumlah = document.getElementById('jumlah').value;

    for (let i = 0; i < jumlah; i++) {
        const cartItemId = `cart-item-${i}`;

        const cartItem = document.createElement('div');
        cartItem.dataset.id = cartItemId;
        cartItem.dataset.cart = 'main';
        cartItem.id = cartItemId;
        cartItem.innerHTML = `
<div class="container mx-auto md:grid md:grid-cols-2">
    <div class="flex flex-col">
        <h1 class="mb-2 font-bold" id="namapesamkamar">${namaKamar}</h1>
    </div>
    <div class="flex flex-col items-end">
        <button onclick="removeItem(this)"
            class="rounded-md bg-red-600 px-3 py-.5 text-sm font-semibold leading-6 text-white hover:bg-red-800">
            Batal
        </button>
    </div>
    <div class="flex flex-col"> </div>
    <div class="flex flex-col items-end">
        <h1 class="mb-2 font-medium" id="hargapesankamar">${hargaKamar}</h1>
    </div>
</div>`;

        const cartItemNavbar = cartItem.cloneNode(true); // Clone the cartItem
        cartItemNavbar.dataset.id = cartItemId; // Set data-id attribute with the generated ID for navbar item
        cartItemNavbar.dataset.cart = 'navbar'; // Set data-cart attribute to indicate it's from the navbar cart
        cartItemNavbar.id = `cart-item-navbar-${i}`; // Set id attribute for navbar item

        document.getElementById('cart-items').appendChild(cartItem);
        document.getElementById('cart-items-navbar').appendChild(cartItemNavbar);
    }

    updateTotal();
}

function removeItem(element) {
    const CartItem = element.parentElement.parentElement.parentElement;
    const cartType = CartItem.dataset.cart; // Get the value of data-cart attribute

    console.log("Main Cart Item:", CartItem);
    console.log("Cart Type:", cartType);

    // Remove the main cart item
    CartItem.remove();

    if (cartType === 'main') {
        // Remove the corresponding item from the navbar cart
        const navbarItemId = CartItem.dataset.id;
        const navbarCartItem = document.querySelector(`#cart-items-navbar [data-id="${navbarItemId}"]`);
        console.log("Navbar Cart Item:", navbarCartItem);
        if (navbarCartItem) {
            navbarCartItem.remove();
        } else {
            console.log("Corresponding Navbar Cart Item not found!");
        }
    } else if (cartType === 'navbar') {
        // Remove the corresponding item from the main cart
        const mainItemId = CartItem.dataset.id;
        mainCartItem = document.querySelector(`#cart-items [data-id="${mainItemId}"]`); // Remove 'const'
        console.log("Main Cart Item:", mainCartItem);
        if (mainCartItem) {
            mainCartItem.remove();
        } else {
            console.log("Corresponding Main Cart Item not found!");
        }
    }

    // Update the total after removal
    updateTotal();
}

function updateTotal() {
    const itemsMainCart = document.querySelectorAll('#cart-items #hargapesankamar');
    const itemsNavbarCart = document.querySelectorAll('#cart-items-navbar #hargapesankamar');

    let totalMainCart = calculateTotal(itemsMainCart);
    let totalNavbarCart = calculateTotal(itemsNavbarCart);

    document.getElementById('total').innerText = 'Rp ' + totalMainCart.toLocaleString();
    document.getElementById('totalnavbar').innerText = 'Rp ' + totalNavbarCart.toLocaleString();
}

function calculateTotal(items) {
    let total = 0;
    items.forEach(item => {
        total += parseInt(item.innerText.replace(/[^\d]/g, ''));
    });
    return total;
}


function pesanSekarang() {
    const namaKepala = document.getElementById('namakepala').value;
    const total = document.getElementById('total').innerText.replace(/[^\d]/g, '');
    const checkIn = document.getElementById('haricheckin').innerText;
    const checkOut = document.getElementById('haricheckout').innerText;
    const items = new Set();
    const pesanan = [];

    document.querySelectorAll('#namapesamkamar').forEach(item => {
        const itemName = item.innerText.trim();
        if (!items.has(itemName)) { // Check if item has not been added yet
            items.add(itemName); // Add item to Set
            pesanan.push(itemName); // Add item to pesanan array
        }
    });

    if (checkIn.trim() === 'none' && checkOut.trim() === 'none') {
        alert("Please select Check In and Check Out dates.");
    } else if (parseInt(total) === 0) {
        alert("Please select a room.");
    } else if (namaKepala.trim() === '') {
        alert("Please enter Nama Kepala.");
    } else {
        const url = `https://wa.me/+6285655567005?text=Nama%20Kepala:%20${namaKepala}%0D%0ARuangan:%20${pesanan}%0D%0ACheck%20In:%20${checkIn}%0D%0ACheck%20Out:%20${checkOut}%0D%0ATotal:%20Rp%20${total}`;
        window.open(url, '_blank');
    }
}