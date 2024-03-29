// DATE FILTER 
function formatDate(dateString) {
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    const date = new Date(dateString);
    return date.toLocaleDateString('id-ID', options);
}

function enableAmbilButton() {
    // Check if both check-in and check-out dates are selected
    var checkin = document.getElementById("checkin").value;
    var checkout = document.getElementById("checkout").value;
    console.log(checkin && checkout);
    console.log(checkout);

    if (checkin && checkout) {
        // Enable buttons with IDs starting with "ambil"
        var buttons = document.querySelectorAll('[id^="ambil"]');
        buttons.forEach(function (button) {
            button.disabled = false;
        });
    } else {
        // Disable buttons with IDs starting with "ambil"
        var buttons = document.querySelectorAll('[id^="ambil"]');
        buttons.forEach(function (button) {
            button.disabled = true;
        });
    }
}

function updateValues() {
    var checkinValue = formatDate(document.getElementById("checkin").value);
    var checkoutValue = formatDate(document.getElementById("checkout").value);

    // Check if check-in date is after check-out date
    if (checkinValue > checkoutValue) {
        alert("Check-in date cannot be after check-out date.");
        return;
    }

    // Check if check-out date is the same or before check-in date
    if (checkoutValue <= checkinValue) {
        alert("Check-out date must be after check-in date.");
        return;
    }

    // Remove all cart items
    removeAllCartItems();

    document.getElementById("haricheckin").textContent = checkinValue;
    document.getElementById("haricheckout").textContent = checkoutValue;
    document.getElementById("haricheckinnavbar").textContent = checkinValue;
    document.getElementById("haricheckoutnavbar").textContent = checkoutValue;

    // Enable the "Ambil" button
    enableAmbilButton();
}

function removeAllCartItems() {
    // Remove all cart items from the main cart
    const mainCartItems = document.querySelectorAll('#cart-items > div');
    mainCartItems.forEach(item => item.remove());

    // Remove all cart items from the navbar cart
    const navbarCartItems = document.querySelectorAll('#cart-items-navbar > div');
    navbarCartItems.forEach(item => item.remove());

    // Update total after removing all cart items
    updateTotal();
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
function removeOptions(typeId, jumlah, max) {
    var select = document.getElementById("jumlah" + typeId);

    select.innerHTML = '';

    if (max == jumlah) {
        var option = document.createElement("option");
        option.text = 1;
        option.value = 0;
        select.appendChild(option);
        document.getElementById("ambil" + typeId).disabled = true;
    }
    else {
        for (var i = 1; i <= (max - jumlah); i++) {
            var option = document.createElement("option");
            option.text = i;
            option.value = i;
            select.appendChild(option);
        }
    }
}

function addOptions(typeId, max) {
    var select = document.getElementById("jumlah" + typeId);

    if (max == 0) {
        select.innerHTML = '';
        document.getElementById("ambil" + typeId).disabled = false;
    }
    var option = document.createElement("option");
    option.text = max + 1;
    option.value = max + 1;
    select.appendChild(option);
}

function addItem(typeid) {
    const namaKamar = document.getElementById('namakamar' + typeid).innerText;
    const hargaKamar = document.getElementById('hargakamar' + typeid).innerText;
    const select = document.getElementById('jumlah' + typeid);
    const options = select.getElementsByTagName('option');
    let max = Number.MIN_SAFE_INTEGER;
    for (let option of options) {
        const optionValue = parseInt(option.value);
        if (!isNaN(optionValue) && optionValue > max) {
            max = optionValue;
        }
    }
    const jumlah = select.value;

    // console.log('jumlah ' + jumlah, ' max ' + max);

    removeOptions(typeid, jumlah, max)

    const checkin = document.getElementById("checkin").value;
    const checkout = document.getElementById("checkout").value;

    if (!checkin || !checkout) {
        alert("Please select both check-in and check-out dates.");
        return;
    }

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
        <h1 class="hidden" id="typeid">${typeid}</h1>
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

    // console.log("Main Cart Item:", CartItem);
    // console.log("Cart Type:", cartType);

    const typeid = CartItem.querySelector('#typeid').textContent;
    const select = document.getElementById('jumlah' + typeid);
    const options = select.getElementsByTagName('option');
    let max = Number.MIN_SAFE_INTEGER;
    for (let option of options) {
        const optionValue = parseInt(option.value);
        if (!isNaN(optionValue) && optionValue > max) {
            max = optionValue;
        }
    }

    // console.log(typeid, max);
    addOptions(typeid, max);

    // Remove the main cart item
    CartItem.remove();

    if (cartType === 'main') {
        // Remove the corresponding item from the navbar cart
        const navbarItemId = CartItem.dataset.id;
        const navbarCartItem = document.querySelector(`#cart-items-navbar [data-id="${navbarItemId}"]`);
        // console.log("Navbar Cart Item:", navbarCartItem);
        if (navbarCartItem) {
            navbarCartItem.remove();
        } else {
            // console.log("Corresponding Navbar Cart Item not found!");
        }
    } else if (cartType === 'navbar') {
        // Remove the corresponding item from the main cart
        const mainItemId = CartItem.dataset.id;
        mainCartItem = document.querySelector(`#cart-items [data-id="${mainItemId}"]`); // Remove 'const'
        // console.log("Main Cart Item:", mainCartItem);
        if (mainCartItem) {
            mainCartItem.remove();
        } else {
            // console.log("Corresponding Main Cart Item not found!");
        }
    }

    // Update the total after removal
    updateTotal();
}

function updateTotal() {
    const checkinValue = new Date(document.getElementById("checkin").value);
    const checkoutValue = new Date(document.getElementById("checkout").value);

    const itemsMainCart = document.querySelectorAll('#cart-items [id^="hargapesankamar"]');
    const itemsNavbarCart = document.querySelectorAll('#cart-items-navbar [id^="hargapesankamar"]');

    let totalMainCart = calculateTotal(itemsMainCart, checkinValue, checkoutValue);
    let totalNavbarCart = calculateTotal(itemsNavbarCart, checkinValue, checkoutValue);

    document.getElementById('total').innerText = 'Rp ' + totalMainCart.toLocaleString();
    document.getElementById('totalnavbar').innerText = 'Rp ' + totalNavbarCart.toLocaleString();
}

function calculateTotal(items, checkin, checkout) {
    let total = 0;
    const durationInDays = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24)); // Calculate duration in days
    items.forEach(item => {
        total += parseInt(item.innerText.replace(/[^\d]/g, '')) * durationInDays; // Multiply item price by duration
    });
    return total;
}

