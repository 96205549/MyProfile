/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function () {
    $('#postMsg').on('submit', function (e) {
        e.preventDefault();
        var carac = $('#msg').val();
        if (carac === '') {
            alert('Le champ ne peut être vide, veuillez saisir le nom de la caracteristique');
        } else {
            var monAjax = $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json'
            }).success(function (data) {
                var isSuccess = data.success !== undefined ? data.success : false;
                var msg = data.msg !== undefined ? data.msg : "";
                //var idcarac = data.id !== undefined ? data.id : "";
                if (isSuccess) {
                    alert("enregistrement avec succès");
                    //alert('success'+carac);
                    // $("#commentaire").html("<div class='alert alert-success'>" + msg + "</div>");
                    $("#comment").append('<span class="col-md-7 comment-profile fa fa-user text-primary"> Clotoe rodrigue</span>' +
                            '<span class="col-md-12"> ' +
                            ' </span>' + carac + '' +
                            '<span>&nbsp;</span>').add();
                } else if (msg.length > 0) {
                    alert("helolllo");
                    //$("#commentaire").html("<div class='alert alert-danger'>" + msg + "</div>");
                }
            }).error(function (xhr) {
                alert(xhr.responseText);
                console.log(xhr.responseText);
            });

        }
    });

    $(function () {
        $('.edit-carac').click(function (ev) {
            ev.preventDefault();
            var $id = this.id;
            alert("id = " + $id);
        });
    });

    function reload() {
        alert("hello");
        window.setTimeout(reload, 2000);
    }

    // window.setTimeout(reload, 2000);



});