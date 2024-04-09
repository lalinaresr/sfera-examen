import { GET_MY_INFO } from './constants.js';

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
});