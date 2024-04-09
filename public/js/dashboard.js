import { HOME, GET_MY_INFO, UPDATE_MY_INFO } from './constants.js';

jQuery(document).ready(function ($) {

    $.ajax({
        url: GET_MY_INFO,
        type: 'GET',
        dataType: 'json',
        beforeSend: function () {
            $("#data-username").text('...');
        },
        success: function (response) {
            $("#data-username").text(`${response.data.firstname} ${response.data.lastname}`);
        }
    });

    $('#edit-profile').on('show.bs.modal', function (e) {
        $.ajax({
            url: GET_MY_INFO,
            type: 'GET',
            dataType: 'json',
            beforeSend: function () {
                $("#id").val('...');
                $("#firstname").val('...');
                $("#lastname").val('...');
                $("#email").val('...');
                $("#password").val('...');
            },
            success: function (response) {
                $("#id").val(response.data.id);
                $("#firstname").val(response.data.firstname);
                $("#lastname").val(response.data.lastname);
                $("#email").val(response.data.email);
                $("#password").val(response.data.password);
            }
        });
    });

    $("#form-update-profile").submit(function (e) {
        e.preventDefault();

        let data = $(this).serialize();
        let type = $(this).attr('method');

        $.ajax({
            data,
            type,
            url: UPDATE_MY_INFO,
            dataType: 'json',
            beforeSend: function () {
                $("#btn-update-profile").attr('disabled', true);
                $("#btn-update-profile").text('Procesando...');
            },
            success: function (response) {
                $("#btn-update-profile").removeAttr('disabled');
                $("#btn-update-profile").html('<span class="glyphicon glyphicon-refresh"></span> Actualizar');

                if (response.type == 'success') {
                    location.href = HOME;
                }
            }
        });
    });
});