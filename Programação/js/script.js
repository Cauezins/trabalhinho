$(document).ready(() => {
    
    $('#cadastro').on('submit', e => {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../controller/cadastroController.php',
            data: $(e.target).serialize(),
            success: e => {
                $('#status').html('<strong>'+e+'</strong>')
                console.log(e);
            },
            error: e => {console.log(e);}
        })
    })

    $('#login').on('submit', e => {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../controller/loginController.php',
            data: $(e.target).serialize(),
            success: e => {
                $('#status').html('<strong>'+e+'</strong>')
                console.log(e);
            },
            error: e => {console.log(e);}
        })
    })


})   