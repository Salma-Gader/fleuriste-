$(document).ready(function() {
    $('.menu-btn').click(function() {
        $('nav').toggleClass('active');
    });
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    $('#order-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var order_id = button.data('order-id');
        var modal = $(this);

        $.ajax({
            url: '/orders/' + order_id,
            type: 'GET',
            // dataType: 'json',
            // data: formData,
            // contentType: false,
            // cache: false,
            // processData: false,
            success: function(response) {
                if (response.success) {
                    var order = response.order;
                    console.log(order);
                    modal.find('.modal-body').html('<p>Order ID: ' + order.id + '</p><p>Order Date: ' + order.created_at + '</p><p>Order Status: ' + order.status + '</p>');
                } else {
                    modal.find('.modal-body').html('<p>Error loading order details</p>');
                }
            },
            error: function() {
                modal.find('.modal-body').html('<p>Error loading order details</p>');
            }
        });
    });


});



function getOrder(order_id) {
    let inputeStatus = $("#orderStatusInput_id");
    inputeStatus.val("Loding...")

    $.ajax({
        url: '/orders/' + order_id,
        type: 'GET',
        success: function(data) {
            inputeStatus.val(data.order.status);
        }
    });
}

function getProduct(product_id) {
    let inputeStatus = $("#ProductInput_id");
    inputeStatus.val("Loding...")

    $.ajax({
        url: '/products/' + product_id,
        type: 'GET',
        success: function(data) {
            inputeStatus.val(data.order.status);
        }
    });
}
$(document).ready(function() {
    $('#example').DataTable();
});