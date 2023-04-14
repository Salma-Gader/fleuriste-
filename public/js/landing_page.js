let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

// $(function() {
//     $('a.add-to-cart').on('click', function(event) {
//         event.preventDefault();

//         var productId = $(this).data('product-id');
//         var url = "{{ route('cart.add') }}";

//         $.post(url, {
//             product_id: productId,
//             quantity: 1,
//             _token: "{{ csrf_token() }}"
//         }, function(response) {
//             alert('Item added to cart!');
//         });
//     });
// });