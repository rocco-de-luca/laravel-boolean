require('./bootstrap');

$(document).ready(function () {
    var container = $('.students');
    var filter = $("#filter"),
        apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';
    //console.log(apiUrl);

    var source = $('#student-template').html();
var template = Handlebars.compile(source);

    filter.on('change', function () {
        var gender = $(this).val();
        //console.log($gender);
        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: gender
            }
        })
            .done(function (res) {
                if (res.response.length > 0) {
                    //console.log(res.respone);
                    // clean
                    container.html('');
                    for(var i = 0; i < res.response.length; i++){
                        var student = res.response[i];
                        var context = {
                            slug: student.slug,
                            img: student.img,
                            nome: student.nome,
                            eta: student.eta, 
                            assunzione: (student.genere == 'm') ? 'Assunto' : 'Assunta', 
                            azienda: student.azienda,
                            ruolo: student.ruolo,
                            descrizione: student.descrizione
                        }

                        var output = template(context);
                        container.append(output);
                    }

                } else {
                    console.log(res.error);
                }

            })
            .fail(function () {
                console.log('API error');
            });
    });
});