function pesanSekarang() {
    const namaKepala1 = document.getElementById('namakepala1').value;
    const namaKepala2 = document.getElementById('namakepala2').value;
    const total = document.getElementById('total').innerText.replace(/[^\d]/g, '');
    const checkIn = document.getElementById('haricheckin').innerText;
    const checkOut = document.getElementById('haricheckout').innerText;
    const noteTambahan1 = document.getElementById('notetambahan1').value;
    const noteTambahan2 = document.getElementById('notetambahan2').value;
    const itemsMap = new Map(); // Changed from Set to Map to store counts

    console.log("note1" + noteTambahan1);
    console.log("kepala2" + namaKepala2);
    console.log("note2" + noteTambahan2);

    document.querySelectorAll('#side1 #namapesamkamar').forEach(item => {
        const itemName = item.innerText.trim();
        if (itemsMap.has(itemName)) {
            // If item exists in map, increment count
            itemsMap.set(itemName, itemsMap.get(itemName) + 1);
            console.log(itemsMap);
            console.log("1" + itemName);
        } else {
            // If item doesn't exist in map, set count to 1
            itemsMap.set(itemName, 1);
            console.log(itemsMap);
            console.log("2" + itemName);
        }
    });


    const pesanan = []; // Array to store item names with counts
    itemsMap.forEach((count, itemName) => {
        if (count > 1) {
            pesanan.push(`${itemName} (${count})`); // Add count after item name
        } else {
            pesanan.push(itemName);
            console.log(count);
        }
    });



    if (checkIn.trim() === 'none' && checkOut.trim() === 'none') {
        alert("Please select Check In and Check Out dates.");
    } else if (parseInt(total) === 0) {
        alert("Please select a room.");
    } if (namaKepala1.trim() === '' && namaKepala2.trim() === '') {
        alert("Please enter Nama Lengkap.");
    } else {
        if (namaKepala1.trim() !== '') {
            const url = `https://wa.me/+6281359994322?text=Nama%20Kepala:%20${namaKepala1}%0D%0ARuangan:%20${pesanan}%0D%0ACheck%20In:%20${checkIn}%0D%0ACheck%20Out:%20${checkOut}%0D%0ATotal:%20Rp%20${total}%0D%0ANote:%20${noteTambahan1}`;
            window.open(url, '_blank');
        }
        if (namaKepala2.trim() !== '') {
            const url = `https://wa.me/+6281359994322?text=Nama%20Kepala:%20${namaKepala2}%0D%0ARuangan:%20${pesanan}%0D%0ACheck%20In:%20${checkIn}%0D%0ACheck%20Out:%20${checkOut}%0D%0ATotal:%20Rp%20${total}%0D%0ANote:%20${noteTambahan2}`;
            window.open(url, '_blank');
        }
    }
}

function formatDate(value) {
    return value.replace('T', ' ');
}

function checkAvailability() {
    var checkinValue = formatDate(document.getElementById("checkin").value);
    var checkoutValue = formatDate(document.getElementById("checkout").value);

    // console.log('route ' + availabilityUrl);

    var formData = {
        _token: $('meta[name="csrf-token"]').attr('content'),
        start_date: checkinValue,
        end_date: checkoutValue
    };

    $.ajax({
        type: 'POST',
        url: availabilityUrl,
        data: formData,
        success: function (response) {
            if (response && response.availabletypes) {
                // console.log(response);
                var availableTypes = Object.values(response.availabletypes);

                availableTypes = availableTypes.map(function (element) {
                    return parseInt(element, 10);
                });

                $('[id^="type"]').show();

                $('[id^="type"]').each(function () {
                    var typeId = parseInt($(this).attr('id').replace('type', ''), 10);
                    if (availableTypes.indexOf(typeId) == -1) {
                        $(this).hide();
                    }
                });

                var roomPerTypes = response.roompertypes;
                // console.log("roomPerTypes:", response.roompertypes);
                $('[id^="jumlah"]').each(function () {
                    var typeId = parseInt($(this).attr('id').replace('jumlah', ''), 10);
                    // console.log("Type ID:", typeId);
                    var roomCount = roomPerTypes[typeId];
                    // console.log("Room Count:", roomCount);

                    $(this).empty();
                    for (var i = 1; i <= roomCount; i++) {
                        $(this).append('<option value="' + i + '">' + i + '</option>');
                    }
                });
            }
            else {
                $('[id^="type"]').hide();
            }
        },
        error: function (error) {
            console.log(error);
            $('[id^="type"]').hide();
        }
    });

    updateValues();
}